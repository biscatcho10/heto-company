<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Career;
use App\Models\Client;
use App\Models\Job;
use App\Models\Product;
use App\Models\Project;
use App\Models\ProjectType;
use App\Models\Seo;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Upload;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $seo;
    protected $settings;

    public function __construct()
    {
        $this->seo = Seo::pluck('value', 'type')->toArray();
        $this->settings = Setting::pluck('value', 'type')->toArray();
    }

    public function index()
    {
        $settings = $this->settings;
        $commercial_projects = ProjectType::find(1);
        $residential_projects = ProjectType::find(2);
        $industrial_projects = ProjectType::find(3);
        $sliders = Slider::all();
        $clients = Client::all();
        $products = Product::all()->take(4);
        $projects = Project::all();
        $projects = $projects->map(function ($project) {
            $project->type = $project->project_type->title;
            return $project;
        });


        $seo_title = $this->seo['home_seo_title'];
        $seo_description = $this->seo['home_seo_description'];
        $seo_keywords = $this->seo['home_seo_keywords'];

        return view(
            'frontend.home',
            compact(
                'settings',
                'commercial_projects',
                'residential_projects',
                'industrial_projects',
                'sliders',
                'clients',
                'projects',
                'products',
                'seo_title',
                'seo_description',
                'seo_keywords'
            )
        );
    }

    public function about()
    {
        $upload = Banner::where('page_key', 'about')->first()->upload_id;
        $banner = $upload ? $banner = asset('heto/gallery/' . get_file_name($upload)) : null;
        $settings = $this->settings;
        $seo_title = $this->seo['about_seo_title'];
        $seo_description = $this->seo['about_seo_description'];
        $seo_keywords = $this->seo['about_seo_keywords'];
        return view('frontend.about', compact('settings', 'banner', 'seo_title', 'seo_description', 'seo_keywords'));
    }

    public function projects()
    {
        $upload = Banner::where('page_key', 'projects')->first()->upload_id;
        $banner = $upload ? $banner = asset('heto/gallery/' . get_file_name($upload)) : null;
        $settings = $this->settings;
        // $projects = Project::whereIn('project_type_id', [1, 2])->orderBy('id', 'DESC')->paginate(6);
        $projects = Project::whereIn('project_type_id', [1, 2])->orderBy('id', 'DESC')->get();
        $seo_title = $this->seo['project_seo_title'];
        $seo_description = $this->seo['project_seo_description'];
        $seo_keywords = $this->seo['project_seo_keywords'];
        return view('frontend.projects', compact('settings', 'projects', 'banner', 'seo_title', 'seo_description', 'seo_keywords'));
    }

    public function products()
    {
        $upload = Banner::where('page_key', 'products')->first()->upload_id;
        $banner = $upload ? $banner = asset('heto/gallery/' . get_file_name($upload)) : null;
        $products = Product::paginate(4);
        $settings = $this->settings;
        $seo_title = $this->seo['product_seo_title'];
        $seo_description = $this->seo['product_seo_description'];
        $seo_keywords = $this->seo['product_seo_keywords'];
        return view('frontend.products', compact('settings', 'products', 'banner', 'seo_title', 'seo_description', 'seo_keywords'));
    }

    public function careers()
    {
        $upload = Banner::where('page_key', 'careers')->first()->upload_id;
        $banner = $upload ? $banner = asset('heto/gallery/' . get_file_name($upload)) : null;
        $settings = $this->settings;
        $seo_title = $this->seo['career_seo_title'];
        $seo_description = $this->seo['career_seo_description'];
        $seo_keywords = $this->seo['career_seo_keywords'];
        $jobs = Job::pluck('title', 'id')->toArray();
        return view('frontend.careers', compact('settings', 'jobs', 'banner', 'seo_title', 'seo_description', 'seo_keywords'));
    }

    public function contacts()
    {
        $upload = Banner::where('page_key', 'contact')->first()->upload_id;
        $banner = $upload ? $banner = asset('heto/gallery/' . get_file_name($upload)) : null;
        $settings = $this->settings;
        $seo_title = $this->seo['contact_seo_title'];
        $seo_description = $this->seo['contact_seo_description'];
        $seo_keywords = $this->seo['contact_seo_keywords'];
        return view('frontend.contacts', compact('settings', 'banner', 'seo_title', 'seo_description', 'seo_keywords'));
    }


    public function saveCareers(Request $request)
    {
        $input = $request->except('_token', '_method', 'upload_id');

        if ($request->hasFile('upload_id')) {
            $file = $request->file('upload_id');
            $name = time() . '-' . $file->getClientOriginalName();
            $file->move(public_path() . '/heto/gallery/', $name);
            $upload = Upload::create([
                "user_id" => 1,
                "file_original_name" => $file->getClientOriginalName(),
                "file_name" => $name,
                "file_size" => 1,
                "extension" => $file->getClientOriginalExtension(),
                "type" => "pdf/application",
            ]);
            $input['upload_id'] = $upload->id;
        }

        Career::create($input);
        toastr()->success('Your data saved successfully!');

        return redirect()->back();
    }


    public function showProject(Project $project)
    {
        $upload = Banner::where('page_key', 'single')->first()->upload_id;
        $banner = $upload ? $banner = asset('heto/gallery/' . get_file_name($upload)) : null;
        $gallery = json_decode($project->gallery);
        $settings = $this->settings;
        $seo_title = $this->seo['single_seo_title'];
        $seo_description = $this->seo['single_seo_description'];
        $seo_keywords = $this->seo['single_seo_keywords'];
        $next_project = Project::where('id', '>', $project->id)->where('project_type_id', $project->project_type_id)->first();
        $prev_project = Project::where('id', '<', $project->id)->where('project_type_id', $project->project_type_id)->first();
        $different_projects = Project::where('project_type_id', '!=', $project->project_type_id)->get();
        return view('frontend.project',
            compact(
                'settings',
                'project',
                'next_project',
                'prev_project',
                'gallery',
                'different_projects',
                'banner',
                'seo_title',
                'seo_description',
                'seo_keywords'
            )
        );
    }
}
