<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SingleActionController;
use App\Models\Customer;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;

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

// Implementing  laravelcollective/html for contact form. You can also use spatie/laravel-html.
Route::get('contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');


// Handlinh session
Route::get('get-all-session', function () {
    $session = session()->all();
    customPrint($session);
});
Route::get('set-session', function (Request $request) {
    $request->session()->put('user_name', 'WsCube Tech');
    $request->session()->put('user_id', 2);
    $request->session()->flash('session', "success");
    return redirect('get-all-session');
});
Route::get('destroy-session', function () {
    session()->forget('user_name');
    session()->forget('user_id');
    return redirect('get-all-session');
});


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
Route::get('/customers/edit/{id}', [CustomerController::class, 'edit'])->name('customer.edit');
Route::post('/customers/update/{customer_id}', [CustomerController::class, 'update'])->name('customer.update');
Route::get('/customers/trash', [CustomerController::class, 'trash'])->name('customer.trash');
Route::get('/customers/restore/{id}', [CustomerController::class, 'restore'])->name('customer.restore');
Route::get('/customers/forcedelete/{id}', [CustomerController::class, 'forceDelete'])->name('customer.forcedelete');





Route::get('/', [DemoController::class, 'index'])->name('home');
Route::get('/about', [DemoController::class, 'about'])->name('about');

Route::get('/contact/{name?}', function ($name = null) {
    $demo = "<h1>WsCube Turtorial</h1>";
    $data =  compact('name', 'demo');
    return view('contact')->with($data);
});
