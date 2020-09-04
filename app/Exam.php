<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class exam extends Model
{
    public function student()
    {
        return $this->belongsTo('App\User','student_id','id');
    }
    public function lecture()
    {
        return $this->belongsTo('App\User','lecture_id','id');
    }
}
