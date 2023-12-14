@extends ('layout')

@section ('content')

    <h3>{{ $task->title }}</h3>
    <p>{{ $task->description }}</p>
    <p>{{ $task->status }}</p>
    <p>{{ $task->created_at }}</p>
    <p>{{ $task->completed_at }}</p>

<a href="/task/{{ $task->id }}/edit" class="button is-link">Update</a>
<p></p>
<form action="/task/{{ $task->id }}" method="POST" onsubmit="return confirm('Are you sure?');">
    @csrf
    @method('DELETE')

    <button type="submit" class="button is-link">Delete Task</button>
</form>
@endsection
