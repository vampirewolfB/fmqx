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
            </thead>
            <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->subject }}</td>
                        <td>{{ $post->content }}</td>
                        <table class="table">
                            <thead>
                                <td>Comment</td>
                                <td>User</td>
                            </thead>
                            <tbody>
                                @foreach($comments as $comment)
                                    @if($comment->post_id == $post->id)
                                        <tr>
                                            <td>{{ $comment->content }}</td>
                                            <td>{{ $comment->user->name }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
