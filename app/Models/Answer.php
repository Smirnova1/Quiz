<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table = 'answers';

    public function question()
    {
        return $this->hasOne('App\Models\Question', 'id', 'question_id');
    }
}
