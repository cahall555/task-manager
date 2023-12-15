@extends ('layout') 

@section ('content')
@php
        $colorCombinations = [
            ['bg' => 'bg-turquoise', 'text' => 'blue'],
            ['bg' => 'bg-red', 'text' => 'text-violet'],
            ['bg' => 'bg-blue', 'text' => 'text-red'],
        ];
        $colorIndex = 0;
    @endphp


  
    <ul>
        @foreach ($tasks as $task)
            <li>
		<h2>
			@if($tasks->isEmpty())
				<div class="flex flex-col items-center justify-center">
				<h3 class="font-caveatbrush text-4xl text-violet">No tasks found.</h3>
				</div>
			@else
	@php
	    $color = $colorCombinations[$colorIndex];
	    $colorIndex++;
	    if ($colorIndex >= count($colorCombinations)) {
		$colorIndex = 0;
	    }
	@endphp
<div class="flex flex-col items-center justify-center">
	
<div class="flex flex-col w-4/6 rounded-xl drop-shadow-2xl {{ $color['bg'] }} {{ $color['text'] }} p-8 mt-16">
	<div class="flex flex-col sm:flex-row justify-between">
    		<h3 class="font-caveatbrush text-4xl"><a href="/tasks/{{ $task->id }}">{{ $task->title }}</a></h3>
    		<p class="font-caveatbrush text-2xl">{{ $task->status }}</p>
	</div>
    <p class="font-caveat text-xl"><strong>Priority:</strong> {{ $task->priority }}</p>
    <p class="font-caveat text-xl"><strong>Description:</strong> {{ $task->description }}</p>
    <p class="font-caveat text-xl"><strong>Created at:</strong> {{ $task->created_at }}</p>
    <p class="font-caveat text-xl"><strong>Task Completed:</strong> {{ $task->completed_at }}</p>
</div>

			@endif
                </h2>
            </li>
        @endforeach
    </ul>
		

@endsection
