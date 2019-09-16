<?php

namespace App;

use App\Answeroption;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function answeroptions()
    {
    	return $this->hasMany(Answeroption::class);
    }
}
