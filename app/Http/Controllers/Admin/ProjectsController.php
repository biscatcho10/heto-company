<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Project;
use App\Models\ProjectType;
use App\Models\Category;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|Response
     */
    public function create()
    {
        $categories = Category::all();
        $result=[];
        foreach ($categories as $category){
            $result[$category->id] = $category->title;
        }
        $categories = $result;

        $project_types = ProjectType::all();
        $result=[];
        foreach ($project_types as $project_type){
            $result[$project_type->id] = $project_type->title;
        }
        $project_types = $result;

        $project = new Project();
        return view('admin.components.project_type.project.create',compact('project','categories','project_types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        $input['gallery'] = json_decode($input['gallery']);
        $validator = Validator::make($input, Project::$cast);
        if ($validator->fails()) {
            return redirect()->route('projects.create')->withErrors($validator)->withInput();
        }
        $input['gallery'] = json_encode($input['gallery']);
        Project::create($input);
        return redirect()->route('project-types.index')->with(['success' => 'Project ' . __("messages.add")]);
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
        $categories = Category::all();
        $result=[];
        foreach ($categories as $category){
            $result[$category->id] = $category->title;
        }
        $categories = $result;

        $project_types = ProjectType::all();
        $result=[];
        foreach ($project_types as $project_type){
            $result[$project_type->id] = $project_type->title;
        }
        $project_types = $result;

        $project = Project::findorfail($id);
        $project->gallery = json_decode($project->gallery,true);
        $result = [];
        if(!empty($project->gallery)){
            foreach ($project->gallery as $image){
                $result[]= (int)$image;
            }
            $project->gallery = json_encode($result);
        }
        return view('admin.components.project_type.project.edit',compact('project','categories','project_types'));
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
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'title2' => 'nullable|max:255',
            'name' => 'required|max:255',
            'date' => 'required',
            'location' => 'required',
            'category_id' => 'required',
            'project_type_id' => 'required',
            'thumbnail_image' => 'required',
        ]);
        if ($request->gallery == "[]"){
            $request->validate([
                'gallery' => 'required|array',
            ],[
                'gallery.array' => 'Gallery is required',
            ]);
        }
        $input = $request->all();
        $project = Project::find($id);
        if ($input['gallery'] == null)
            $input['gallery'] = $project->gallery;
        $project->update($input);
        return redirect()->route('project-types.index')->with(['success' => 'Project ' . __("messages.update")]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $id = $project->project_type_id;
        $project->delete();
    }


    public function copy(Request $request){
        $input  = $request->all();
        $project = Project::findorfail($input['id']);
        $newProject = $project->replicate();
        $newProject->project_type_id = $input['project_type_id'];
        $newProject->created_at = Carbon::now();
        $newProject->save();
        return redirect()->route('project-types.show',$project->project_type_id)->with(['success' => 'Project ' . __("messages.copy")]);
    }

    public function move(Request $request){
        $input  = $request->all();
        $project = Project::findorfail($input['id']);
        $newProject = $project->replicate();
        $newProject->project_type_id = $input['project_type_id'];
        $newProject->created_at = Carbon::now();
        $newProject->save();
        $project->delete();
        return redirect()->route('project-types.show',$newProject->project_type_id)->with(['success' => 'Project ' . __("messages.move")]);
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
                $project = Project::where("id", (int)$input)->first();
                if ($project) {
                    $project->position = $key + 1;
                    $project->save();
                }
            }
        }
        return true;
    }
}
