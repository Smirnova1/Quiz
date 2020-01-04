@extends('layouts.app')
@section('content')
    <div class="card card-body">
        <p class="font-weight-bold text-secondary">{{$topic->title}}</p>
        <form method="POST" action="{{route('results.store')}}" accept-charset="UTF-8"
              class="form-horizontal" enctype="multipart/form-data">
            {{ csrf_field() }}

            @include('topics.form')

        </form>

    </div>

@endsection