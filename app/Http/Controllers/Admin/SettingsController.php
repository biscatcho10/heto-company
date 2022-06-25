<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class SettingsController extends Controller
{
    public static $settings = [
        'logo' => 'Logo',
        'fb_link' => "Facebook Link",
        'in_link' => 'Instagram Link',
        'wts_link' => "Whatsapp Link",
        'address' => 'Address',
        'fax' => 'Fax',
        'cellular' => 'Cellular',
        'phone' => "Phone",
        'email' => "Email Address",
        'opening_time' => "Opening time",
        'facebook_pixel' => "Facebook Pixel",
        'google_analysis' => "Google Analysis",
    ];


    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $settings = collect();
        foreach ($this::$settings as $s => $x) {
            $setting = Setting::firstOrCreate(['type' => $s], ['value' => $s]);
            $setting['message'] = $x;
            $settings->add($setting);
        }

        return view('admin.components.setting.index', compact('settings'));
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
                Setting::where("type", $input)->update(['value' => $value]);
            } else {
                return redirect()->route("settings.index")->withErrors("Invalid values");
            }
        }
        return redirect()->route('settings.index')->with(['success' => 'Settings ' . __("messages.update")]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function sections()
    {
        $settings = Setting::pluck('value', 'type')->toArray();
        return view('admin.components.setting.sections', compact('settings'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function updateSections(Request $request): RedirectResponse
    {
        $inputs = $request->except("_token", "hp_about_image", "hp_career_image");

        if ($request->hasFile('hp_about_image')) {
            $inputs['hp_about_image'] = $this->uploadImage($request->file('hp_about_image'));
        }


        if ($request->hasFile('hp_career_image')) {
            $inputs['hp_career_image'] = $this->uploadImage($request->file('hp_career_image'));
        }

        foreach ($inputs as $input => $value) {
            Setting::where("type", $input)->update(['value' => $value]);
        }
        return redirect()->route('sections')->with(['success' => 'Sections data ' . __("messages.update")]);
    }



    protected function uploadImage($image)
    {
        $name = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('/heto/sections');
        $image->move($destinationPath, $name);
        return $name;
    }
}
