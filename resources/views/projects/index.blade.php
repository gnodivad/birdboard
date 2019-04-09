@extends ('layouts.app')

@section('content')
    <header class="flex items-center mb-3 pb-4">
        <div class="flex justify-between items-end w-full">
            <h2 class="text-muted text-base font-light">My Projects</h2>

            <a href="/projects/create" class="button">New Project</a>
        </div>
    </header>

    <main class="lg:flex lg:flex-wrap -mx-3">
        @forelse ($projects as $project)
            <div class="lg:w-1/3 px-3 pb-6">
                @include ('projects.card')
            </div>
        @empty
            <div>No projects yet.</div>
        @endforelse
    </main>

    <modal name="hello-world" classes="p-10 bg-card rounded-lg" height="auto">
        <h1 class="font-normal mb-16 text-center text-2xl">Let's Start Something New</h1>

        <div class="flex">
            <div class="flex-1 mr-4">
                <div class="mb-4">
                    <label for="title" class="text-sm block mb-2">Title</label>
                    <input type="text" id="title" class="border border-muted-light p-2 text-xs block w-full rounded">
                </div>

                <div class="mb-4">
                    <label for="description" class="text-sm block mb-2">Description</label>
                    <textarea id="description" class="border border-muted-light p-2 text-xs block w-full rounded" rows=7></textarea>
                </div>
            </div>

            <div class="flex-1 ml-4">
                <div class="mb-4">
                    <label class="text-sm block mb-2">Need Some Tasks?</label>
                    <input type="text" class="border border-muted-light p-2 text-xs block w-full rounded" placeholder="Task 1">
                </div>

                <button class="inline-flex items-center text-xs">
                    <span>Add New Task Field</span>
                </button>
            </div>
        </div>

        <footer class="flex justify-end">
            <button class="button is-outlined mr-4">Cancel</button>
            <button class="button">Create Project</button>
        </footer>
    </modal>

    <a href="" @click.prevent="$modal.show('hello-world')">Show Modal</a>
@endsection
