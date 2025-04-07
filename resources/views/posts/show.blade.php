@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-md p-6">
        <div class="flex justify-between items-start mb-6">
            <h2 class="text-2xl font-bold">{{ $post->title }}</h2>
            <div class="flex space-x-2">
                <a href="{{ route('posts.edit', $post) }}" class="text-blue-500 hover:text-blue-700">
                    Edit
                </a>
                <button type="button" class="text-red-500 hover:text-red-700" data-bs-toggle="modal"
                    data-bs-target="#deleteModal">
                    Delete
                </button>
            </div>
        </div>

        <div class="prose max-w-none">
            <p class="text-gray-600 whitespace-pre-wrap">{{ $post->content }}</p>
        </div>

        <div class="mt-6 pt-6 border-t">
            <p class="text-sm text-gray-500">
                Posted {{ $post->created_at->format('F j, Y, g:i a') }}
                @if ($post->updated_at != $post->created_at)
                    (Last updated {{ $post->updated_at->format('F j, Y, g:i a') }})
                @endif
            </p>
            <a href="{{ route('posts.index') }}" class="inline-block mt-4 text-blue-500 hover:text-blue-700">
                ← Back to Posts
            </a>
        </div>
    </div>

    <!-- Delete Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
@endsection
