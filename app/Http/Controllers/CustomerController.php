<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('customer');
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

        // Create a new Customer instance
        $customer = new Customer();

        // Insert Query
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->password = md5($request['password']);
        // $customer->password = bcrypt($request['password']);
        $customer->gender = $request['gender'];
        $customer->dob = $request['dob'];
        $customer->address = $request['address'];
        $customer->state = $request['state'];
        $customer->country = $request['country'];

        // Save the customer instance to the database
        $customer->save();

        return redirect('/customers/view');
    }

    public function view()
    {
        $customers = Customer::all();
        $data = compact('customers');
        return view('customer-view')->with($data);
    }
}
