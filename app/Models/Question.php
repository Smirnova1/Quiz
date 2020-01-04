<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Helpers\QuestionHelper;

class Question extends Model
{
    protected $table = 'questions';

    public function topic()
    {
        return $this->hasOne('App\Models\Topic');
    }

    public function answers()
    {
        return $this->hasMany('App\Models\Answer');
    }

    public function isCorrectAnswer()
    {
        $correctCollection = $this->answers()->get()->filter(function ($value, $key){
            return $value->is_correct == true;
        });

        $correctAnswer = QuestionHelper::collectionModification($correctCollection, 'answer');

        return $correctAnswer;
    }
}
