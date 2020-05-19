<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8 hover:border-blue-600">
    <form method="POST" action="/tweets">
        @csrf

        <textarea name="body" class="w-full p-2 outline-none" placeholder="What's up doc?" required></textarea>

        <hr class="my-4">

        <footer class="flex justify-between items-center">
            <img class="rounded-full mr-2" height="50px" width="50px" src="{{ auth()->user()->avatar}}" alt="Avatar">
            <button type="submit" class="bg-blue-400 hover:bg-blue-500 rounded-full shadow px-10 text-white text-sm h-10 ">Publish</button>
        </footer>

    </form>

    @error('body')
        <p class="text-red-500 text-sm mt-2">{{$message}}</p>
    @enderror
 </div>