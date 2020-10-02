<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Task;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::latest()->get();

        return view('tasks.index', ['tasks' => $tasks ]);
    }
    
    public function show($id)
    {
        $task = Task::find($id);


        return view('tasks.show', ['task' => $task]);
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store()
    {
        $task = new Task();

        $task->title = request('title');

        $task->save();

        return redirect('/tasks');
    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}