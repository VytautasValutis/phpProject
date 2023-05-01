<?php

namespace App\Http\Controllers;

use App\Models\Cat;

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
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Cat $cat)
    {
        //
    }

    public function edit(Cat $cat)
    {
        //
    }

    public function update(Request $request, Cat $cat)
    {
        //
    }

    public function destroy(Cat $cat)
    {
        //
    }
}
