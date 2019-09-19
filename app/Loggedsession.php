<?php

namespace App;

use App\Answer;
use App\Selectedmeasure;
use Illuminate\Database\Eloquent\Model;

class Loggedsession extends Model
{
    protected $guarded = [];

    public function answers()
    {
    	return $this->hasMany(Answer::class);
    }

    public function selectedmeasures()
    {
    	return $this->hasMany(Selectedmeasure::class);
    }
}
