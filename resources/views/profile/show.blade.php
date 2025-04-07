@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-md p-6">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold">My Profile</h2>
            <a href="{{ route('profile.edit') }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Edit Profile
            </a>
        </div>

        <div class="mb-6">
            <div class="flex items-center justify-center mb-4">
                <div class="w-24 h-24 rounded-full bg-blue-500 flex items-center justify-center text-white text-4xl">
                    <i class="fas fa-user"></i>
                </div>
            </div>

            <div class="grid grid-cols-1 gap-4">
                <div class="border-b pb-2">
                    <h3 class="text-sm font-semibold text-gray-500">Name</h3>
                    <p class="text-lg">{{ $user->name }}</p>
                </div>

                <div class="border-b pb-2">
                    <h3 class="text-sm font-semibold text-gray-500">Email</h3>
                    <p class="text-lg">{{ $user->email }}</p>
                </div>

                <div class="border-b pb-2">
                    <h3 class="text-sm font-semibold text-gray-500">Member Since</h3>
                    <p class="text-lg">{{ $user->created_at->format('F j, Y') }}</p>
                </div>

                <div class="border-b pb-2">
                    <h3 class="text-sm font-semibold text-gray-500">Posts Count</h3>
                    <p class="text-lg">{{ $user->posts()->count() }}</p>
                </div>
            </div>
        </div>

        <div class="mt-6 pt-6 border-t">
            <h3 class="text-xl font-semibold mb-4">Change Password</h3>
            <form method="POST" action="{{ route('profile.password') }}">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="current_password" class="block text-gray-700 text-sm font-bold mb-2">Current
                        Password</label>
                    <input type="password" name="current_password" id="current_password"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('current_password') border-red-500 @enderror"
                        required>
                    @error('current_password')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">New Password</label>
                    <input type="password" name="password" id="password"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('password') border-red-500 @enderror"
                        required>
                    @error('password')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password_confirmation" class="block text-gray-700 text-sm font-bold mb-2">Confirm New
                        Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                </div>

                <div class="flex items-center justify-between">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Update Password
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
