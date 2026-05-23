const errorPopup = setupPopup("#retro-error-popup");

const logoutPopup = setupPopup("#retro-logout-popup");

const logoutButton = document.querySelector<HTMLElement>("#logout-button");

logoutButton?.addEventListener("click", () => {
    logoutPopup?.classList.remove("hidden");
});

function setupPopup(popupId: string) {
    const popup = document.querySelector<HTMLElement>(popupId);

    if (!popup) return;

    const header = popup.querySelector<HTMLElement>(".retro-popup-header");

    const closeButton = popup.querySelector<HTMLElement>("#retro-popup-close");

    const okButton = popup.querySelector<HTMLElement>("#retro-popup-ok");

    let isDragging = false;

    let offsetX = 0;
    let offsetY = 0;

    header?.addEventListener("mousedown", (event: MouseEvent) => {
        isDragging = true;

        offsetX = event.clientX - popup.offsetLeft;
        offsetY = event.clientY - popup.offsetTop;
    });

    document.addEventListener("mousemove", (event: MouseEvent) => {
        if (!isDragging) return;

        popup.style.left = `${event.clientX - offsetX}px`;
        popup.style.top = `${event.clientY - offsetY}px`;
    });

    document.addEventListener("mouseup", () => {
        isDragging = false;
    });

    closeButton?.addEventListener("click", () => {
        popup.classList.add("hidden");
    });

    okButton?.addEventListener("click", () => {
        popup.classList.add("hidden");
    });

    return popup;
}
