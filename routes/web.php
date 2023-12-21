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

Route::get('/contact/{name?}', function ($name = null) {
    $demo = "<h1>WsCube Turtorial</h1>";
    $data =  compact('name', 'demo');
    return view('contact')->with($data);
});

Route::get('/', function () {
    return view('home');
});

Route::get('/service', function () {
    return view('service');
});


Route::get('/about', function () {
    return view('about');
});
