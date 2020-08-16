<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listening extends Model
{
    public function listeningQuestions()
    {
        return $this->hasMany('App\ListeningQuestion');
    }
}
