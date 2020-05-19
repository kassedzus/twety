@extends('layouts.app')

@section('content')
    <form action="/profiles/{{$user->username}}" method="POST" enctype="multipart/form-data">
        @method('PATCH')
        @csrf

        <div class="mb-6">
            <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Name
            </label>
            <input type="text" name="name" id="name" value="{{$user->name}}" class="border border-gray-400 p-2 w-full" required>

            @error('name')
            <p class="text-red-500 text-xs mt-2"> {{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Username
            </label>
            <input type="text" name="username" id="username" value="{{$user->username}}" class="border border-gray-400 p-2 w-full" required>

            @error('username')
            <p class="text-red-500 text-xs mt-2"> {{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">      

                <label for="avatar" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Avatar
                </label>

            <div class="flex">

                <input type="file" name="avatar" id="avatar" class="border border-gray-400 p-2 w-full">

                <img src="{{$user->avatar}}" alt="your avatar" width="40px">

            </div>
    
                @error('username')
                <p class="text-red-500 text-xs mt-2"> {{ $message }}</p>
                @enderror

        </div>
        
        <div class="mb-6">
            <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Email
            </label>
            <input type="email" name="email" id="email" value="{{$user->email}}" class="border border-gray-400 p-2 w-full" required>

            @error('email')
            <p class="text-red-500 text-xs mt-2"> {{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Password
            </label>
            <input type="password" name="password" id="password" class="border border-gray-400 p-2 w-full" required>

            @error('password')
            <p class="text-red-500 text-xs mt-2"> {{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password_confirmation" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Password confirmation
            </label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="border border-gray-400 p-2 w-full" required>

            @error('password_confirmation')
            <p class="text-red-500 text-xs mt-2"> {{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-4">Submit</button>
            <a href="/profiles/{{ $user->username }}" class="hover:underline">Cancel</a>
        </div>

    </form>
@endsection