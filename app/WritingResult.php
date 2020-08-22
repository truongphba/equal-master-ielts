<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WritingResult extends Model
{
    public function writingAnswer()
    {
        return $this->belongsTo('App\WritingAnswer');
    }
    public function student()
    {
        return $this->belongsTo('App\User','student_id');
    }
    public function lecture()
    {
        return $this->belongsTo('App\User','lecture_id');
    }
}
