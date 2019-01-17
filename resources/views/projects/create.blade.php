@extends('layouts.app')

@section('content')

<form method="POST" action="/projects">
    @csrf

    <h1 class="heading is-1">Create a Project</h1>

    <div class="field">
        <label for="title" class="label">Title</label>

        <div class="control">
            <input type="text" class="input" name="title" placeholder="title">
        </div>
    </div>

    <div class="field">
        <label for="description" class="label">Description</label>

        <div class="control">
            <textarea type="text" class="input" name="description" placeholder="description"></textarea>
        </div>
    </div>

    <div class="field">
        <div class="control">
            <button class="button is-link">Create Project</button>
            <a href="/projects">Cancel</a>
        </div>
    </div>
</form>
@endsection
