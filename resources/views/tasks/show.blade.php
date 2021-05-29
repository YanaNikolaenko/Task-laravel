@extends('layout')

@section('content')



    <div class="container">
        <h3>Show task № - {{ $task->id }}</h3>
        @include('tasks.errors')

        <div class="row">
            <div class="col-md-12">
                <br><br>
                <h6>Title --- {{ $task->title }}</h6>
                <h6>Description --- {{ $task->description }}</h6>
            </div>
        </div>
    </div>

@endsection
