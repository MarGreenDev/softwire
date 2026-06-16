<section class="widget col-span-1 md:col-span-12">
    <div class="widget-header">
        <h2>Guestbook</h2>
    </div>
    @auth
    <form action="">
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
                class="text-area-primary">Test</textarea>
        </div>
        <div class="flex justify-center pb-3">
            <button type="submit"
                class="btn-primary">
                Place message
            </button>
        </div>
    </form>
    @endauth
</section>