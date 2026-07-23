<div class="widget">
    <div class="widget-header">
        Birthday!!
    </div>

    <div class="widget-body">

        @empty($user->dob)
        @if(Auth::id() === $user->id)
        <div id="birthdayEmpty" class="flex flex-col p-4 gap-2">
            <span class="text-pink-500">You haven't set your birthday yet</span>

            <button id="addBirthday" class="btn-primary">Add birthday</button>

            <span class="italic text-xs">You don't have to add your birthday, this widget won't show up if you haven't added it</span>
        </div>
        @endif
        @else
        <div class="flex flex-col items-center">
            <p>🍰 {{ $user->dob->format('jS F Y') }}</p>

            <p>I will add starsign later</p>

        </div>
        @endempty

        <div id="birthdayForm" class="p-3 hidden">
            <form action="{{ route('profile.birthday.update') }}" class="flex flex-col items-center" method="post">
                @csrf
                @method('PUT')


                <div class="form-element flex-col">
                    <label for="dob" class="text-pink-500">Enter your birthday:</label>
                    <input type="date" name="dob" id="dob">
                </div>

                <div>
                    <button type="submit" class="btn-primary">Save</button>
                    <button type="button" id="birthdayCancel" class="btn-primary">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>