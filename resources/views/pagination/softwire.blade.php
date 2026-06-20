@if ($paginator->hasPages())
<div class="flex justify-center gap-3 p-3">

    @if ($paginator->onFirstPage())
    <span class="btn-primary opacity-50">
        <
    </span>
    @else
    <a href="{{ $paginator->previousPageUrl() }}"
        class="btn-primary">
        <
    </a>
    @endif

    <span>
        @foreach ($elements as $element)

        @foreach ($element as $number => $page)

        @if ($number==$paginator->currentPage())

        <a href="{{ $page }}"
            class="underline font-bold">[{{ $number }}]</a>

        @else
        <a href="{{ $page }}">[{{ $number }}]</a>
        @endif

        @endforeach

        @endforeach
    </span>

    @if ($paginator->hasMorePages())
    <a href="{{ $paginator->nextPageUrl() }}"
        class="btn-primary">
        >
    </a>
    @else
    <span class="btn-primary opacity-50">
        >
    </span>
    @endif

</div>
@endif