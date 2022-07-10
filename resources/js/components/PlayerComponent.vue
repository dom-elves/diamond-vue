<template>
    <div class="m-3">

        <p class="text-3xl font-bold">{{ this.player }}</p>

        <div class="flex flex-row justify-around">

            <!-- had to card code this cause it made more sense to pass a whole card object rather than just
                the code so it was easy to have access to the card suit in the PlayerCard component -->
            <player-card v-bind:card="this.hand[0]"></player-card>

            <player-card v-bind:card="this.hand[1]"></player-card>

            <player-card v-bind:card="this.hand[2]"></player-card>

            <player-card v-bind:card="this.hand[3]"></player-card>

        </div>

    </div>
</template>

<script>

import PlayerCard from './PlayerCard.vue';

export default {

        props: ['player', 'hand'], 

        components: {

            PlayerCard,

        },

        mounted() {
            // console.log(this.player, this.hand);
            
            
        },

        methods: {

            
        }

}
</script>
