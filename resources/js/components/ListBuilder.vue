<template>

    <div>

        <div>
            <form v-on:submit.prevent="enterPlayers">

                <label for="number-of-players">Please enter number of players (max 6)</label>
                <input v-model="newPlayer" type="number" id="number-of-players">

            </form>

            <form id="players-list">

            </form>

        </div>


   

    </div>

</template>

<script>
    export default {
        
        data() {
            
            return {

                players: [],

                newPlayer: 0,
            }
        },

        mounted() {
            console.log('list builder mounted');
            
        },

        methods: {

            enterPlayers: function () {

                // console.log(this.newPlayer);
                //just renaming
                var totalPlayers = this.newPlayer
                //adds whatever the user inputs to the players array, essentially saying "whatever the uas has input, add each number up to that one"
                for (let i = 0; i < totalPlayers; i++) {
                    //as described, pushing the value to the array
                    this.players.push( i + 1 );
                    
                    }
                //renaming
                var totalPlayers = this.players;
                
                // console.log(this.players);

                //gets the empty form and adds one input per number in players array
                function createInput(player, playersList, newInput) {

                    var playersList = document.getElementById("players-list")
                    var newInput = document.createElement("input");

                    // console.log(player);
                    playersList.appendChild(newInput);

                }
                //passing in the previously declared function, for some reason it wouldn't work if it's stored in methods:{}
                totalPlayers.forEach(createInput);    
            },

            
        }


    }
</script>