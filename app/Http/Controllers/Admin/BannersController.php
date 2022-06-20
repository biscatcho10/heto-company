<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class BannersController extends Controller
{
    public static $banners = [
        'about' => 'About',
        'vission' => "Vission",
        'mission' => 'Mission',
        'career' => "Career",
        'commercial' => "Commercial",
        'residential' => "Residential",
        'industry' => "Industry",
        'contact' => "Contact",
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $banners = collect();
        foreach ($this::$banners as $s => $x) {
            $banner = Banner::firstOrCreate(['page_key' => $s], ['upload_id' => null]);
            $banner['message'] = $x;
            $banners->add($banner);
        }
        return view('admin.components.banner.index', compact('banners'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(Request $request): RedirectResponse
    {
        $inputs = $request->except("_token","_method");
        foreach ($inputs as $input => $value) {
            if (array_key_exists($input, $this::$banners)) {
                Banner::where("page_key", $input)->update(['upload_id' => $value]);
            } else {
                return redirect()->route("banners.index")->withErrors("Invalid values");
            }
        }
        return redirect()->route('banners.index')->with(['success' => 'Banners ' . __("messages.update")]);
    }

}
