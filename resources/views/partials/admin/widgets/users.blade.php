<div class="bg-pink-50">
    <div class="bg-pink-400 text-white font-semibold px-4">
        <h2>Users</h2>
    </div>

    <div class="p-4 flex flex-col gap-4">
        <span>
            Total users: {{ $users->count() }}
        </span>

        <span>
            Newest user: {{ $newestUser }}
        </span>

        <table>
            <tr>
                <th>User ID</th>
                <th>User Name</th>
            </tr>

            @foreach ($users as $user)

            <tr>
                <td>
                    {{ $user->id }}
                </td>
                <td>
                    {{ $user->name }}
                </td>
            </tr>

            @endforeach
        </table>
    </div>

</div>