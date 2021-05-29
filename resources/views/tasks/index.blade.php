@extends('layout')

@section('content')

    <div class="container">
        <h3>My tasks</h3>
        <a href="{{ route('tasks.create') }}" class="btn btn-success">Create</a>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tasks as $task)
                    <tr>
                        <td>{{ $task->id }}</td>
                        <td>{{ $task->title }}</td>
                        <td>
                            <a href="{{ route('tasks.show', $task->id) }}">
                                <span style="margin-right: 10px">Open</span>
                            </a>
                            <a href="{{ route('tasks.edit', $task->id) }}">
                                <span style="margin-right: 10px">Edit</span>
                            </a>

                            <form action="{{ route('tasks.delete', $task->id) }}}" method="post">
                                @csrf
                                <button onClick="return confirm('Are you sure?')">Remove</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
