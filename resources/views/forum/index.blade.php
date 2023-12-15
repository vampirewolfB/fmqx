<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Forum') }}
        </h2>
    </x-slot>

    <div class="py-12 container">
        <a href="{{ route('forum.create') }}" class="mt-4 btn btn-primary">Maak forum aan</a>
        <table class="table">
            <thead>
                <td>Subject</td>
                <td>Content</td>
                <td></td>
                <td></td>
            </thead>
            <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->subject }}</td>
                        <td>{{ $post->content }}</td>
                        <td><a href="{{ route('forum.show', $post->id) }}" class="">Toon post</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
