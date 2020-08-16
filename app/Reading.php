<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reading extends Model
{
    public function readingQuestions()
    {
        return $this->hasMany('App\ReadingQuestion');
    }
}
