@if ($paginator->hasPages())
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            @if ($paginator->onFirstPage())
                <div class="pagination-area">
                    <a class="prev page-numbers">
                        <i class="ri-arrow-right-s-line"></i>
                    </a>
                </div>
            @else
                <div class="pagination-area">
                    <a href="{{ $paginator->previousPageUrl() }}" class="prev page-numbers">
                        <i class="ri-arrow-right-s-line"></i>
                    </a>
                </div>
            @endif

            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="page-item disabled">{{ $element }}</li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                             <div class="pagination-area">
                            	<span class="page-numbers current" aria-current="page">{{ $page }}</span>
                             </div>
                        @else
                            <div class="pagination-area">
                            	<a href="{{ $url }}" class="page-numbers">{{ $page }}</a>
                            </div>
                        @endif
                    @endforeach
                @endif
            @endforeach

            @if ($paginator->hasMorePages())
                <div class="pagination-area">
                    <a href="{{ $paginator->nextPageUrl() }}" class="next page-numbers">
                        <i class="ri-arrow-left-s-line"></i>
                    </a>
                </div>
            @else
                <div class="pagination-area">
                    <a class="next page-numbers">
                        <i class="ri-arrow-left-s-line"></i>
                    </a>
                </div>
            @endif
        </ul>
    </nav>
@endif
