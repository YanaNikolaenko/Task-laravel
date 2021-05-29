@extends('layout')

@section('content')



    <div class="container">
        <h3>Create tasks</h3>
@include('tasks.errors')

        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('tasks.store') }}" method="post">
                    @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="title" value=" {{ old('title') }}">
                    <br>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control">{{ old ('description') }}</textarea>
                    <br>
                    <button class="btn btn-success">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>

@endsection
