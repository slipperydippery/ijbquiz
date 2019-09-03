<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function start()
    {
    	return view('quiz.start');
    }

    public function storepeople(Request $request)
    {
    	$request->session()->put('people', $request->people);
    	return redirect()->route('location.show');
    }

    public function location()
    {
    	return (view('quiz.location'));
    }

    public function storelocation(Request $request)
    {
        $request->session()->put('location', $request->location);
        return redirect()->route('locationtype.show');
    }

    public function locationtype()
    {
        return view('quiz.locationtype');
    }

    public function storelocationtype(Request $request)
    {
        $request->session()->put('locationtype', $request->locationtype);
        return redirect()->route('employeeorigion.show');
    }

    public function employeeorigion()
    {
        return view('quiz.employeeorigion');
    }

    public function storeemployeeorigion(Request $request)
    {
        $request->session()->put('employeeorigion', $request->employeeorigion);
        return redirect()->route('employeemobility.show');
    }

    public function employeemobility()
    {
        return view('quiz.employeemobility');
    }

    public function storeemployeemobility(Request $request)
    {
        $request->session()->put('employeemobility', $request->employeemobility);
        return redirect()->route('inhousemobility.show');
    }

    public function inhousemobility()
    {
        return view('quiz.inhousemobility');
    }

    public function storeinhousemobility(Request $request)
    {
        $request->session()->put('inhousemobility', $request->inhousemobility);
        return redirect()->route('rushhour.show');
    }

    public function rushhour()
    {
        return view('quiz.rushhour');
    }

    public function storerushhour(Request $request)
    {
        $request->session()->put('rushhour', $request->rushhour);
        return redirect()->route('contactpermission.show');
    }

    public function contactpermission()
    {
        return view('quiz.contactpermission');
    }

    public function storecontactpermission(Request $request)
    {
        $request->session()->put('contactpermission', $request->contactpermission);
        return redirect()->route('results.show');
    }

    public function results()
    {
        return view('quiz.results');
    }
}
