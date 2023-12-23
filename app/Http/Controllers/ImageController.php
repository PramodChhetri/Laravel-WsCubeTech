<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function showForm()
    {
        return view('upload');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $filename = time() . ".ws." . $request->file('image')->getClientOriginalExtension();

        $request->file('image')->storeAs('public/uploads', $filename);
        echo $filename;
    }
}
