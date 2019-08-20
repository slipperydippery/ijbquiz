<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function start()
    {
    	return view('quiz.start');
    }

    public function storequizmensen(Request $request)
    {
    	$request->session()->put('quizmensen', $request->quizmensen);
    	return redirect()->route('quizlocatie.show');
    }

    public function quizlocatie()
    {
    	return (view('quiz.locatie'));
    }
}
