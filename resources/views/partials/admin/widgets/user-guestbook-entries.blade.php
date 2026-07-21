<div class="col-span-3">
    <h1>Guestbook entries written by this user</h1>

    @foreach($writtenGuestbook as $writtenEntry)

    <div>
        <p>{{ $writtenEntry->message }}</p>
        <p class="italic text-xs">{{ $writtenEntry->profile_id }}</p>
    </div>
    @endforeach

</div>