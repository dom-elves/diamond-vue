<template>
    <div class="flex">

        <div :class="this.card.suit" class="card" @click="reveal" :id="this.card.code">

            <p>{{ this.card.code }}</p>
        
        </div>

        <div class="backcard"></div>
 
    </div>
</template>

<script>
export default {

        name: 'BoardCard',

        props: ['card'], 

        mounted() {
            console.log(this.card);
            
            
        },

        methods: {

            reveal() {
                //card value
                var value = this._props.card.value;

                //card itself to eventually access row
                var self = document.getElementById(this.card.code);
                //finding out the parent div
                var row_name = self.closest("div > section").id;
                //taking the value off the end
                var row = row_name.substr(row_name.length -1);

                if (row % 2 == 0) {
                    alert(`if your card is ${value} drink ${row}`);
                } else {
                    alert(`if your card is ${value} nominate ${row}`);
                }

            }
        }

}
</script>

<style scoped>

.card {
    width: 64px;
    height: 100px;
    border-radius: 7px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 2px;
    padding: 2px;
    /* position: relative; */
}

.diamonds, .hearts {
    border: 3px solid red;
    color: red;
}

.clubs, .spades {
    border: 3px solid black;
    color: black;
}


p {
    font-weight: bolder;
    font-size: 30px;
}

.backcard {
    width: 64px;
    height: 100px;
    border-radius: 7px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 2px;
    padding: 2px;
    border: 3px solid blue;
    color: blue;
    background-color: blue;
    /* position: relative; */
}
</style>
