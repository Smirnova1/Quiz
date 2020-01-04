<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $table = 'topics';

    public function category()
    {
        return $this->hasOne('App\Models\Topic');
    }

    public function questions()
    {
        return $this->hasMany('App\Models\Question');
    }
}
