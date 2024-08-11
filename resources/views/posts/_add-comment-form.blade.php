@auth
<x-panel class="bg-gray-50">
    <form action="/posts/{{$post->slug}}/comments" method="post">
        @csrf
        <header class="flex items-center">
            <!-- <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" width="40" height="40"  class="rounded-full" alt=""> -->
            <img src="{{auth()->user()->profile->profileImage()}}" width="40" height="40" class="rounded-full" alt="">
            <h2 class="ml-4"> want to participate?</h2>
        </header>
        <div class="mt-6">
            <textarea name="body"
                id=""
                rows="5"
                class="w-full text-sm focus:outline-none focus:ring"
                placeholder="Quick, think of something to say !"
                required></textarea>
            @error('body')
            <span class="text-xs text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex justify-end mt-6 pt-6 border-t border-gray-200">
            <x-form.button>Post</x-form.button>
        </div>
    </form>
</x-panel>
@else
<p class="font-semibold">

    <a href="/register" class="hover:underline"> </a>
    <a href="/login" class="hover:underline"> </a>
</p>
@endauth