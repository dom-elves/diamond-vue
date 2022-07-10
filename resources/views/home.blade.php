@extends('layouts.master')

@section('content')

<section>

    <form class="flex flex-column items-center" action="/enter-player-names">
    {{ csrf_field() }}

        <div class="flex flex-row justify-center">

            <div class="flex flex-column m-5">

                <div class="flex flex-column items-center m-10">
                    <label for="player-1" class="text-3xl">Enter player name</label>
                    <input id="player-1" name="player-1" type="text" class="border-4 border-green-500 rounded h-[50px] w-full">
                </div>

                <div class="flex flex-column items-center m-10">
                    <label for="player-2" class="text-3xl">Enter player name</label>
                    <input id="player-2" name="player-2" type="text" class="border-4 border-green-500 rounded h-[50px] w-full">
                </div>

                <div class="flex flex-column items-center m-10">
                    <label for="player-3" class="text-3xl">Enter player name</label>
                    <input id="player-3" name="player-3" type="text" class="border-4 border-green-500 rounded h-[50px] w-full">
                </div>
            </div>

            <div class="flex flex-column m-5">

                <div class="flex flex-column items-center m-10">
                    <label for="player-4" class="text-3xl">Enter player name</label>
                    <input id="player-4" name="player-4" type="text" class="border-4 border-green-500 rounded h-[50px] w-full">
                </div>

                <div class="flex flex-column items-center m-10">
                    <label for="player-5" class="text-3xl">Enter player name</label>
                    <input id="player-5" name="player-5" type="text" class="border-4 border-green-500 rounded h-[50px] w-full">
                </div>

                <div class="flex flex-column items-center m-10">
                    <label for="player-6" class="text-3xl">Enter player name</label>
                    <input id="player-6" name="player-6" type="text" class="border-4 border-green-500 rounded h-[50px] w-full">
                </div>

            </div>

        </div>

        <button class="text-5xl w-[100px] h-[100px] rounded-full border-4 border-green-500 bg-white">Go</button>
        
    </form>

</section>
@endsection