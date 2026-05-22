@if ($errors->any())

<div id="retro-error-popup" class="retro-popup m-0">

    <div id="retro-popup-header" class="retro-popup-header hidden">
        <span>Error!!</span>
        <button id="retro-popup-close" class="btn-primary">X</button>
    </div>

    <div class="retro-popup-body">
        <p>
            {{ $errors->first() }}
        </p>

        <button id="retro-popup-ok" class="btn-primary">
            ok
        </button>
    </div>
</div>

@endif