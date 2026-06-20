@if ($paginator->hasPages())
    <div class="flex justify-center gap-3 p-3">

        @if ($paginator->onFirstPage())
            <span class="btn-primary opacity-50">
                Previous
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}"
               class="btn-primary">
                Previous
            </a>
        @endif

        <span>
            @foreach ($elements as $element)
            
              @foreach ($element as $number => $page)

                <a href="{{ $page }}">[{{ $number }}]</a> 

              @endforeach
            
            @endforeach
        </span>

        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}"
               class="btn-primary">
                Next
            </a>
        @else
            <span class="btn-primary opacity-50">
                Next
            </span>
        @endif

    </div>
@endif