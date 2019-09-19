<?php

namespace App;

use App\Answer;
use App\Measure;
use App\Question;
use App\Answeroption;
use App\Selectedmeasure;
use Illuminate\Database\Eloquent\Model;

class Answeroption extends Model
{
    public function measures()
    {
    	return $this->belongsToMany(Measure::class);
    }

    public function question()
    {
    	return $this->belongsTo(Question::class);
    }

    public function answers()
    {
    	return $this->hasMany(Answer::class);
    }

    public function selectedmeasures()
    {
        return $this->belongsToMany(Selectedmeasure::class);
    }
}
