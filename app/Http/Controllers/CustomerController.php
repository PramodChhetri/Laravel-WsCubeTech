<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function create()
    {
        $url = url('/customers');
        $title = "Add Customer";
        $data = compact('url', 'title');
        return view('addcustomer')->with($data);
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

    public function delete($id)
    {
        $customer = Customer::where('customer_id', '=', $id);
        if ($customer) {
            $customer->delete();
        }
        return redirect()->back();
    }

    public function edit($id)
    {
        $customer = Customer::where('customer_id', '=', $id)->first();
        if (!$customer) {
            return redirect()->back();
        }
        $url = url('/customers/update/') . "/" . $id;
        $title = "Update Customer";
        $data = compact('customer', 'url', 'title');
        return view('addcustomer')->with($data);
    }

    public function update(Request $request, $customer_id)
    {
        // customPrint($request->all());
        // die;
        $customer = Customer::where('customer_id', '=', $customer_id)->first();

        if (!$customer) {
            return redirect()->back();
        }

        $customer->name = $request['name'];
        $customer->email = $request['email'];
        if ($request->filled('password')) {
            $customer->password = md5($request['password']);
        }
        $customer->gender = $request['gender'];
        $customer->dob = $request['dob'];
        $customer->address = $request['address'];
        $customer->state = $request['state'];
        $customer->country = $request['country'];

        $customer->save();

        return redirect()->route('customer.index');
    }

    public function trash()
    {
        $customers = Customer::onlyTrashed()->get();
        return view('customer-trash', compact('customers'));
    }

    public function restore($id)
    {
        $customer = Customer::where('customer_id', '=', $id);
        if ($customer) {
            $customer->restore();
        }
        return redirect()->back();
    }

    public function forceDelete($id)
    {
        $customer = Customer::where('customer_id', '=', $id);
        if ($customer) {
            $customer->forceDelete();
        }
        return redirect()->back();
    }
}
