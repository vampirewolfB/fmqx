<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Forum') }}
        </h2>
    </x-slot>

    <div class="py-12 container">
        <form method="post" action="{{route('forum.store')}}">
            @csrf
            <div class="form-group">
                <label for="subject">Subject: </label>
                <input type="text" name="subject" class="form-control" id="subject">
            </div>
            <div class="form-group">
                <label for="content">Content: </label>
                <input type="text" name="content" class="form-control" id="content">
            </div>
            <div class="form-group">
                <input class="mt-4 btn btn-primary" type="submit" value="Opslaan">
            </div>
        </form>
    </div>
</x-app-layout>
