<template>
    <div>
        <p>Player list</p>

            <form v-on:submit.prevent="addNewPlayer">

                <label for="new-player">Add a player</label>

                <input v-model="newPlayerName" id="new-player">

                <button>Add</button>

            </form>

            <ul>
                <li v-for="player in players" v-bind:key="player.id" v-bind:name="player.name">{{ player.id }} {{ player.name }}</li>
            </ul>

            <a href="/board"><button class="p-3 border-2">DEAL</button></a>
    </div>
</template>


<script>
    export default {
        
        data() {
            
            return {

                players: [
                    {
                        id: 1,
                        name: 'p1',
                    },
                    {
                        id: 2,
                        name: 'p2',
                    },
                    {
                        id: 3,
                        name: 'p3'
                    }
                ],
                
                nextPlayerId: 4,

                newPlayerName: '',
                
            }
        },

        mounted() {

            // console.log('Player list mounted.')
            console.log(this.players);
        },

        methods: {

            addNewPlayer: function () {

                this.players.push({
                    
                    id: this.nextPlayerId++,
                    name: this.newPlayerName
            })

            this.newPlayerName = ''
            console.log(this.players)
            }
        }


    }
</script>