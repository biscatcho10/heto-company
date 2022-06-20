<?php

namespace App\Http\Controllers\Admin;
use App\DataTables\JobsDataTable;
use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(JobsDataTable $jobsDataTable)
    {
//        $jobs = Job::all();
//        return view('admin.components.job.index',compact('jobs'));
        return $jobsDataTable->render('admin.components.job.datatable');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $job = new Job();
        return view('admin.components.job.create',compact('job'));
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
        $validator = Validator::make($input, Job::$cast);
        if ($validator->fails()) {
            return redirect()->route('jobs.create')->withErrors($validator)->withInput();
        }
        Job::create($input);
        return redirect()->route('jobs.index')->with(['success' => 'Job ' . __("messages.add")]);
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
        $job = Job::findorfail($id);
        return view('admin.components.job.edit',compact('job'));
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
        $job = Job::find($id);
        $job->update($input);
        return redirect()->route('jobs.index')->with(['success' => 'Job ' . __("messages.update")]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {
        $job = Job::findOrFail($id);
        $job->delete();
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
                $job = Job::where("id", (int)$input)->first();
                if ($job) {
                    $job->position = $key + 1;
                    $job->save();
                }
            }
        }
        return true;
    }
}
