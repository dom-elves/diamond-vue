@extends('layouts.master')

@section('content')
<p>this is the 'table'</p>

@foreach ($deck as $card) 
{{ $card->code }}
@endforeach

<player-component v-bind:player="{{ json_encode($players[0]) }}" :hand="{{ json_encode($hand_1) }}"></player-component>

<player-component v-bind:player="{{ json_encode($players[1]) }}" :hand="{{ json_encode($hand_2) }}"></player-component>

<player-component v-bind:player="{{ json_encode($players[2]) }}" :hand="{{ json_encode($hand_3) }}"></player-component>

<player-component v-bind:player="{{ json_encode($players[3]) }}" :hand="{{ json_encode($hand_4) }}"></player-component>

<player-component v-bind:player="{{ json_encode($players[4]) }}" :hand="{{ json_encode($hand_5) }}"></player-component>

<player-component v-bind:player="{{ json_encode($players[5]) }}" :hand="{{ json_encode($hand_6) }}"></player-component>


<!-- @foreach ($players as $key=>$player )



@endforeach -->

<!-- <player-list /> -->

<!-- <list-builder /> -->


@endsection