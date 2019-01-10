<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<h1>Create a Project</h1>

<form method="POST" action="/projects" class="container" style="padding-top: 40px">
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
        </div>
    </div>
</form>
</body>
</html>
