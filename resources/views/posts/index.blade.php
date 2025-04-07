@extends('layouts.app')

@section('content')
    <div class="bg-white rounded-lg shadow-md p-6">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold">My Posts</h2>
            <a href="{{ route('posts.create') }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Create New Post
            </a>
        </div>

        @if ($posts->isEmpty())
            <p class="text-gray-500 text-center py-4">No posts yet. Create your first post!</p>
        @else
            <div class="grid gap-6">
                @foreach ($posts as $post)
                    <div class="border rounded-lg p-4">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-xl font-semibold mb-2">
                                    <a href="{{ route('posts.show', $post) }}" class="text-blue-600 hover:text-blue-800">
                                        {{ $post->title }}
                                    </a>
                                </h3>
                                <p class="text-gray-600 mb-4">{{ Str::limit($post->content, 200) }}</p>
                                <p class="text-sm text-gray-500">Posted {{ $post->created_at->diffForHumans() }}</p>
                            </div>
                            <div class="flex space-x-2">
                                <a href="{{ route('posts.edit', $post) }}" class="text-blue-500 hover:text-blue-700">
                                    Edit
                                </a>
                                <button type="button" class="text-red-500 hover:text-red-700" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal{{ $post->id }}">
                                    Delete
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Delete Modal for {{ $post->title }} -->
                    <div class="modal fade" id="deleteModal{{ $post->id }}" tabindex="-1"
                        aria-labelledby="deleteModalLabel{{ $post->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel{{ $post->id }}">Confirm Delete</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete the post "{{ $post->title }}"?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <form method="POST" action="{{ route('posts.destroy', $post) }}" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
