<?php

namespace App\Http\Controllers;

use App\Models\Town;
use Illuminate\Http\Request;

class TownController extends Controller
{
    public function index()
    {
        $towns = Town::all();
        return view('towns.index', [
            'towns' => $towns
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

    public function show(Town $town)
    {
        //
    }

    public function edit(Town $town)
    {
        //
    }

    public function update(Request $request, Town $town)
    {
        //
    }

    public function destroy(Town $town)
    {
        //
    }
}
