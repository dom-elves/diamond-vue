@extends('layouts.master')


@section('content')
<div>
    <p>board of cards</p>
    
<!-- {{ $deck[0]->code }} -->


    <div class=" flex flex-row justify-between"> 

        <div class="flex flex-column justify-between">

            @if ($hand_1 != null)
            <player-component v-bind:player="{{ json_encode($players[0]) }}" :hand="{{ json_encode($hand_1) }}"></player-component>
            @endif

            @if ($hand_2 != null)
            <player-component v-bind:player="{{ json_encode($players[1]) }}" :hand="{{ json_encode($hand_2) }}"></player-component>
            @endif

            @if ($hand_3 != null)
            <player-component v-bind:player="{{ json_encode($players[2]) }}" :hand="{{ json_encode($hand_3) }}"></player-component>
            @endif
        </div>

        <diamond-board v-bind:deck="{{ json_encode($deck) }}"></diamond-board>

        <div class="flex flex-column justify-between">

            @if ($hand_4 != null)
            <player-component v-bind:player="{{ json_encode($players[3]) }}" :hand="{{ json_encode($hand_4) }}"></player-component>
            @endif

            @if ($hand_5 != null)
            <player-component v-bind:player="{{ json_encode($players[4]) }}" :hand="{{ json_encode($hand_5) }}"></player-component>
            @endif

            @if ($hand_6 != null)
            <player-component v-bind:player="{{ json_encode($players[5]) }}" :hand="{{ json_encode($hand_6) }}"></player-component>
            @endif

        </div>

        

</div>

<!-- @foreach ($players as $key=>$player )

@endforeach -->
</div>
@endsection