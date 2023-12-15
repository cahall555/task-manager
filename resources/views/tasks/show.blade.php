@extends ('layout')

@section ('content')
<div class="flex flex-col items-center justify-center">
	
<div class="flex flex-col self-center w-4/6 rounded-xl bg-turquoise text-blue p-8 mt-16">
	<div class="flex flex-col sm:flex-row justify-between">
    		<h3 class="font-caveatbrush text-4xl">{{ $task->title }}</h3>
    		<p class="font-caveatbrush text-2xl">{{ $task->status }}</p>
	</div>
    <p class="font-caveat text-xl"><strong>Priority:</strong> {{ $task->priority }}</p>
    <p class="font-caveat text-xl"><strong>Description:</strong> {{ $task->description }}</p>
    <p class="font-caveat text-xl"><strong>Created at:</strong> {{ $task->created_at }}</p>
    <p class="font-caveat text-xl"><strong>Task Completed:</strong> {{ $task->completed_at }}</p>
</div>
<div class="flex flex-col sm:flex-row sm:justify-items-start gap-4 mt-16">
<a href="/task/{{ $task->id }}/edit" class="bg-red text-violet font-caveat text-2xl font-semibold py-4 px-8 rounded-full">Update</a>
<p></p>
<form action="/task/{{ $task->id }}" method="POST" onsubmit="return confirm('Are you sure?');">
    @csrf
    @method('DELETE')

    <button type="submit" class="bg-blue text-red font-caveat text-2xl font-semibold py-4 px-8 rounded-full">Delete Task</button>
</form>
</div>
</div>
@endsection
