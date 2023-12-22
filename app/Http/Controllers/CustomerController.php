<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function create()
    {
        return view('addcustomer');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'gender' => 'required|in:M,F,O',
            'dob' => 'required|date',
            'address' => 'required',
            'state' => 'required',
            'country' => 'required',
        ]);

        $customer = new Customer();

        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->password = md5($request['password']);
        $customer->gender = $request['gender'];
        $customer->dob = $request['dob'];
        $customer->address = $request['address'];
        $customer->state = $request['state'];
        $customer->country = $request['country'];

        $customer->save();

        return redirect()->route('customer.index');
    }

    public function index()
    {
        $customers = Customer::all();
        return view('customer', compact('customers'));
    }
}
