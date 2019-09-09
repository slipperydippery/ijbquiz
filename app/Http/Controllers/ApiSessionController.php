<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiSessionController extends Controller
{
    public function updatelocation(Request $request)
    {
    	$request->session()->put('location', $request->location);
    	return $request->location;
    }

    public function updatelocationtype(Request $request)
    {
    	$request->session()->put('locationtype', $request->locationtype);
    	return $request->locationtype;
    }

    public function updateemployeecount(Request $request)
    {
    	$request->session()->put('employeecount', $request->employeecount);
    	return $request->employeecount;
    }	

    public function updateemployeeorigin(Request $request)
    {
    	$request->session()->put('employeeorigin', $request->employeeorigin);
    	return $request->employeeorigin;
    }

    public function updateemployeemobility(Request $request)
    {
        $request->session()->put('employeemobility', $request->employeemobility);
        return $request->employeemobility;
    }

    public function updateinhousemobility(Request $request)
    {
        $request->session()->put('inhousemobility', $request->inhousemobility);
        return $request->inhousemobility;
    }
}
