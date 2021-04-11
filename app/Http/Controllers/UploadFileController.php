<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadFileController extends Controller
{
    public function index()
    {
    	return view('upload');
    }
    public function show(Request $request)
    {
    	$file = $request->file('book')->store('data');
    	return $file;
    }
}
