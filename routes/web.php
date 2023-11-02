<?php

use App\Http\Middleware\AntesDeComprobar;
use App\Http\Middleware\DespuesDeComprobar;
use Illuminate\Support\Facades\Route;

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
})->middleware([AntesDeComprobar::class,DespuesDeComprobar::class]);
