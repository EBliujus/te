<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use Illuminate\Http\Request;
use App\Services\Messages;


class CatController extends Controller
{

    public function index()
    {
        $cats = Cat::all();

        return view('back.cats.index', [
            'cats' => $cats
        ]);
    }


    public function create()
    {
        return view('back.cats.create', [

        ]);
    }


    public function store(Request $request)
    {
        Cat::create([
            'country' => $request->country,
            'season' => $request->season,
        ]);
        return redirect()
        ->route('cats-index');
        
    }

    public function edit(Cat $cat)
    {
        return view('back.cats.edit', [
            'cat' => $cat
        ]);
    }


    public function update(Request $request, Cat $cat)
    {
        $cat->update([
            'country' => $request->country,
            'season' => $request->season,
        ]);
        return redirect()->route('cats-index');
    }


    public function destroy(Cat $cat)
    {
        if($cat->product->count()) {
            return 'Cannot be deleted';

        }

        $cat->delete();
        return redirect()->route('cats-index');
    }
}
