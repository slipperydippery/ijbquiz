<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiSessionController extends Controller
{
    public function updatelocation(Request $request)
    {
    	$request->session()->put('location', 'stuff');
    	return $request->location;
    }
}
