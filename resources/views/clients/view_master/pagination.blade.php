{{-- <ul class="content__product-pages">
    <li class="content__product-pages__btn"><span class="content__product-pages__number">1</span></li>
    <li class="content__product-pages__btn"><span class="content__product-pages__number">2</span></li>
    <li class="content__product-pages__btn"><span class="content__product-pages__number">3</span></li>
    <li class="content__product-pages__btn"><span class="content__product-pages__number">4</span></li>
    <li class="content__product-pages__btn"><span class="content__product-pages__number">5</span></li>
</ul> --}}


@if ($paginator->hasPages())
    <nav>
        <ul class="content__product-pages">

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="content__product-pages__btn content__product-pages__btn--active " aria-current="page"><span>{{ $page }}</span></li>
                        @else
                            <li  class="content__product-pages__btn"><a style="text-decoration: none;color:#474646;" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

        </ul>
    </nav>
@endif
