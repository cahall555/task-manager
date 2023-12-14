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

	$task->description = request('description');

        $task->save();

        return redirect('/tasks');
    }

    public function update($id)
    {
    	$task = Task::findOrFail($id);

    	$task->title = request('title');
    	$task->description = request('description');
	$task->status = request('status');

    	$task->save();

    	return redirect('/tasks');
    }
    public function edit($id)
    {
    	$task = Task::findOrFail($id);
    	return view('tasks.edit', compact('task'));
    }


    public function destroy($id)
    {
    	$task = Task::findOrFail($id);

    	$task->delete();

    	return redirect('/tasks');
    }

}
