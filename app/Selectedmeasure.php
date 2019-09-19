<?php

namespace App;

use App\Measure;
use App\Loggedsession;
use Illuminate\Database\Eloquent\Model;

class Selectedmeasure extends Model
{
    protected $guarded = [];

    public function loggedsession()
    {
    	return $this->belongsTo(Loggedsession::class);
    }

    public function measure()
    {
    	return $this->belongsTo(Measure::class);
    }

    public function answeroptions()
    {
    	return $this->belongsToMany(Answeroption::class);
    }
}
