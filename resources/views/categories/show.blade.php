@extends('layouts.app')
@section('content')
    <div class="px-5">
        <p class="font-weight-bold text-secondary">Select test:</p>
        @foreach($topics as $topic)
            <div>
                <a class="custom-link" href="{{route('topics.show', $topic->id)}}">{{$topic->title}}</a>
            </div>
        @endforeach
    </div>
@endsection