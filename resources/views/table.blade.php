@extends('layouts.master')

@section('content')
<p>this is the 'table'</p>

<!-- @foreach ($deck as $card)
{{ $card->code }}
@endforeach -->
<player-list />
<example-component />  

@endsection