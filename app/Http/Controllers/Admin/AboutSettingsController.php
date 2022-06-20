<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Setting;

class AboutSettingsController extends Controller
{

    public static $settings = [
        'about_title' => "Title of About",
        'about_image' => "Image of About",
        'vision_title' => "Title of Vision",
        'vision_image' => "Image of Vision",
        'mission_title' => "Title of Mission",
        'mission_image' => "Image of Mission",
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

        return view('admin.components.about.index', compact('settings'));
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request)
    {
        $inputs = $request->except("_token");
        foreach ($inputs as $input => $value) {
            if (array_key_exists($input, $this::$settings)) {
                Setting::where("type", $input)->update(['value' => $value]);
            } else {
                return redirect()->route("about.index")->withErrors("Invalid values");
            }
        }
        return redirect()->route('about.index')->with(['success' => 'About ' . __("messages.update")]);
    }
}
