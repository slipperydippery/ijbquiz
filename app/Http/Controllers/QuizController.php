<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Measure;
use App\Question;
use App\Loggedsession;
use App\Selectedmeasure;
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
        // Save the answers from the sessin data to a Loggedsession model, with token as ID to later filter out duplication
        $loggedsession = Loggedsession::create([
            'token' => session()->get('_token'),
        ]);

        // Create Loggedsession->selectedmeasures for each Measure (this will track how often each measure is selected, and which answeroptions are responsible)
        foreach (Measure::get() as $measure) {
            $selectedmeasures = Selectedmeasure::create([
                'loggedsession_id' => $loggedsession->id,
                'measure_id' => $measure->id,
                'selectcount' => 0
            ]);
        };

        // Add a Loggedsession->answer model for each Question->answeroption
        // Loggedsession->answer->selected will return if the Question->answeroption was selected
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
                // if selected, give each $answeroption->measure in selectedmeasures seclectcount++;
                // if selected, give related Selectedmeasure a selectcount ++, and attach relationship between selectedmeasure and answeroption
                if ($selected) {
                    foreach ($answeroption->measures as $measure) {
                        foreach ($measure->selectedmeasures->where('loggedsession_id', $loggedsession->id) as $selectedmeasure) {
                            $selectedmeasure->selectcount++;
                            $selectedmeasure->save();
                            $selectedmeasure->answeroptions()->attach($answeroption);
                        }
                    }

                    // foreach ($answeroption->measures as $measure) {
                    //     foreach ($selectedmeasures as $selectedmeasure) {
                    //         if ($measure->id == $selectedmeasure->id) {
                    //             $selectedmeasure->selectcount++;
                    //         }
                    //     }
                    // }
                }
            }
        }

        // $
        $questions = Question::with('answeroptions.measures')->get();
        $selectedmeasures = $loggedsession->selectedmeasures->sortByDesc('selectcount');
        $loggedsession = Loggedsession::with('answers.answeroption.question')->find($loggedsession->id);
        return view('quiz.results', compact('questions', 'loggedsession', 'selectedmeasures'));
    }


}
