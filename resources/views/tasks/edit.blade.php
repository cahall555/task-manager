@extends('layout')

@section('content')
    <div class="flex flex-col items-center justify-center">
        <h2 class="font-caveatbrush text-6xl text-red mt-16">Edit Task</h2>

        <form class="flex flex-col gap-4 w-4/6 rounded-xl drop-shadow-2xl bg-turquoise text-blue p-8 mt-16" action="{{ url('task/' . $task->id) }}" method="POST">
            @csrf 
            @method('PUT') 

            <div class="flex flex-col sm:flex-row gap-4">
                <label class="font-caveat text-2xl font-semibold" for="title">Title</label>
                <input type="text" name="title" id="title" class="font-caveat text-xl rounded-xl w-3/5 text-violet bg-mint" value="{{ $task->title }}">
	    </div>
	   <div class="flex flex-col sm:flex-row gap-4">
                <label class="font-caveat text-2xl font-semibold" for="priority">Priority</label>
                <input type="integer" name="priority" id="priority" class="font-caveat text-xl rounded-xl w-3/5 text-violet bg-mint" value="{{ $task->priority }}">
            </div>

            <div class="flex flex-col sm:flex-row gap-4">
                <label class="font-caveat text-2xl font-semibold" for="description">Description</label>
                <textarea name="description" id="description" class="font-caveat text-xl rounded-xl w-3/5 text-violet bg-mint">{{ $task->description }}</textarea>
            </div>

            <div class="flex flex-col sm:flex-row gap-4">
                <label class="font-caveat text-2xl font-semibold" for="status">Status</label>
		<select type="text" name="status" id="status" class="font-caveat text-xl rounded-xl w-3/5 text-violet bg-mint">
<option value="Not Started" {{ $task->status == 'Not Started' ? 'selected' : '' }}>Not Started</option>
        <option value="In Progress" {{ $task->status == 'In Progress' ? 'selected' : '' }}>In Progress</option>
	<option value="Completed" {{ $task->status == 'Completed' ? 'selected' : '' }}>Completed</option>
</select>
            </div>
            <div class="flex flex-col sm:flex-row gap-4">
            <div>
                <button class="bg-red text-blue font-caveat font-semibold rounded-full text-2xl px-8 py-4 mt-12" type="submit" class="btn btn-primary">Update Task</button>
	    </div>
	</form>
        <form  class="bg-blue text-red font-caveat font-semibold rounded-full text-2xl px-8 py-4 mt-12" action="/task/{{ $task->id }}" method="POST" onsubmit="return confirm('Are you sure?');">
    	    @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-danger">Delete Task</button>
	</form>
	</div>
    </div>
@endsection

