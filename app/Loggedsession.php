<?php

namespace App;

use App\Answer;
use Illuminate\Database\Eloquent\Model;

class Loggedsession extends Model
{
    protected $guarded = [];

    public function answers()
    {
    	return $this->hasMany(Answer::class);
    }
}
