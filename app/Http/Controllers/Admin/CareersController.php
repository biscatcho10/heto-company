<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\CareersDataTable;
use App\Http\Controllers\Controller;
use App\Models\Career;
use App\Models\Contact;
use App\Models\Job;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CareersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(CareersDataTable $careersDataTable, Request $request)
    {
        $jobs = Job::all();
        $result=[];
        foreach ($jobs as $job){
            $result[$job->id] = $job->title;
        }
        array_unshift($result,'All');
        if($request->job_id === null) {
            $request->job_id = 0;
        }
        return $careersDataTable->with('job_id',$request->job_id)->render('admin.components.career.datatable',compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $jobs = Job::all();
        $result=[];
        foreach ($jobs as $job){
            $result[$job->id] = $job->title;
        }
        return view('admin.components.career.create',compact('result'));
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
        $validator = Validator::make($input, Career::$cast,messageUpload());
        if ($validator->fails()) {
            return redirect()->route('careers.create')->withErrors($validator)->withInput();
        }
        Career::create($input);

        //Sending Mail await mail configurations

        return redirect()->route('careers.index')->with(['success' => 'Career ' . __("messages.add")]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return bool
     */
    public function show(Request $request)
    {
        $input = $request->all();
        $career = Career::findorfail((int)$input['id']);
        if($career->seen == 0){
            $career->seen = 1;
            $career->save();
        }
        return true;
//        return redirect()->route('careers.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {
        $career = Career::findOrFail($id);
        $career->delete();
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
                $career = Career::where("id", (int)$input)->first();
                if ($career) {
                    $career->position = $key + 1;
                    $career->save();
                }
            }
        }
        return true;
    }


}
