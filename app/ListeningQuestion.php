<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListeningQuestion extends Model
{
    public function listening()
    {
        return $this->belongsTo('App\Listening');
    }
}
