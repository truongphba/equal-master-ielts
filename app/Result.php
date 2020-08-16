<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    public function examiner()
    {
        return $this->belongsTo('App\User','examiner_id');
    }
    public function lecture()
    {
        return $this->belongsTo('App\User','lecture_id');
    }
}
