<div id="retro-logout-popup" class="retro-popup m-0 hidden">

    <div id="retro-popup-header" class="retro-popup-header ">
        <span>Are you leaving me??</span>
        <button id="retro-popup-close" class="btn-primary">X</button>
    </div>

    <div class="retro-popup-body">
        <p class="p-3">
            Are u sure u want to log out??
        </p>

        <div class="flex justify-center gap-2">

            <form action="/logout" method="post">
                <button type="submit" class="btn-primary logout-btn">
                    yes
                </button>
            </form>

            <button id="retro-popup-ok" class="btn-primary">
                Actually, nvm
            </button>
        </div>
    </div>
</div>