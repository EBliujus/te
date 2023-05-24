<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cat;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();

        return view('back.products.index', [
            'products' => $products
        ]);
    }


    public function create()
    {
        $cats = Cat::all();
        return view('back.products.create', [
            'cats' => $cats,
        ]);
    }


    public function store(Request $request)
    {
        $product = new Product;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->days = $request->days;
        $product->cat_id = $request->cat_id;
        $product->save();

        return redirect()->route('products-index');
    }


    public function show(Product $product)
    {
        return view('back.products.show', [
            
        ]);
    }


    public function edit(Product $product)
    {
        $cats = Cat::all();

        return view('back.products.edit', [
            'product' => $product,
            'cats' => $cats
        ]);
    }


    public function update(Request $request, Product $product)
    {
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->days = $request->days;
        $product->cat_id = $request->cat_id;
        $product->save();

        return redirect()->route('products-index');
    }


    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products-index');
    }
}
