<?php

use App\Http\Controllers\Frontend\ContactUsController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes(['register' => false]);

Route::get("/", [HomeController::class, 'index'])->name("home");
Route::get("/about", [HomeController::class, 'about'])->name("about");
Route::get("/projects", [HomeController::class, 'projects'])->name("projects");
Route::get("/projects/{project}", [HomeController::class, 'showProject'])->name("show.project");
Route::get("/products", [HomeController::class, 'products'])->name("products");
Route::get("/careers", [HomeController::class, 'careers'])->name("careers");
Route::get("/contact-us", [HomeController::class, 'contacts'])->name("contact.us");

// contact us form
Route::post("/contact", [ContactUsController::class, 'contact'])->name("contact");

// careers form
Route::post("/careers", [HomeController::class, 'saveCareers'])->name("save.careers");


Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function () {
    Route::get('/', 'DashboardController@index')->name("dashboard");
    Route::get('/map-url', 'DashboardController@mapData')->name("mapData");
    Route::get('/browser-usage', 'DashboardController@browserUsage')->name("browserUsage");
    Route::resource('careers', 'CareersController')->except('show');
    Route::resource('sliders', 'SlidersController')->except('show');
    Route::post('sliders/reorder', 'SlidersController@reorder')->name("sliders-reorder");
    Route::resource('clients', 'ClientController')->except('show');
    Route::post('clients/reorder', 'ClientController@reorder')->name("clients-reorder");
    Route::post('careers/show', 'CareersController@show')->name('careers.show');
    Route::post('careers/filter', 'CareersController@filter')->name('careers.filter');
    Route::get('careers/datatable', 'CareersController@datatable');
    Route::post('careers/reorder', 'CareersController@reorder')->name("careers-reorder");
    Route::resource('contacts', 'ContactsController');
    Route::resource('categories', 'CategoriesController');
    Route::post('categories/reorder', 'CategoriesController@reorder')->name("categories-reorder");
    Route::resource('settings', 'SettingsController')->except(['update', 'destroy', 'edit', 'store', 'create']);
    Route::post("settings", 'SettingsController@update')->name("settings.update");
    Route::get('sections', 'SettingsController@sections')->name("sections");
    Route::post("sections", 'SettingsController@updateSections')->name("sections.update");
    Route::resource('banners', 'BannersController')->except(['update', 'destroy', 'edit', 'store', 'create']);
    Route::post("banners", 'BannersController@update')->name("banners.update");
    Route::resource('uploads', 'UploadsController');
    Route::post('uploads/fetch', 'UploadsController@fetch')->name('uploads.fetch');
    Route::resource('project-types', 'ProjectTypesController');
    Route::resource('projects', 'ProjectsController');
    Route::post('projects/copy', 'ProjectsController@copy')->name('projects.copy');
    Route::post('projects/move', 'ProjectsController@move')->name('projects.move');
    Route::post('projects/reorder', 'ProjectsController@reorder')->name("projects-reorder");
    Route::resource('jobs', 'JobsController');
    Route::post('jobs/reorder', 'JobsController@reorder')->name("jobs-reorder");
    Route::resource('about', 'AboutSettingsController')->except(['update', 'destroy', 'edit', 'store', 'create']);
    Route::post("about", 'AboutSettingsController@update')->name("about.update");
    Route::resource('seos', 'SeoController')->except(['update', 'destroy', 'edit', 'store', 'create']);
    Route::post("seos", 'SeoController@update')->name("seos.update");
});

