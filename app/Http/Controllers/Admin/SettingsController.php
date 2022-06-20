<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public static $settings = [
        'logo' => 'Logo',
        'fb_link' => "Facebook Link",
        'in_link' => 'Instagram Link',
        'wts_link' => "Whatsapp Link",
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

}
