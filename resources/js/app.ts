import DataTable from 'datatables.net-dt';
import 'datatables.net-dt/css/dataTables.dataTables.css';
import './popup2';

// About me edit logic thing
const aboutmeBtn = document.querySelector<HTMLElement>("#aboutmeBtn");
const aboutMe = document.querySelector<HTMLElement>("#aboutMe");
const aboutmeCancel = document.querySelector<HTMLElement>("#aboutmeCancel");
const aboutMeContent = document.querySelector<HTMLElement>('#aboutMeContent');

aboutmeBtn?.addEventListener('click', () => {
    aboutMe?.classList.remove("hidden");
    aboutmeBtn?.classList.add("hidden");
    aboutmeCancel?.classList.remove("hidden");
    aboutMeContent?.classList.add("hidden");
});

aboutmeCancel?.addEventListener('click', () => {
    aboutMe?.classList.add("hidden");
    aboutmeBtn?.classList.remove("hidden");
    aboutmeCancel?.classList.add("hidden");
    aboutMeContent?.classList.remove("hidden");
});

// The profile datails edit section
const summaryBtn= document.querySelector<HTMLElement>("#summaryBtn");
const summaryCancel = document.querySelector<HTMLElement>("#summaryCancel");
const profileSummaryEdit = document.querySelector<HTMLElement>("#profileSummaryEdit");
const profileSummary = document.querySelector<HTMLElement>("#profileSummary");

summaryBtn?.addEventListener('click', () => {
    summaryBtn?.classList.add("hidden");
    summaryCancel?.classList.remove("hidden");
    profileSummaryEdit?.classList.remove("hidden");
    profileSummary?.classList.add("hidden");

});

summaryCancel?.addEventListener('click', () => {
    summaryBtn?.classList.remove("hidden");
    summaryCancel?.classList.add("hidden");
    profileSummaryEdit?.classList.add("hidden");
    profileSummary?.classList.remove("hidden");
});

//profile picture change

const changePfp = document.querySelector<HTMLElement>("#changePfp");
const changePfpBtn = document.querySelector<HTMLElement>("#changePfpBtn");
const cancelChangePfp = document.querySelector<HTMLElement>("#cancelChangePfp");

changePfpBtn?.addEventListener('click', () => {
    changePfpBtn?.classList.add("hidden");
    cancelChangePfp?.classList.remove("hidden");
    changePfp?.classList.remove("hidden");
});

cancelChangePfp?.addEventListener('click', () => {
    changePfpBtn?.classList.remove("hidden");
    cancelChangePfp?.classList.add("hidden");
    changePfp?.classList.add("hidden");
})

// modal

const userModal = document.querySelector<HTMLElement>("#user-modal");
const openModal = document.querySelector<HTMLElement>("#openModal");
const closeModal = document.querySelector<HTMLElement>("#closeModal");

closeModal?.addEventListener('click', () => {
    userModal?.classList.add("hidden");
    guestbookEntriesModal?.classList.add("hidden");
});

openModal?.addEventListener('click', () => {
    userModal?.classList.remove("hidden");
});

userModal?.addEventListener('click', (e) => {
    if (e.target === userModal) {
        userModal?.classList.add("hidden");
    }
});

const guestbookEntriesModal = document.querySelector<HTMLElement>("#guestbookEntriesWritten");
const openGuestbookModal = document.querySelector<HTMLElement>("#openGuestbookModal");

openGuestbookModal?.addEventListener('click', () => {
    guestbookEntriesModal?.classList.remove("hidden");
});

guestbookEntriesModal?.addEventListener('click', (e) => {
    if (e.target === guestbookEntriesModal) {
        guestbookEntriesModal?.classList.add("hidden");
    }
});



// Datatable


let usersTable = new DataTable('#usersTable');
let guestbookEntriesTable = new DataTable('#guestbookEntriesTable', {
    pageLength: 5
});
