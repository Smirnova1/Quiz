@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-center position-relative">
        <i class="fa fa-paperclip fa-5x paperclip" aria-hidden="true"></i>
        <div class="card mt-5 sticker" style="width: 30rem; height: 30rem;">
            <div class="card-body text-center sticker-content">
                <h5 class=" index-text">Welcome to Quizzes</h5>
                <a class="select-category custom-link" href="{{route('categories.index')}}">select category</a>
            </div>
        </div>
    </div>
@endsection