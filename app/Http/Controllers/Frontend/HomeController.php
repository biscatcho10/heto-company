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
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{

    public function index()
    {
        $settings = Setting::pluck('value', 'type')->toArray();
        $commercial_projects = ProjectType::where('title', 'Commercial')->first();
        $residential_projects = ProjectType::where('title', 'Residential')->first();
        $industrial_projects = ProjectType::where('title', 'Industrial')->first();
        $sliders = Slider::all();
        $clients = Client::all();
        $products = Product::all()->take(4);
        $projects = Project::all();
        $projects = $projects->map(function ($project) {
            $project->type = $project->project_type->title;
            return $project;
        });
        return view('frontend.home',
        compact(
            'settings',
            'commercial_projects',
            'residential_projects',
            'industrial_projects',
            'sliders',
            'clients',
            'projects',
            'products'
        ));
    }

    public function about()
    {
        $upload = Banner::where('page_key', 'about')->first()->upload_id;
        $banner = $upload ? $banner = asset('heto/gallery/'. get_file_name($upload)) : null;
        $settings = Setting::pluck('value', 'type')->toArray();
        return view('frontend.about', compact('settings', 'banner'));
    }

    public function projects()
    {
        $upload = Banner::where('page_key', 'projects')->first()->upload_id;
        $banner = $upload ? $banner = asset('heto/gallery/'. get_file_name($upload)) : null;
        $settings = Setting::pluck('value', 'type')->toArray();
        $projects = Project::whereIn('project_type_id', [1, 2])->paginate(6);
        return view('frontend.projects', compact('settings', 'projects', 'banner'));
    }

    public function products()
    {
        $upload = Banner::where('page_key', 'products')->first()->upload_id;
        $banner = $upload ? $banner = asset('heto/gallery/'. get_file_name($upload)) : null;
        $products = Product::paginate(4);
        $settings = Setting::pluck('value', 'type')->toArray();
        return view('frontend.products', compact('settings', 'products', 'banner'));
    }

    public function careers()
    {
        $upload = Banner::where('page_key', 'careers')->first()->upload_id;
        $banner = $upload ? $banner = asset('heto/gallery/'. get_file_name($upload)) : null;
        $settings = Setting::pluck('value', 'type')->toArray();
        $jobs = Job::pluck('title', 'id')->toArray();
        return view('frontend.careers', compact('settings', 'jobs', 'banner'));
    }

    public function contacts()
    {
        $upload = Banner::where('page_key', 'contact')->first()->upload_id;
        $banner = $upload ? $banner = asset('heto/gallery/'. get_file_name($upload)) : null;
        $settings = Setting::pluck('value', 'type')->toArray();
        return view('frontend.contacts', compact('settings', 'banner'));
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
        $banner = $upload ? $banner = asset('heto/gallery/'. get_file_name($upload)) : null;
        $gallery = json_decode($project->gallery);
        $settings = Setting::pluck('value', 'type')->toArray();
        $next_project = Project::where('id', '>', $project->id)->where('project_type_id', $project->project_type_id)->first();
        $prev_project = Project::where('id', '<', $project->id)->where('project_type_id', $project->project_type_id)->first();
        $different_projects = Project::where('project_type_id', '!=', $project->project_type_id)->get();
        return view('frontend.project', compact('settings', 'project', 'next_project', 'prev_project', 'gallery', 'different_projects', 'banner'));
    }
}
