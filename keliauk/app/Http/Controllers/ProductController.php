<?php

namespace App\Http\Controllers;

use App\Models\Product;
// use App\Models\Cat;
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
        return view('back.products.create', [

        ]);
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Product $product)
    {
        return view('back.products.show', [
            
        ]);
    }


    public function edit(Product $product)
    {
        //
    }


    public function update(Request $request, Product $product)
    {
        //
    }


    public function destroy(Product $product)
    {
        //
    }
}
