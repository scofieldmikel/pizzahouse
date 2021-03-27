@extends('layouts.layout')


@section('content')

<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="title m-b-md">
            Pizza List
        </div>

        <p>{{ $name }}</p>
        <p>{{ $age }}</p>
        {{-- <p>{{ $type }} - {{ $base }} - {{ $price }}</p> --}}

            {{-- If statement sanple --}}
        {{-- @if($price > 15)
            <p>This Pizza is expensive</p>
        @elseif($price < 5)
            <p>This Pizza is cheap</p>
        @else
            <p>This Pizza is normally priced</p>
        @endif --}}


            {{-- Unless statement sanple --}}
        {{-- @unless($base == 'chessy crust')
            <p>You don't have a chessy crust</p>
        @endunless --}}

        {{-- Php statement sanple --}}
        {{-- @php
            $name = 'Scofield';
            echo($name)
        @endphp --}}

            {{-- for statement sample --}}
        {{-- @for ($i = 0; $i < 5 ; $i++)
            <p>The value of i is {{ $i }}</p>
        @endfor --}}

        {{-- @for($i = 0; $i < count($pizzas); $i++)
            <p>{{ $pizzas[$i] ['type'] }}</p>
        @endfor --}}

        @foreach ($pizzas as $pizza)
        <div>
            {{ $loop-> index }} {{ $pizza['type'] }} - {{ $pizza['base'] }}
            @if($loop->first)
                <span> - first in the loop</span>
            @endif
            @if($loop->last)
                <span> - last in the loop</span>
            @endif
        </div>

        @endforeach

    </div>
</div>
@endsection
