<template>
  <div id="board-container" class="flex flex-column items-center">

    <h1 class="text-4xl font-bold"> Start from the top </h1>

    <section id="row-1">
      <board-card v-bind:card="this.deck[0]"></board-card>
    </section >

    <section id="row-2" class="flex flex-row">
      <board-card v-bind:card="this.deck[1]"></board-card>
      <board-card v-bind:card="this.deck[2]"></board-card>
    </section>

    <section id="row-3" class="flex flex-row">
      <board-card v-bind:card="this.deck[3]"></board-card>
      <board-card v-bind:card="this.deck[4]"></board-card>
      <board-card v-bind:card="this.deck[5]"></board-card>
    </section>

    <section id="row-4" class="flex flex-row">
      <board-card v-bind:card="this.deck[6]"></board-card>
      <board-card v-bind:card="this.deck[7]"></board-card>
      <board-card v-bind:card="this.deck[8]"></board-card>
      <board-card v-bind:card="this.deck[9]"></board-card>
    </section>

    <section id="row-5" class="flex flex-row">
      <board-card v-bind:card="this.deck[10]"></board-card>
      <board-card v-bind:card="this.deck[11]"></board-card>
      <board-card v-bind:card="this.deck[12]"></board-card>
      <board-card v-bind:card="this.deck[13]"></board-card>
      <board-card v-bind:card="this.deck[14]"></board-card>
    </section>

    <section id="row-6" class="flex flex-row">
      <board-card v-bind:card="this.deck[15]"></board-card>
      <board-card v-bind:card="this.deck[16]"></board-card>
      <board-card v-bind:card="this.deck[17]"></board-card>
      <board-card v-bind:card="this.deck[18]"></board-card>
    </section>

    <section id="row-7" class="flex flex-row">
      <board-card v-bind:card="this.deck[19]"></board-card>
      <board-card v-bind:card="this.deck[20]"></board-card>
      <board-card v-bind:card="this.deck[21]"></board-card>
    </section>

    <section id="row-8" class="flex flex-row">
      <board-card v-bind:card="this.deck[22]"></board-card>
      <board-card v-bind:card="this.deck[23]"></board-card>
    </section>

    <section id="row-9" class="flex flex-row">
      <board-card v-bind:card="this.deck[24]"></board-card>
    </section>

  </div>
</template>

<script>
import BoardCard from "./BoardCard.vue";

export default {
  props: ["deck"],

  components: {
    BoardCard,
  },

  mounted() {
    console.log(this.deck);
  },
};
</script>
<style scoped>
/* #row-1, #row-2, #row-3, #row-4, #row-5, #row-6, #row-7, #row-8, #row-9 {
  position: absolute;
} */
</style>

