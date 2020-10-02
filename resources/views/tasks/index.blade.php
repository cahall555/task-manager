@extends ('layout')

@section ('content')

    @foreach ($tasks as $task)

        <h3>{{ $task->title }}</h3>

    @endforeach

@endsection