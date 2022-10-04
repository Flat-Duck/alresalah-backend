@if ($paginator->hasPages())
    <nav aria-label="Page navigation">
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())        
                <li class=" page-item disabled"><a class="page-link border-primary bg-primary text-white" href="#">&lsaquo;</a></li>
            @else
            <li class=" page-item" ><a href="{{ $paginator->previousPageUrl() }}" class="page-link border-primary bg-primary text-white" rel="prev">&lsaquo;</a></li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                <li class=" page-item disabled"><a href="#" class="page-link border-primary bg-primary text-white">{{ $element }}</a></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active"><span class="page-link border-primary bg-primary text-white">{{ $page }}</span></li>
                        @else
                        <li class=" page-item"><a href="{{ $url }}" class="page-link border-primary bg-primary text-white">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
            <li class=" page-item"><a href="{{ $paginator->nextPageUrl() }}" class="page-link border-primary bg-primary text-white" rel="next">&rsaquo;</a></li>
            @else
            <li class=" page-item disabled"><a href="#" class="page-link border-primary bg-primary text-white">&rsaquo;</a></li>
            @endif
        </ul>
    </nav>
@endif
