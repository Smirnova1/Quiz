<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAnswer extends Model
{
    protected $table = 'user_answers';

    public function result()
    {
        return $this->belongsTo('App\Models\Result');
    }
}
