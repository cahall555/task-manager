<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    $tasks = App\Models\Task::latest();

    if ($tasks->exists()) {
        $tasks = $tasks->get();
    } else {
        $tasks = collect(); 
    }

    return view('welcome', ['tasks' => $tasks]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/', [TasksController::class, 'index']);
Route::get('/tasks', [TasksController::class,'index']);
Route::post('/tasks', [TasksController::class,'store']);
Route::get('/tasks/create', [TasksController::class,'create']);
Route::get('/tasks/{task}', [TasksController::class,'show']);
Route::get('/task/{id}/edit', [TasksController::class, 'edit']);
Route::put('/task/{id}', [TasksController::class, 'update']);
Route::delete('/task/{id}', [TasksController::class, 'destroy']);

