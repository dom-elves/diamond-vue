<template>
    <div>
        <form v-on:submit.prevent="enterPlayers">

            <label for="player-1">Enter player name:</label>
            <input id="player-1" type="text">

        </form>
    </div>
</template>