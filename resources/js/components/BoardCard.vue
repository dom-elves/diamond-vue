<template>
    <div>

        <p>board card</p>

    </div>
</template>

<script>
export default {

        name: 'BoardCard',

        props: ['card'], 

        mounted() {
            // console.log(this.card);
            
            
        },

}
</script>

<style scoped>

#card {
    width: 80px;
    height: 120px;
    border-radius: 7px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 2px;
    padding: 2px;
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
    font-size: 35px;
}
</style>
