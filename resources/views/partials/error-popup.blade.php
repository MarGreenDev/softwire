@if ($errors->any())

<div id="retro-error-popup" class="retro-popup m-0">

    <div id="retro-popup-header" class="retro-popup-header hidden">
        <span>Error!!</span>
        <button id="retro-popup-close" class="btn-primary">X</button>
    </div>

    <div class="retro-popup-body">

        <ul class="space-y-2 divide-y divide-pink-300">
            @foreach ($errors->all() as $error)

            <li> ✕ {{ $error }}</li>

            @endforeach
        </ul>

        <button id="retro-popup-ok" class="btn-primary">
            ok
        </button>
    </div>
</div>

@endif