<?php

namespace App;

use App\Answeroption;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $guarded = [];

    public function answeroption()
    {
    	return $this->belongsTo(Answeroption::class);
	}
}
