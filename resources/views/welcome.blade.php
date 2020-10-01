@extends ('layout') 

@section ('content')

  
    <ul>
        @foreach ($tasks as $task)
            <li>
                <h2>{{ $task->title }}</h2>
            </li>
        @endforeach
    </ul>
		

    <h3>something</h3>

@endsection