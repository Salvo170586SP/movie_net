<template>
  <div class="container">
      <h2>Home Page</h2>
      <MoviesList />
  </div>
</template>

<script>
import MoviesList from "../movies/MoviesList.vue";
export default {
    name: "HomePage",
    components:{
        MoviesList,
    }
}
</script>
