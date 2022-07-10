<template>
    <div class="flex">

        <div :class="this.card.suit" class="card" @click="reveal" :id="this.card.code">

            <p>{{ this.card.code }}</p>
        
        </div>
 
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
                
                //annoying i think it has to be individual checks, seems like .contains() didn't like an array of classes?
                //
                if (self.classList.contains("DIAMONDS")) {
                    self.classList.remove("DIAMONDS");
                    self.classList.add("backcard");
                    
                }

                if (self.classList.contains("HEARTS")) {
                    self.classList.remove("HEARTS");
                    self.classList.add("backcard");
                }

                if (self.classList.contains("CLUBS")) {
                    self.classList.remove("CLUBS");
                    self.classList.add("backcard");
                }

                if (self.classList.contains("SPADES")) {
                    self.classList.remove("SPADES");
                    self.classList.add("backcard");
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
    pointer-events: none
}
</style>
