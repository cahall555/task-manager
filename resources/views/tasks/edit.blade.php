@extends('layout')

@section('content')
    <div class="container">
        <h2>Edit Task</h2>

        <form action="{{ url('task/' . $task->id) }}" method="POST">
            @csrf 
            @method('PUT') 

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $task->title }}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control">{{ $task->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <input type="text" name="status" id="status" class="form-control" value="{{ $task->status }}">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update Task</button>
            </div>
	</form>
        <form action="/task/{{ $task->id }}" method="POST" onsubmit="return confirm('Are you sure?');">
    	    @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-danger">Delete Task</button>
        </form>
    </div>
@endsection

