
@if ($paginator->hasPages())

<ul class="pagination">
    
    @if ($paginator->onFirstPage())
    <li class="disabled">
        <a href="#!">
            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M560-240 320-480l240-240 56 56-184 184 184 184-56 56Z"/></svg>
        </a>
    </li>
    @else
    <li class="waves-effect">
        <a href="{{ $paginator->previousPageUrl() }}">
            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M560-240 320-480l240-240 56 56-184 184 184 184-56 56Z"/></svg>
        </a>
    </li>
    @endif
    
    @foreach ($elements as $element)
        
        @if (is_string($element))
            <li class="disabled">{{ $element }}</li>
        @endif

        @if (is_array($element))
            @foreach ($element as $page=>$url)
                @if ($page==$paginator->currentPage())
                    <li class="active"><a>{{ $page }}</a></li>
                @else
                    <li class="waves-effect"><a href="{{ $url }}">{{ $page }}</a></li>
                @endif
            @endforeach
        @endif
    @endforeach

    @if ($paginator->hasMorePages())    
        <li class="waves-effect">
            <a href="{{ $paginator->nextPageUrl() }}">
                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z"/></svg>
            </a>
        </li>    
    @else
        <li class="disabled">
            <a href="{{ $paginator->nextPageUrl() }}">
                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z"/></svg>
            </a>
        </li>
    @endif

</ul>

@endif