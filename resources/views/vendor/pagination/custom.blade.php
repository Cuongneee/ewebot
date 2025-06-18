@if ($paginator->hasPages())
    <ul class="pagerblock">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            {{-- Không có nút prev nếu đang ở trang đầu --}}
        @else
            <li>
                <a href="{{ $paginator->previousPageUrl() }}">
                    <i class="fa fa-angle-left"></i>
                </a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- Dấu ... --}}
            @if (is_string($element))
                <li><span class="disabled">{{ $element }}</span></li>
            @endif

            {{-- Các trang --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li><a href="{{ $url }}" class="current">{{ $page }}</a></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="next_page">
                <a href="{{ $paginator->nextPageUrl() }}">
                    <i class="fa fa-angle-right"></i>
                </a>
            </li>
        @endif
    </ul>
@endif
