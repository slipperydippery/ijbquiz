<?php

namespace App;

use App\Answeroption;
use App\Selectedmeasure;
use Illuminate\Database\Eloquent\Model;

class Measure extends Model
{
    protected $guarded = [];

    public function answeroptions()
    {
    	return $this->belongsToMany(Answeroption::class);
    }

    public function selectedmeasures()
    {
    	return $this->hasMany(Selectedmeasure::class);
    }
}
