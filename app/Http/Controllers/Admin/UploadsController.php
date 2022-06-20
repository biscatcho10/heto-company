<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Upload;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UploadsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $uploads = Upload::all();
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
        $image = $request->file('file');
        $fileInfo = $image->getClientOriginalName();
        $newFileName = pathinfo($fileInfo, PATHINFO_FILENAME) . '-' . time() . '.' . pathinfo($fileInfo, PATHINFO_EXTENSION);
        $photo = [
            'user_id' => 1,
            'file_original_name' => pathinfo($fileInfo, PATHINFO_FILENAME),
            'extension' => pathinfo($fileInfo, PATHINFO_EXTENSION),
            'file_size' => round($image->getSize() / 1024 / 1024, 1),
            'file_name' => $newFileName,
            'type' => $image->getClientMimeType(),
        ];
        if (str_contains($image->getMimeType(), 'image')) {
            $image->move(public_path('gallery'), $newFileName);
        }
        else {
            $image->move(public_path('files'), $newFileName);
        }
        return Upload::create($photo);
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
     * @return Response
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
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }


    public function fetch(Request $request)
    {
        if($request->ajax())
        {
            return Upload::simplePaginate(5);
        }
    }

}
