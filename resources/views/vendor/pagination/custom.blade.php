<style type="text/css">
    ul.pager li{
        display: inline-block;
        border: 1px;
        font-weight: 600;
        padding: 5px 10px;
        border-radius: 5px;
    }
    ul.pager li a{
        text-decoration: none;
    }
</style>
@if ($paginator->hasPages())
    <ul class="pager text-white mt-3 animate__animated animate__fadeInDown">    
        <li class="bg-white text-primary">PAGES</li>
        @foreach ($elements as $element)
           
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif


           
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="bg-primary active my-active"><span>{{ $page }}</span></li>
                    @else
                        <li class="bg-white"><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach
    </ul>
@endif 