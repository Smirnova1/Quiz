@extends('layouts.app')
@section('content')
    <div class="card card-body">
        <p class="font-weight-bold text-secondary">Select test:</p>
        @foreach($topics as $topic)
            <div>
                <a href="{{route('topics.show', $topic->id)}}">{{$topic->title}}</a>
            </div>
        @endforeach
    </div>
@endsection