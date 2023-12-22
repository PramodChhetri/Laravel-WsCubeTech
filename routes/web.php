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

Route::get('/register', [RegistrationController::class, 'index'])->name('viewRegistrationPage');
Route::post('/register', [RegistrationController::class, 'register'],)->name('register');
Route::get('/customer', [CustomerController::class, 'index'])->name('viewCustomerPage');
Route::post('/customer', [CustomerController::class, 'store'],)->name('customerInsert');
Route::get('/customer/view', [CustomerController::class, 'view'])->name('viewCustomerDetails');

Route::get('/', [DemoController::class, 'index'])->name('home');
Route::get('/about', [DemoController::class, 'about'])->name('about');

Route::get('/contact/{name?}', function ($name = null) {
    $demo = "<h1>WsCube Turtorial</h1>";
    $data =  compact('name', 'demo');
    return view('contact')->with($data);
});
