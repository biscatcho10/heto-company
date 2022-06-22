<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $settings = Setting::pluck('value', 'type')->toArray();
        return view('frontend.home', compact('settings'));
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
