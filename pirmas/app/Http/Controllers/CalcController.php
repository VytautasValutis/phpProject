<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function show()
    {

        return view('calc.form');
    }
}
