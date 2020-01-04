<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreResult;
use App\Models\Result;
use App\Models\UserAnswer;
use Illuminate\Http\Request;
use App\Models\Question;
use Exception;
use App\Helpers\ResultSaveHelper;

class ResultController extends Controller
{
    public function store(StoreResult $request, Result $result)
    {
        try {
            $questions = $request->input('question');
            $score = ResultSaveHelper::countScore($questions);

            $result->user_name = $request->user_name;
            $result->correct_answers = $score;
            $result->count_questions = count($request->input('question_id'));
            $result->save();

            foreach ($questions as $key => $value) {
                $question = Question::find($key);
                $value = ResultSaveHelper::arrayToString($value);
                $userAnswers = new UserAnswer();
                $userAnswers->result_id = $result->id;
                $userAnswers->question = $question->question;
                $userAnswers->user_answer = $value;
                $userAnswers->correct_answer = $question->isCorrectAnswer();
                $userAnswers->save();
            }

            return redirect(route('results.show', $result->id));
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function show($id)
    {
        $result = Result::find($id);

        return view('results.show', compact('result'));
    }
}
