
@if ($paginator->hasPages())

<nav class="collection-paginate clearfix relative nav_pagi w_100">
    <ul class="pagination clearfix">
        @if (!$paginator->onFirstPage())
            <li class="page-item"><a class="page-link link-next-pre" href="{{ $paginator->previousPageUrl() }}">«</a></li>
        @endif

{{--        <li class="page-item disabled"><a class="page-link" href="#">&laquo;</a></li>--}}

            @foreach ($elements as $element)
                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active page-item disabled"><a class="page-link" href="javascript:;"
                                                                     style="pointer-events:none">{{ $page }}</a></li>
                        @else

                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            @if ($paginator->hasMorePages())
                <li class="page-item"><a class="page-link link-next-pre"
                                         href="{{ $paginator->nextPageUrl() }}" >&raquo;</a></li>

            @endif



    </ul>
</nav>
@endif

