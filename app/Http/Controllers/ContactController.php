<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact-page');
    }

    public function submit(Request $request)
    {
        customPrint($request->all());
    }
}
