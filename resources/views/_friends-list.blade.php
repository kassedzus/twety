<h3 class="font-bold text-lg mb-4">Friends</h3>

<ul>
    @forelse (auth()->user()->follows as $user)
       <li class="{{ $loop->last ? '' : 'mb-4' }}">
            <div>
                <a class="flex items-center text-sm" href=" {{route('profile', $user)}} ">
                    <img class="rounded-full mr-2" height="40px" width="40px" src="{{$user->avatar}}" alt="Avatar">
                    <p class="transition duration-600 hover:font-bold">{{$user->name}}</p>
                </a>
            </div>
        </li> 
    @empty
        <p>No friends yet</p>
    @endforelse
    
</ul>