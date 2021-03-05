<template>
  <div class="card">
      <h3>{{ title }}</h3>
      <p>{{ content }}</p>
      <img :src="img" :alt="title">
  </div>
</template>

<script>
export default {
    name: "Card",
    props: [ "title", "content", "img" ]
}
</script>

<style>
    .card {
        text-align: center;
        width: 60%;
        margin: 30px auto;
    }

    .card img {
        width: 100%;
    }
</style>