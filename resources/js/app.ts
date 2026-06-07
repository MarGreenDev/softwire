import './popup2';

const aboutmeBtn = document.querySelector<HTMLElement>("#aboutmeBtn");
const aboutMe = document.querySelector<HTMLElement>("#aboutMe");
const aboutmeCancel = document.querySelector<HTMLElement>("#aboutmeCancel");

aboutmeBtn?.addEventListener('click', () => {
    aboutMe?.classList.remove("hidden");
    aboutmeBtn?.classList.add("hidden");
    aboutmeCancel?.classList.remove("hidden");
});

aboutmeCancel?.addEventListener('click', () => {
    aboutMe?.classList.add("hidden");
    aboutmeBtn?.classList.remove("hidden");
    aboutmeCancel?.classList.add("hidden");
});