<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReadingQuestion extends Model
{
    public function reading()
    {
        return $this->belongsTo('App\Reading');
    }
}
