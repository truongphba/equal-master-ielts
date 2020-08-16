<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WritingAnswer extends Model
{
    public function writing()
    {
        return $this->belongsTo('App\Writing');
    }
}
