<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\SlidersDataTable;
use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SlidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(SlidersDataTable $slidersDataTable)
    {
        return $slidersDataTable->render('admin.components.sliders.datatable');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $slider = new Slider();
        return view('admin.components.sliders.create', compact('slider'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image',
        ]);

        // save image
        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('heto/sliders'), $imageName);

        Slider::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'seo_title' => $request->seo_title,
            'seo_description' => $request->seo_description,
            'seo_keywords' => $request->seo_keywords,
            'image' => $imageName,
        ]);

        return redirect()->route('sliders.index')->with(['success' => 'Slider ' . __("messages.add")]);

    }



    public function edit(Slider $slider)
    {
        return view('admin.components.sliders.edit', compact('slider'));
    }


    public function update(Request $request, Slider $slider)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'image',
        ]);

        // save image
        if ($request->hasFile('image')) {
            // remove old image
            if (file_exists(public_path('heto/sliders/' . $slider->image))) {
                unlink(public_path('heto/sliders/' . $slider->image));
            }

            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('heto/sliders'), $imageName);
            $slider->image = $imageName;
        }

        $slider->title = $request->title;
        $slider->subtitle = $request->subtitle;
        $slider->seo_title = $request->seo_title;
        $slider->seo_description = $request->seo_description;
        $slider->seo_keywords = $request->seo_keywords;
        $slider->save();

        return redirect()->route('sliders.index')->with(['success' => 'Slider ' . __("messages.update")]);
    }


    public function destroy(Slider $slider)
    {
        // remove old image
        if (file_exists(public_path('heto/sliders/' . $slider->image))) {
            unlink(public_path('heto/sliders/' . $slider->image));
        }

        $slider->delete();
    }



    /**
     * @param Request $request
     * @return bool
     */
    public function reorder(Request $request): bool
    {
        $inputs = $request->except("_token");
        if ($inputs["ids"]) {
            foreach ($inputs["ids"] as $key => $input) {
                $slider = Slider::where("id", (int)$input)->first();
                if ($slider) {
                    $slider->position = $key + 1;
                    $slider->save();
                }
            }
        }
        return true;
    }
}
