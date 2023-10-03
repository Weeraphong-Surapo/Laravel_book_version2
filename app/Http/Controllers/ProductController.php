<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();

        return view('Form.allProduct', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorys = Category::all();
        return view('Form.addProduct',compact('categorys'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $prodcut = new Product;
        $prodcut->name = $request->input('name');
        $prodcut->price = $request->input('price');
        $prodcut->stock = $request->input('stock');
        $prodcut->category_id = $request->input('category');
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('/books'), $fileName);
            $filePath = 'books/' . $fileName;
        }
        $prodcut->img = $filePath;
        $prodcut->save();
        return redirect('admin/product');
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
        $product = Product::find($id);
        $categorys = Category::all();
        return view('Form.editProduct', compact('product','categorys'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $prodcut = Product::find($id);
        $prodcut->name = $request->input('name');
        $prodcut->price = $request->input('price');
        $prodcut->stock = $request->input('stock');
        $prodcut->category_id = $request->input('category');
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('/books'), $fileName);
            $filePath = 'books/' . $fileName;
            $prodcut->img = $filePath;
        }
 
        $prodcut->save();
        return redirect('admin/product');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
