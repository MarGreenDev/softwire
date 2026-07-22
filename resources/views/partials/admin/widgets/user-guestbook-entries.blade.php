<div class="col-span-3">
    <button class="btn-primary"
        id="openGuestbookModal">
        View guestbook entries written by this user
    </button>
</div>
<x-modal id="guestbookEntriesWritten" class="hidden">
    <x-slot:title>
        Guestbook entries written by {{ $user->name }}
        </x-slot>

        <table class="w-full border-collapse" id="guestbookEntriesTable">
            <thead class="bg-pink-300 font-bold">

                <tr>
                    <th class="p-2 text-left">Recepient ID</th>
                    <th class="p-2 text-left">Message</th>
                    <th class="p-2 text-left">Posted on</th>
                    <th class="p-2 text-left">Actions</th>
                </tr>

            </thead>

            @foreach($writtenGuestbook as $writtenEntry)

            <tr class="hover:bg-pink-200">
                <td>{{ $writtenEntry->profile_id }}</td>
                <td>{{ $writtenEntry->message }}</td>
                <td>{{ $writtenEntry->created_at }}</td>
                <td></td>
            </tr>

            @endforeach
        </table>
</x-modal>