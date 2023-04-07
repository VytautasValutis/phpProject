<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PirmasController extends Controller
{
    public function hello ()
    {
        return '<h1 style="color: skyblue;">LABAS BRIEDIS</h1>';
    }

    public function helloAnimal ($animal)
    {
        return '<h1 style="color: skyblue;">LABAS' . $animal . '</h1>';
    }

    public function sum ($x, $y = 20)
    {
        $xysum = $x + $y;
        return view('sum.suma', [
            'rez' => $xysum 
        ]);
    }
}
