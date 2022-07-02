@extends('layouts.master')

@section('content')
<p>this is the 'table'</p>

@foreach ($deck as $card)
{{ $card->code }}
@endforeach



@foreach ($players as $key=>$player )
{{ $player }}
@endforeach

<!-- <player-list /> -->

<!-- <list-builder /> -->

<player-entry />


@endsection