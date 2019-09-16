<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function measures()
    {
    	$questions = Question::get();
    	return view('admin.measures', compact('questions'));
    }
}
