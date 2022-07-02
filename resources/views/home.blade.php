@extends('layouts.master')

@section('content')

<section>

    <form class="flex flex-column" action="/enter-player-names">
    {{ csrf_field() }}
        <div>
            <label for="player-1">Enter player name</label>
            <input id="player-1" name="player-1" type="text">
        </div>

        <div>
            <label for="player-2">Enter player name</label>
            <input id="player-2" name="player-2" type="text">
        </div>

        <div>
            <label for="player-3">Enter player name</label>
            <input id="player-3" name="player-3" type="text">
        </div>

        <div>
            <label for="player-4">Enter player name</label>
            <input id="player-4" name="player-4" type="text">
        </div>

        <div>
            <label for="player-5">Enter player name</label>
            <input id="player-5" name="player-5" type="text">
        </div>

        <div>
            <label for="player-6">Enter player name</label>
            <input id="player-6" name="player-6" type="text">
        </div>

        <button>Go</button>
        
    </form>

</section>
@endsection