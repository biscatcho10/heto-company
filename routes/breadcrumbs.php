<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', route('dashboard'));
});
Breadcrumbs::for('careers', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Careers', route('careers.index'));
});
Breadcrumbs::for('contacts', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Contacts', route('contacts.index'));
});
Breadcrumbs::for('categories', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Categories', route('categories.index'));
});
Breadcrumbs::for('sliders', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('sliders', route('sliders.index'));
});
Breadcrumbs::for('clients', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('clients', route('clients.index'));
});
Breadcrumbs::for('settings', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Settings', route('settings.index'));
});

Breadcrumbs::for('jobs', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Jobs', route('jobs.index'));
});


//Breadcrumbs::macro('resource', function (string $name, string $title) {
//    // Home > Blog
//    Breadcrumbs::for("{$name}.index", function (BreadcrumbTrail $trail) use ($name, $title) {
//        $trail->parent('dashboard');
//        $trail->push($title, route("{$name}.index"));
//    });
//
//    // Home > Blog > New
//    Breadcrumbs::for("{$name}.create", function (BreadcrumbTrail $trail) use ($name) {
//        $trail->parent("{$name}.index");
//        $trail->push('Create', route("{$name}.create"));
//    });
//
//    // Home > Blog > Post 123
//    Breadcrumbs::for("{$name}.show", function (BreadcrumbTrail $trail) use ($name) {
//        $trail->parent("{$name}.index");
//        $trail->push('View', route("{$name}.show"));
//    });
//
//    // Home > Blog > Post 123 > Edit
//    Breadcrumbs::for("{$name}.edit", function (BreadcrumbTrail $trail) use ($name) {
//        $trail->parent("{$name}.index");
//        $trail->push('Edit', route("{$name}.edit"));
//    });
//});
//
//
//Breadcrumbs::resource('careers', 'Careers');
//Breadcrumbs::resource('jobs', 'Jobs');
//Breadcrumbs::resource('categories', 'Categories');
