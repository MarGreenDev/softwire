<section class="widget col-span-1 md:col-span-12">
    <div class="widget-header">
        <h2>Guestbook</h2>
    </div>
    @auth
    <form action="{{ route('guestbook.store', $user) }}" method="post">
        @csrf
        <div class="flex p-3 gap-3">
            @empty(Auth::user()->profile_picture)
            <img src="{{ asset('images/default-pfp.jpg') }}" alt="profile picture"
                class="w-20 aspect-square">
            @else
            <img src="{{ Storage::url(Auth::user()->profile_picture) }}" alt="profile picture"
                class="w-20 aspect-square">
            @endempty
            <textarea name="message" id="message" placeholder="write a message in the guestbook"
                class="text-area-primary"></textarea>
        </div>
        <div class="flex justify-center pb-3">
            <button type="submit"
                class="btn-primary">
                Place message
            </button>
        </div>
    </form>
    @endauth

    <!-- GUESTBOOK ENTRIES -->

    <div class="divide-y divide-pink-300">
        @foreach ($guestbookEntries as $entry)
        <div class="p-4">
            <div class="flex gap-3">
                @empty($entry->author->profile_picture)
                <a href="{{ route('profile.show', $entry->author) }}"><img src="{{ asset('images/default-pfp.jpg') }}" alt="profile picture"
                        class="size-15 aspect-square"></a>
                @else
                <a href="{{ route('profile.show', $entry->author) }}"><img src="{{ Storage::url($entry->author->profile_picture) }}" alt="profile picture"
                        class="size-15 aspect-square"></a>
                @endempty
                <div class="flex-1 divide-y text-pink-600">
                    <div class="flex justify-between">
                        <a href="{{ route('profile.show', $entry->author) }}"><span class="font-semibold">{{ $entry->author->name }}</span></a>
                        <p class="italic text-xs text-pink-400">{{ $entry->created_at->format('d M Y H:i') }}</p>
                    </div>
                    <p>{{ $entry->message }}</p>
                </div>
            </div>
        </div>
        @endforeach

        <div class="p-3">
            {{ $guestbookEntries->links('pagination.softwire') }}
        </div>
    </div>
</section>