<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function start()
    {
        return view('quiz.start');
    }

    public function employeecount()
    {
    	return view('quiz.employeecount');
    }

    public function location()
    {
    	return (view('quiz.location'));
    }

    public function locationtype()
    {
        return view('quiz.locationtype');
    }

    public function employeeorigin()
    {
        return view('quiz.employeeorigin');
    }

    public function employeemobility()
    {
        return view('quiz.employeemobility');
    }

    public function inhousemobility()
    {
        return view('quiz.inhousemobility');
    }

    public function electricmobility()
    {
        return view('quiz.electricmobility');
    }

    public function contactpermission()
    {
        return view('quiz.contactpermission');
    }

    public function results()
    {
        return view('quiz.results');
    }
}
