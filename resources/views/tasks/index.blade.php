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

    @foreach ($tasks as $task)
	@php
	    $color = $colorCombinations[$colorIndex];
	    $colorIndex++;
	    if ($colorIndex >= count($colorCombinations)) {
		$colorIndex = 0;
	    }
	@endphp
<div class="flex flex-col items-center justify-center">
	
<div class="flex flex-col self-center w-96 rounded-xl {{ $color['bg'] }} {{ $color['text'] }} p-8 mt-16">
	<div class="flex flex-col sm:flex-row justify-between">
    		<h3 class="font-caveatbrush text-4xl"><a href="/tasks/{{ $task->id }}">{{ $task->title }}</a></h3>
    		<p class="font-caveatbrush text-2xl">{{ $task->status }}</p>
	</div>
    <p class="font-caveat text-lg">{{ $task->description }}</p>
    <p class="font-caveat text-xl">{{ $task->created_at }}</p>
    <p class="font-caveat text-xl">{{ $task->completed_at }}</p>
</div>


    @endforeach

@endsection
