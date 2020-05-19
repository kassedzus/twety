@extends('layouts.app')

@section('content')
    
    <header class="mb-6 relative">
        <div class="relative">
            <img class="mb-2 rounded-lg" src="/images/profile_bg_image.jpg" alt="Profile background image">

            <img src="{{$user->avatar}}" alt="Users avatar" class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2" style="left:50%" width="150px">
        </div>

        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 style="max-width: 100%" class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <p class="text-m">Known as: {{$user->username}}</p>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div class="flex">

                @if (auth()->user()->is($user))
                    <a href="/profiles/{{$user->username}}/edit" class="rounded-full border border-gray-300 py-2 px-4 text-xs text-black mr-2">Edit Profile</a>
                @endif

                @if (auth()->user()->isNot($user))
                    <form method="POST" action="/profiles/{{ $user->username }}/follow">
                        @csrf
                        <button type="submit" class="bg-blue-400 hover:bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs"> {{ auth()->user()->following($user) ? 'Unfollow Me' : 'Follow Me' }} </button>
                    </form>
                @endif
                
            </div>
        </div>

        <p class="text-sm" style="text-align: center">
            The name's Bugs. Bugs Bunny. Don't wear it out. Bugs is an anthropoorphic gray and white rabbit or hare who is famous for his flippant, insouciant personality. He is also characterized by a Brooklyn accent, his portrayal as a trickster, and his catch phrase "Eh... What's up, doc?"
        </p>


    </header>

    @include('_timeline', [
        'tweets' => $tweets
    ])
@endsection