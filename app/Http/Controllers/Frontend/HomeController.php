<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Career;
use App\Models\Client;
use App\Models\Job;
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
            'projects'
        ));
    }

    public function about()
    {
        $settings = Setting::pluck('value', 'type')->toArray();
        return view('frontend.about', compact('settings'));
    }

    public function projects()
    {
        $settings = Setting::pluck('value', 'type')->toArray();
        $projects = Project::whereIn('project_type_id', [1, 2])->paginate(6);
        return view('frontend.projects', compact('settings', 'projects'));
    }

    public function products()
    {
        $settings = Setting::pluck('value', 'type')->toArray();
        return view('frontend.products', compact('settings'));
    }

    public function careers()
    {
        $settings = Setting::pluck('value', 'type')->toArray();
        $jobs = Job::pluck('title', 'id')->toArray();
        return view('frontend.careers', compact('settings', 'jobs'));
    }

    public function contacts()
    {
        $settings = Setting::pluck('value', 'type')->toArray();
        return view('frontend.contacts', compact('settings'));
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
        $gallery = json_decode($project->gallery);
        $settings = Setting::pluck('value', 'type')->toArray();
        $next_project = Project::where('id', '>', $project->id)->where('project_type_id', $project->project_type_id)->first();
        $prev_project = Project::where('id', '<', $project->id)->where('project_type_id', $project->project_type_id)->first();
        $different_projects = Project::where('project_type_id', '!=', $project->project_type_id)->get();
        return view('frontend.project', compact('settings', 'project', 'next_project', 'prev_project', 'gallery', 'different_projects'));
    }
}
