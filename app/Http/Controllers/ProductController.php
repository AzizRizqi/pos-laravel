<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::with('category')->orderBy('id', 'desc')->get();
        // dd($product);
        return view('product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();
        return view('product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Product::create([
            'category_id'      => $request->category_id,
            'product_name'       => $request->product_name,
            'product_price' => $request->product_price,
            'product_qty'   => $request->product_qty,
            'description'   => $request->description,
        ]);
        return redirect()->to('product')->with('success', 'Product created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = Category::get();
        $edit = Product::find($id);
        return view('product.edit', compact('categories', 'edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        product::where('id', $id)->update([
            'category_id'      => $request->category_id,
            'product_name'       => $request->product_name,
            'product_price' => $request->product_price,
            'product_qty'   => $request->product_qty,
            'description'   => $request->description,
        ]);
        return redirect()->to('product')->with('message', 'Data Berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::where('id', $id)->delete();
        return redirect()->to('product')->with('message', 'Data Berhasil di Hapus');
    }
}
