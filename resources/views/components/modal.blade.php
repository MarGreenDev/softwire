<div
    {{ $attributes->merge([
        'class' => 'fixed inset-0 z-50 flex items-center justify-center bg-pink-900/40 backdrop-blur-sm'
    ]) }}>
    <div class="widget max-w-4xl w-full max-h-[90vh] overflow-auto">
        @isset($title)
        <div class="widget-header">
            {{ $title }}

            <button id="closeModal"
                class="cursor-pointer">
                [x]
            </button>
        </div>
        @endisset

        <div class="p-6">
            {{ $slot }}
        </div>
    </div>
</div>