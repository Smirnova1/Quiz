<?php

namespace App\Helpers;

use App\Models\Question;

class ResultSaveHelper
{
    public static function arrayToString($array)
    {
        if (is_array($array)) {
            $array = implode(',', $array);
        }

        return $array;
    }

    public static function countScore($array)
    {
        $score = 0;
        foreach ($array as $key => $value){
            $question = Question::find($key);
            $value = self::arrayToString($value);
            if ($value == $question->isCorrectAnswer()) {
                $score++;
            }
        }
        return $score;
    }
}
