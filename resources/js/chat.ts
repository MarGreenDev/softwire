interface ChatMessage {
    id: number;
    message: string;
    user: {
        id: number;
        name: string;
    }
    created_at: string;
}

// interface MessageSentEvent {
//     message: ChatMessage;
// }

const messageContainer = document.querySelector<HTMLElement>("#messageContainer");

window.Echo
    .channel('chat')
    .listen('MessageSent', (event: ChatMessage) => {
        console.log('New message:', event.message);
        console.log(event);


        messageContainer?.insertAdjacentHTML(
            'beforeend',
            createMessageHTML(event)
        )
    });

function createMessageHTML(message: ChatMessage): string {
    return `
    <div class="flex gap-2 px-2">
    <strong>${message.user.name}:</strong>
    <p>${message.message}</p>
    </div>
    `;
}