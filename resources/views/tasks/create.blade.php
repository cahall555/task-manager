@extends('layout')

@section('content')

<div id="wrapper">
    <div id="page" class="flex flex-col items-center justify-center">
        <h1 class="font-caveatbrush text-6xl text-red mt-16"> Create a New Task </h1>

        <form class="flex flex-col gap-4 w-4/6 rounded-xl drop-shadow-2xl bg-turquoise text-blue p-8 mt-16" method="POST" action="/tasks">
            @csrf
            
            <div>
                <label class="font-caveat text-2xl font-semibold" for="title">Title</label>

                <div>
                    <input class="font-caveat text-xl rounded-xl w-3/5 text-violet bg-mint" type="text" name="title" id="title">
                </div>
            </div>
            <div>
                <label class="font-caveat text-2xl font-semibold" for="description">Description</label>

                <div>
                    <input class="font-caveat text-xl rounded-xl w-3/5 text-violet bg-mint" type="text" name="description" id="description">
                </div>
            </div>

            <div>
                <div>
                    <button class="bg-blue text-red font-caveat font-semibold rounded-full text-2xl px-8 py-4 mt-12" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
