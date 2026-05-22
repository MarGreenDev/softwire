const popup = document.querySelector<HTMLElement>("#retro-error-popup");
const header = document.querySelector<HTMLElement>("#retro-popup-header");
const closeButton = document.querySelector<HTMLElement>("#retro-popup-close");
const okButton = document.querySelector<HTMLElement>("#retro-popup-ok");

console.log(popup);
console.log(header);

let isDragging = false;

let offsetX = 0;
let offsetY = 0;

header?.addEventListener("mousedown", (event: MouseEvent) => {
    if (!popup) return;
    isDragging = true;

    offsetX = event.clientX - popup.offsetLeft;
    offsetY = event.clientY - popup.offsetTop;
});

document.addEventListener("mousemove", (event: MouseEvent) => {
    if (!isDragging || !popup) return;

    popup.style.left = `${event.clientX - offsetX}px`;
    popup.style.top = `${event.clientY - offsetY}px`;
});

document.addEventListener("mouseup", () => {
    isDragging = false;
});

if (popup) {
    popup.classList.remove("hidden");
}

closeButton?.addEventListener("click", () => {
    popup?.classList.add("hidden");
});

okButton?.addEventListener("click", () => {
    popup?.classList.add("hidden");
});
