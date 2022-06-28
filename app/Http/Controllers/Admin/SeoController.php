<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Seo;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SeoController extends Controller
{
    public static $settings = [
        'home_seo_title' => 'Home Seo title',
        'home_seo_keywords' => 'Home Seo Keywords',
        'home_seo_description' => 'Home Seo Description',
        'about_seo_title' => 'About Seo title',
        'about_seo_keywords' => 'About Seo Keywords',
        'about_seo_description' => 'About Seo Description',
        'project_seo_title' => 'Projects Seo title',
        'project_seo_keywords' => 'Projects Seo Keywords',
        'project_seo_description' => 'Projects Seo Description',
        'single_seo_title' => 'Single Project Seo title',
        'single_seo_keywords' => 'Single Project Seo Keywords',
        'single_seo_description' => 'Single Project Seo Description',
        'product_seo_title' => 'Products Seo title',
        'product_seo_keywords' => 'Products Seo Keywords',
        'product_seo_description' => 'Products Seo Description',
        'career_seo_title' => 'Career Seo title',
        'career_seo_keywords' => 'Career Seo Keywords',
        'career_seo_description' => 'Career Seo Description',
        'contact_seo_title' => 'Contact us Seo title',
        'contact_seo_keywords' => 'Contact us Seo Keywords',
        'contact_seo_description' => 'Contact us Seo Description',
    ];

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $seos = collect();
        foreach ($this::$settings as $s => $x) {
            $seo = Seo::firstOrCreate(['type' => $s], ['value' => $s]);
            $seo['message'] = $x;
            $seos->add($seo);
        }

        return view('admin.components.seo.index', compact('seos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(Request $request): RedirectResponse
    {
        $inputs = $request->except("_token");
        foreach ($inputs as $input => $value) {
            if (array_key_exists($input, $this::$settings)) {
                Seo::where("type", $input)->update(['value' => $value]);
            } else {
                return redirect()->route("seos.index")->withErrors("Invalid values");
            }
        }
        return redirect()->route('seos.index')->with(['success' => 'Seo ' . __("messages.update")]);
    }

}
