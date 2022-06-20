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
        'about_seo_title' => 'About Seo title',
        'about_seo_description' => 'About Seo Description',
        'about_seo_keywords' => 'About Seo Keywords',
        'home_seo_title' => 'Home Seo title',
        'home_seo_description' => 'Home Seo Description',
        'home_seo_keywords' => 'Home Seo Keywords',
        'career_seo_title' => 'Career Seo title',
        'career_seo_description' => 'Career Seo Description',
        'career_seo_keywords' => 'Career Seo Keywords',
        'contact_seo_title' => 'Contact us Seo title',
        'contact_seo_description' => 'Contact us Seo Description',
        'contact_seo_keywords' => 'Contact us Seo Keywords',
        'service_seo_title' => 'Services Seo title',
        'service_seo_description' => 'Services Seo Description',
        'service_seo_keywords' => 'Services Seo Keywords',
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
