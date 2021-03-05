<template>
    <div>
        <h2>App Vue</h2>

        <Card 
            v-for="(card, index) in cards"
            :key="index"
            :title="card.title"
            :content="card.content"
            :img="card.img"
        />
    </div>
</template>

<script>
import Card from "./components/Card.vue";

export default {
    name: "App",
    data() {
        return {
            cards: []
            // cards: [
            //     {
            //         title: "Lorem ipsum",
            //         content: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
            //         img: "https://siviaggia.it/wp-content/uploads/sites/2/2017/03/paesaggio-alpi-think-1217.jpg"
            //     }
            // ]
        }
    },
    mounted() {
        axios
            .get('http://127.0.0.1:8000/api/cards')
            .then(
                (response) => {
                    this.cards = response.data;
                }
            );
    },
    components: {
        Card
    }
}
</script>

<style>

</style>