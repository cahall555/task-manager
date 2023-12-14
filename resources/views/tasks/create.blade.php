@extends('layout')

@section('content')

<div id="wrapper">
    <div id="page" class="container">
        <h1> New Task </h1>

        <form method="POST" action="/tasks">
            @csrf
            
            <div class="field">
                <label class="label" for="title">Title</label>

                <div class="control">
                    <input class="input" type="text" name="title" id="title">
                </div>
            </div>
            <div class="field">
                <label class="label" for="description">Description</label>

                <div class="control">
                    <input class="input" type="text" name="description" id="description">
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
