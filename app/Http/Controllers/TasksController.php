<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Task;

class TasksController extends Controller
{
    public function show($id)
    {
        $task = Task::find($id);


        return view('tasks.show', ['task' => $task]);
    }
}