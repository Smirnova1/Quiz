@extends('layouts.app')
@section('content')
    <div class="card card-body">
        <p class="font-weight-bold text-secondary">Click on a category to select a topic</p>
        @foreach($categories as $category)
            <div>
                <a href="{{route('categories.show', $category->id)}}">{{$category->category}}</a>
            </div>
        @endforeach
    </div>
@endsection
