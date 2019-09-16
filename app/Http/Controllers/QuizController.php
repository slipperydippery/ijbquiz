<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Question;
use App\Loggedsession;
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
        // return session()->all();
        $loggedsession = Loggedsession::create([
            'token' => session()->get('_token'),
        ]);
        foreach (Question::get() as $question) {
            foreach ($question->answeroptions as $answeroption) {
                $qslug = $question->slug;
                $aoslug = $answeroption->slug;
                if(is_array(session()->get($qslug))){
                    $selected = in_array($aoslug, session()->get($qslug)) ? 1 : 0;
                } else {
                    $selected = (session()->get($qslug) == $aoslug) ? 1 : 0;
                }
                $answer = Answer::create([
                    'answeroption_id' => $answeroption->id,
                    'loggedsession_id' => $loggedsession->id,
                    'selected' => $selected
                ]);
            }
        }

        $questions = Question::with('answeroptions.measures')->get();
        $loggedsession = Loggedsession::with('answers.answeroption.question')->find($loggedsession->id);
        return view('quiz.results', compact('questions', 'loggedsession'));
    }
}
