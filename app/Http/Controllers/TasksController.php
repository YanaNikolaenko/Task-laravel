<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Http\Requests\createTaskRequest;
use App\Http\Requests\updateTaskRequest;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', ['tasks' => $tasks]);
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(createTaskRequest $request)
    {
        Task::create($request->all());
        return redirect()->route('tasks.index');
    }

    public function edit($id)
    {
        $task = Task::find($id);

        return view('tasks.edit', ['task' => $task]);
    }

    public function update(updateTaskRequest $request, $id)
    {
        $task = Task::find($id);

        $task->fill($request->all());
        $task->save();

        return redirect()->route('tasks.index');
    }

    public function show($id)
    {
        $task = Task::find($id);

        return view('tasks.show', ['task' => $task]);
    }

    public function delete($id)
    {
        Task::find($id)->delete();

        return redirect()->route('tasks.index');
    }
}
