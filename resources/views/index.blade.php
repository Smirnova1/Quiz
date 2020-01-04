@extends('layouts.app')
@section('content')
    <div class="text-center py-5">
        <h1 class="display-4">Welcome to Quizzes</h1>
        <a class="display-6" href="{{route('categories.index')}}">select category</a>
    </div>
@endsection