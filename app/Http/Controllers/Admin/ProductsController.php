<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ProductsDataTable;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(ProductsDataTable $productsDataTable)
    {
        return $productsDataTable->render('admin.components.products.datatable');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $product = new Product();
        return view('admin.components.products.create', compact('product'));
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
            'desc' => 'nullable|string',
            'image' => 'required|image',
            'file' => 'required|file|mimes:pdf',
        ]);

        // save image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('heto/products'), $imageName);
        }

        // save file
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('heto/products'), $fileName);
        }

        Product::create([
            'name' => $request->name,
            'desc' => $request->desc,
            'image' => $imageName,
            'file' => $fileName,
        ]);

        return redirect()->route('products.index')->with(['success' => 'Product ' . __("messages.add")]);

    }



    public function edit(Product $product)
    {
        return view('admin.components.products.edit', compact('product'));
    }


    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'desc' => 'nullable|string',
            'image' => 'nullable|image',
            'file' => 'nullable|file|mimes:pdf',
        ]);

        // save image
        if ($request->hasFile('image')) {
            // remove old image
            if (file_exists(public_path('heto/products/' . $product->image))) {
                unlink(public_path('heto/products/' . $product->image));
            }

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('heto/products'), $imageName);
        }

        // save file
        if ($request->hasFile('file')) {
            // remove old file
            if (file_exists(public_path('heto/products/' . $product->file))) {
                unlink(public_path('heto/products/' . $product->file));
            }

            $file = $request->file('file');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('heto/products'), $fileName);
        }

        $product->update([
            'name' => $request->name,
            'desc' => $request->desc,
            'image' => $imageName ?? $product->image,
            'file' => $fileName ?? $product->file,
        ]);

        return redirect()->route('products.index')->with(['success' => 'product ' . __("messages.update")]);
    }


    public function destroy(Product $product)
    {
        // remove old image
        if (file_exists(public_path('heto/products/' . $product->image))) {
            unlink(public_path('heto/products/' . $product->image));
        }

        // remove old file
        if (file_exists(public_path('heto/products/' . $product->file))) {
            unlink(public_path('heto/products/' . $product->file));
        }

        $product->delete();
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
                $product = Product::where("id", (int)$input)->first();
                if ($product) {
                    $product->position = $key + 1;
                    $product->save();
                }
            }
        }
        return true;
    }
}
