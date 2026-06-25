<div class="widget">
    <div class="widget-header">
        <h2>Users</h2>
    </div>

    <div class="p-4 flex flex-col gap-4">
        <span>
            Total users: {{ $users->count() }}
        </span>

        <span>
            Newest user: {{ $newestUser }}
        </span>

        <button class="btn-primary">User overview</button>
    </div>

</div>