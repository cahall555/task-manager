@extends ('layout') 

@section ('content')

  
    <ul>
        @foreach ($tasks as $task)
            <li>
                <h2>
                <a href="/tasks/{{ $task->id }}">{{ $task->title }}</a>
                </h2>
            </li>
        @endforeach
    </ul>
		

@endsection