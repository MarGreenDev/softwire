interface ChatMessage {
    id: number;
    message: string;
    user: {
        id: number;
        name: string;
    }
    created_at: string;
}

const messageContainer = document.querySelector<HTMLElement>("#messageContainer");

window.Echo
    .channel('chat')
    .listen('MessageSent', (event: ChatMessage) => {
        console.log('New message:', event.message);
        console.log(event);


        messageContainer?.insertAdjacentHTML(
            'beforeend',
            createMessageHTML(event)
        );

        messageContainer?.scrollTo({
            top: messageContainer.scrollHeight,
            behavior: 'smooth'
        });
        // TODO: add ux feature so that it doesn't force a scroll down when users are reading older messages
    });

function createMessageHTML(message: ChatMessage): string {
    return `
    <div class="flex gap-2 px-2">
    <strong>${message.user.name}:</strong>
    <p>${message.message}</p>
    </div>
    `;
}

const form = document.querySelector<HTMLFormElement>('#chatForm');
const input = document.querySelector<HTMLInputElement>('#chatmessage');

form?.addEventListener('submit', async (event) => {
    event.preventDefault();

    if (!input) return;

    const response = await fetch(form.action, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document
                .querySelector<HTMLMetaElement>('meta[name="csrf-token"]')!
                .content,
        },
        body: JSON.stringify({
            message: input.value,
        }),
    });

    if (response.status === 429) {
        alert('Stop spamming pls!!! you can message again soon');
        return;
    }

    input.value = '';
});