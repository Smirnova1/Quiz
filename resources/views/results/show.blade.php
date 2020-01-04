@extends('layouts.app')
@section('content')
    <div class="px-5">
        <table class="table table-borderless">
            <thead>
            <tr>
                <th scope="col" class="font-weight-bold text-secondary">{{$result->user_name}} , your results are:</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">Date:</th>
                <td> {{$result->created_at}}</td>
            </tr>
            <tr>
                <th scope="row">The number of questions in the test:</th>
                <td>{{$result->count_questions }}</td>
            </tr>
            <tr>
                <th scope="row">The correct answers are:</th>
                <td>{{$result->correct_answers}}/{{$result->count_questions }}</td>
            </tr>
            </tbody>
        </table>
        <table class="table table-borderless">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Question</th>
                <th scope="col">Your answer</th>
                <th scope="col">Correct answer</th>
            </tr>
            </thead>
            <tbody>
            @foreach($result->userAnswers()->get() as $item)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$item->question}}</td>
                    <td>{{$item->user_answer }}</td>
                    <td>{{$item->correct_answer }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection