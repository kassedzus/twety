@extends('layouts.app')

@section('content')
    
    <div>
        @foreach ($users as $user)
            <a href="/profiles/{{$user->username}}" class="flex items cneter mb-5">
                <img src="{{ $user->avatar }}" alt="{{$user->username}}'s avatar" width="60" class="mr-4 rounded">
                    <div>
                        <h4 class="font-bold"> {{ '@' . $user->name}} </h4>
                        <p class="text-sm"> {{'@' . $user->username}}</p>
                        <p class="text-xs">Joined {{ $user->created_at->diffForHumans() }}</p>
                    </div>
            </a>
        @endforeach

        {{$users->links()}}
    </div>

@endsection