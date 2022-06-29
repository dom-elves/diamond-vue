@extends('layouts.master')

@section('content')
<p>this is the 'table'</p>

@foreach ($deck as $card)
{{ $card->code }}
@endforeach

<example-component />  

@endsection