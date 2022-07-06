@extends('layouts.master')


@section('content')
<div>
    <p>board of cards</p>
    
{{ $deck[0]->code }}


    <div class=" flex flex-row justify-between"> <!-- no idea why but this only works with inline styling, tailwind flex wasn't working-->

        <div>

            <player-component v-bind:player="{{ json_encode($players[0]) }}" :hand="{{ json_encode($hand_1) }}"></player-component>

            <player-component v-bind:player="{{ json_encode($players[1]) }}" :hand="{{ json_encode($hand_2) }}"></player-component>

            <player-component v-bind:player="{{ json_encode($players[2]) }}" :hand="{{ json_encode($hand_3) }}"></player-component>
            
        </div>

        <div>
            @foreach ($deck as $card) 
            {{ $card->code }}
            @endforeach
        </div>

        <div>

            <player-component v-bind:player="{{ json_encode($players[3]) }}" :hand="{{ json_encode($hand_4) }}"></player-component>

            <player-component v-bind:player="{{ json_encode($players[4]) }}" :hand="{{ json_encode($hand_5) }}"></player-component>

            <player-component v-bind:player="{{ json_encode($players[5]) }}" :hand="{{ json_encode($hand_6) }}"></player-component>

        </div>

        

</div>

<!-- @foreach ($players as $key=>$player )

@endforeach -->
</div>
@endsection