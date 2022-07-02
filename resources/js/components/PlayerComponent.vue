<template>
    <div class="m-3">

        <p>{{ this.player }}</p>

        <div class="flex flex-row justify-around">

            <p v-for="card in this.hand" class="m-2">{{ card.code }}</p>

        </div>

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
