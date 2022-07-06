<template>
  <div id="board-container" class="flex flex-column items-center">
    <div id="row-1">
      <board-card v-bind:card="this.deck[0]"></board-card>
    </div>

    <div id="row-2" class="flex flex-row">
      <board-card v-bind:card="this.deck[1]"></board-card>
      <board-card v-bind:card="this.deck[2]"></board-card>
    </div>

    <div id="row-2" class="flex flex-row">
      <board-card v-bind:card="this.deck[3]"></board-card>
      <board-card v-bind:card="this.deck[4]"></board-card>
      <board-card v-bind:card="this.deck[5]"></board-card>
    </div>

    <div id="row-2" class="flex flex-row">
      <board-card v-bind:card="this.deck[6]"></board-card>
      <board-card v-bind:card="this.deck[7]"></board-card>
      <board-card v-bind:card="this.deck[8]"></board-card>
      <board-card v-bind:card="this.deck[9]"></board-card>
    </div>

    <div id="row-2" class="flex flex-row">
      <board-card v-bind:card="this.deck[10]"></board-card>
      <board-card v-bind:card="this.deck[11]"></board-card>
      <board-card v-bind:card="this.deck[12]"></board-card>
      <board-card v-bind:card="this.deck[13]"></board-card>
      <board-card v-bind:card="this.deck[14]"></board-card>
    </div>

    <div id="row-2" class="flex flex-row">
      <board-card v-bind:card="this.deck[15]"></board-card>
      <board-card v-bind:card="this.deck[16]"></board-card>
      <board-card v-bind:card="this.deck[17]"></board-card>
      <board-card v-bind:card="this.deck[18]"></board-card>
    </div>

    <div id="row-2" class="flex flex-row">
      <board-card v-bind:card="this.deck[19]"></board-card>
      <board-card v-bind:card="this.deck[20]"></board-card>
      <board-card v-bind:card="this.deck[21]"></board-card>
    </div>

    <div id="row-2" class="flex flex-row">
      <board-card v-bind:card="this.deck[22]"></board-card>
      <board-card v-bind:card="this.deck[23]"></board-card>
    </div>

    <div id="row-2" class="flex flex-row">
      <board-card v-bind:card="this.deck[24]"></board-card>
    </div>
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


