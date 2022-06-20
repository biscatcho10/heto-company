<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('frontend.home');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function projects()
    {
        return view('frontend.projects');
    }

    public function products()
    {
        return view('frontend.products');
    }

    public function careers()
    {
        return view('frontend.careers');
    }

    public function contacts()
    {
        return view('frontend.contacts');
    }
}
