<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectType;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Upload;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $settings = Setting::pluck('value', 'type')->toArray();
        $commercial_projects = ProjectType::where('title', 'Commercial')->first();
        $residential_projects = ProjectType::where('title', 'Residential')->first();
        $industrial_projects = ProjectType::where('title', 'Industrial')->first();
        $sliders = Slider::all();
        return view('frontend.home',
        compact(
            'settings',
            'commercial_projects',
            'residential_projects',
            'industrial_projects',
            'sliders'));
    }

    public function about()
    {
        $settings = Setting::pluck('value', 'type')->toArray();
        return view('frontend.about', compact('settings'));
    }

    public function projects()
    {
        $settings = Setting::pluck('value', 'type')->toArray();
        return view('frontend.projects', compact('settings'));
    }

    public function products()
    {
        $settings = Setting::pluck('value', 'type')->toArray();
        return view('frontend.products', compact('settings'));
    }

    public function careers()
    {
        $settings = Setting::pluck('value', 'type')->toArray();
        return view('frontend.careers', compact('settings'));
    }

    public function contacts()
    {
        $settings = Setting::pluck('value', 'type')->toArray();
        return view('frontend.contacts', compact('settings'));
    }
}
