<div class="flex p-4 {{$loop->last ? '' : 'border-b border-b-gray-300'}} transition duration-500 hover:bg-blue-100 ">
    <div class="mr-2 flex-shrink-0">
        <a href=" {{route('profile', $tweet->user->username)}} "><img class="rounded-full mr-2" width="50px" height="50px" src="{{$tweet->user->avatar}}" alt="Avatar"></a>
    </div>
    <div>
        <h5 class="font-bold mb-4">
            <a href=" {{route('profile', $tweet->user->username)}} ">{{$tweet->user->name}}</a>
        </h5>
        <p class="text-sm">
            {{$tweet->body}}
        </p>
    </div>
 </div>