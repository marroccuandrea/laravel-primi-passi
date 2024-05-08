<?php

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
    $name = 'Benvenuto !';
    return view('index', compact('name'));
})->name('index');
Route::get('/about', function () {
    $name = 'About';
    return view('about', compact('name'));
})->name('about');
