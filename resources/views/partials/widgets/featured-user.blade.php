<div class="widget">

    <div class="widget-header">
        <h2>Featured user ♡</h2>
    </div>
    <div class="flex gap-4 items-center p-4">
 @empty($featuredUser->profile_picture)
            <img src="{{ asset('images/default-pfp.jpg') }}" alt="placeholder-pfp"
                class="w-20 h-20 border-2 border-pink-300">
                @else
        <img src="{{ Storage::url($featuredUser->profile_picture) }}" alt="placeholder-pfp"
            class="w-20 h-20 border-2 border-pink-300">
            @endempty
        <p> {{ $featuredUser->name }} </p>
    </div>
    <div class="p-4">
        <p class="text-pink-700">
            the creator of this website ₊˚⊹♡
        </p>
        <a href="{{ route('profile.show', $featuredUser) }}">View their profile! -></a>
    </div>
</div>