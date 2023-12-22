<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SingleActionController;
use App\Models\Customer;
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

// Customer table details
Route::get('/customertable', function () {
    $customers = Customer::all();
    echo "<pre>";
    print_r($customers->toArray());
});

// For Single Action Controller
Route::get('/service', SingleActionController::class)->name('service');

// For Resource Controller
Route::resource('/photos', PhotoController::class);

Route::get('/register', [RegistrationController::class, 'index'])->name('register.index');
Route::post('/register', [RegistrationController::class, 'store'],)->name('register.store');
Route::get('/customers/add', [CustomerController::class, 'create'])->name('customer.create');
Route::post('/customers', [CustomerController::class, 'store'])->name('customer.store');
Route::get('/customers', [CustomerController::class, 'index'])->name('customer.index');
Route::get('/customers/delete/{id}', [CustomerController::class, 'delete'])->name('customer.delete');


Route::get('/', [DemoController::class, 'index'])->name('home');
Route::get('/about', [DemoController::class, 'about'])->name('about');

Route::get('/contact/{name?}', function ($name = null) {
    $demo = "<h1>WsCube Turtorial</h1>";
    $data =  compact('name', 'demo');
    return view('contact')->with($data);
});
