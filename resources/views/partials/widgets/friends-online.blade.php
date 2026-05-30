<div class="widget">
    <div class="widget-header">
        <h2>users online</h2>
    </div>

    <div class="widget-body">

        <ul class="divide-y divide-pink-400">
            @forelse($users as $user)

            <li class="flex items-center p-2 gap-4">
                <a href="{{ route('profile.show', $user) }}">
                    <img src="https://placehold.co/50" alt="">
                </a>
                <span class="hover:underline">
                    <a href="{{ route('profile.show', $user) }}">
                        {{ $user->name }}
                    </a>
                </span>
            </li>

            @empty

            <li class="p-2">
                nobody online ＞﹏＜
            </li>

            @endforelse
        </ul>

    </div>
</div>