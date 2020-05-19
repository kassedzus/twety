@extends('layouts.app')

@section('content')
<div class="container mx-auto flex justify-center">
    <div class="px-12 py-8 bg-gray-200 border border-gray-300 rounded-lg">
        <div class="col-md-8">
                <div class="card-header font-bold mb-6">{{ __('Register') }}</div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-2">
                            <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">username</label>
                            <input type="text" name="username" id="username" required class="border border-gray-400 px-2 w-full">
                            @error('username')
                                <p class="text-red-500 text-xs mt-2"> {{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-2">
                            <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">name</label>
                            <input type="text" name="name" id="name" required class="border border-gray-400 px-2 w-full">
                            @error('name')
                                <p class="text-red-500 text-xs mt-2"> {{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-2">
                            <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">email</label>
                            <input type="email" name="email" id="email" required class="border border-gray-400 px-2 w-full">
                            @error('email')
                                <p class="text-red-500 text-xs mt-2"> {{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-2">
                            <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">password</label>
                            <input type="password" name="password" id="password" required class="border border-gray-400 px-2 w-full">
                            @error('password')
                                <p class="text-red-500 text-xs mt-2"> {{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-2">
                            <label for="password-confirm" class="block mb-2 uppercase font-bold text-xs text-gray-700">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="border border-gray-400 px-2 w-full" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="mt-6">
                                <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-2">Register</button>
                        </div>
                    </form>
        </div>
    </div>
</div>
@endsection
