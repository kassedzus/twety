@extends('layouts.app')

@section('content')
<div class="container mx-auto flex justify-center">
    <div class="px-12 py-8 bg-gray-200 border border-gray-300 rounded-lg">
        <div class="col-md-8">
            <div class="card-header mb-4 font-bold">{{ __('Login') }}</div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-6">
                            <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">Email</label>
                            <input type="text" name="email" id="email" required autocomplete="email" value="{{ old('email') }}" class="border border-gray-400 p-2 w-full">
                            @error('email')
                                <p class="text-red-500 text-xs mt-2"> {{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">password</label>
                            <input type="password" name="password" id="password" autocomplete="current-password" required class="border border-gray-400 p-2 w-full">
                            @error('password')
                                <p class="text-red-500 text-xs mt-2"> {{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember' ? 'checked' : '') }} class="mr-1">
                            <label for="remember" class="uppercase font-bold text-xs text-gray-700">Remember Me</label>
                            @error('remember')
                                <p class="text-red-500 text-xs mt-2"> {{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-2">Submit</button>
                            <a href="{{ route('password.request') }}" class="text-xs text-gray-700">Forgot Your Password?</a>
                        </div>
                    </form>
        </div>
    </div>
</div>
@endsection
