<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PirmasController;
use App\Http\Controllers\CalcController as C;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello world';
});

Route::get('/labas', fn() => '<h1 style="color: crimson;">LABAS</h1>');
Route::get('/labas/briedis', [PirmasController::class, 'hello']);

Route::get('/labas/{animal}', [PirmasController::class, 'helloAnimal']);

Route::get('calc', [C::class, 'show'])->name('show');
Route::post('calc', [C::class, 'doCalc'])->name('do-calc');
