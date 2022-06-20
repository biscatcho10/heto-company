<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ProjectsDataTable;
use App\Http\Controllers\Controller;
use App\Models\ProjectType;
use App\Models\Project;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class ProjectTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $project_types = ProjectType::all();
        return view('admin.components.project_type.index', compact('project_types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     */
    public function show(ProjectsDataTable $projectsDataTable,$id)
    {
        return $projectsDataTable->with('id',$id)->render('admin.components.project_type.project.datatable');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Application|Factory|View
     */
    public function edit($id)
    {
        $project_type = ProjectType::findorfail($id);
//        dd(json_decode($project_type->gallery, true));
        return view('admin.components.project_type.edit',compact('project_type'));
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
        $project_type = ProjectType::find($id);
        $input['gallery'] =ProjectType::convert_to_int(json_decode($input['gallery'],true),null);
        $project_type->update($input);
        return redirect()->route('project-types.index')->with(['success' => 'Services ' . __("messages.update")]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {
        $project_type = ProjectType::findOrFail($id);
        $project_type->delete();
    }
}
