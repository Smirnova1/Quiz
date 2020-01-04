<?php

namespace App\Helpers;

class QuestionHelper
{
    public static function collectionModification($collection, $value)
    {
        $array = [];
        foreach ($collection->toArray() as $item) {
            array_push($array, $item[$value]);
        }
        $array = implode(',', $array);

        return $array;
    }
}