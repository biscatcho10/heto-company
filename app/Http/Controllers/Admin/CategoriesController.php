<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\CategoriesDataTable;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(CategoriesDataTable $categoriesDataTable)
    {
        return $categoriesDataTable->render('admin.components.category.datatable');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $category = new Category();
        return view('admin.components.category.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, Category::$cast);
        if ($validator->fails()) {
            return redirect()->route('categories.create')->withErrors($validator)->withInput();
        }
        Category::create($input);
        return redirect()->route('categories.index')->with(['success' => 'Category ' . __("messages.add")]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Application|Factory|View
     */
    public function edit($id)
    {
        $category = Category::findorfail($id);
        return view('admin.components.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $input = $request->all();
        $validator = Validator::make($input, Category::$cast);
        if ($validator->fails()) {
            return redirect()->route('categories.edit')->withErrors($validator)->withInput();
        }
        $category = Category::find($id);
        $category->update($input);
        return redirect()->route('categories.index')->with(['success' => 'Category ' . __("messages.update")]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
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
                $category = Category::where("id", (int)$input)->first();
                if ($category) {
                    $category->position = $key + 1;
                    $category->save();
                }
            }
        }
        return true;
    }
}
