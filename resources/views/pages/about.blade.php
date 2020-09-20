<h1>Hi</h1>

@if(count($heroes) > 0)
    @foreach($heroes as $hero)
        @if($loop->odd)
            <li>
                *{{ $hero }}
            </li>
        @else
            <li>
                {{ $hero }}
            </li>
        @endif
    @endforeach
@endif


