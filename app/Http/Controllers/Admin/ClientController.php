<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ClientsDataTable;
use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(ClientsDataTable $dataTable)
    {
        return $dataTable->render('admin.components.clients.datatable');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $client = new Client();
        return view('admin.components.clients.create', compact('client'));
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
            'name' => 'required|string|max:255',
            'image' => 'required|image',
        ]);

        // save image
        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('heto/clients'), $imageName);

        Client::create([
            'name' => $request->name,
            'seo_title' => $request->seo_title,
            'seo_description' => $request->seo_description,
            'seo_keywords' => $request->seo_keywords,
            'image' => $imageName,
        ]);

        return redirect()->route('clients.index')->with(['success' => 'client ' . __("messages.add")]);

    }



    public function edit(Client $client)
    {
        return view('admin.components.clients.edit', compact('client'));
    }


    public function update(Request $request, Client $client)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'image',
        ]);

        // save image
        if ($request->hasFile('image')) {
            // remove old image
            if (file_exists(public_path('heto/clients/' . $client->image))) {
                unlink(public_path('heto/clients/' . $client->image));
            }

            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('heto/clients'), $imageName);
            $client->image = $imageName;
        }

        $client->name = $request->name;
        $client->seo_title = $request->seo_title;
        $client->seo_description = $request->seo_description;
        $client->seo_keywords = $request->seo_keywords;
        $client->save();

        return redirect()->route('clients.index')->with(['success' => 'client ' . __("messages.update")]);
    }


    public function destroy(Client $client)
    {
        // remove old image
        if (file_exists(public_path('heto/clients/' . $client->image))) {
            unlink(public_path('heto/clients/' . $client->image));
        }

        $client->delete();
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
                $client = Client::where("id", (int)$input)->first();
                if ($client) {
                    $client->position = $key + 1;
                    $client->save();
                }
            }
        }
        return true;
    }
}
