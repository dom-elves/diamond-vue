<template>
    <div class="m-3">
        <p class="font-bold">{{ this.player }}</p>

        <p v-for="card in this.hand">{{ card.code }}</p>

    </div>
</template>

<script>
export default {

        props: ['player', 'hand'], 

        mounted() {
            console.log(this.player);
            this.makeHand();
        },

        methods: {

            makeHand() {
                console.log(this.hand);
            }
        }

}
</script>
