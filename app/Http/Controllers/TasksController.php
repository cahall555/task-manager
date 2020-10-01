<?php

namespace App\Http\Controllers;

use DB;
use App\Task;

class TasksController extends Controllers
{
    public function show($title)
    {
        $task = Task::where('title', $title)->firstOrFail();


        return view('task', [
            'task' => $task
        ]);
    }
}