@extends ('layout') 

@section ('content')

  
    <ul>
        @foreach ($tasks as $task)
            <li>
		<h2>
			@if($tasks->isEmpty())
    				<p>No tasks found.</p>
			@else
				<a href="/tasks/{{ $task->id }}">{{ $task->title }}</a>
			@endif
                </h2>
            </li>
        @endforeach
    </ul>
		

@endsection
