<template>
  <section id="movie-list">
    <div class="row">
      <CardMovie v-for="movie in movies" :key="movie.id" :movie="movie" />
    </div>
  </section>
</template>

<script>
import CardMovie from "./CardMovie.vue";
export default {
  components: {
    CardMovie,
  },
  name: "MoviesList",
  data() {
    return {
      movies: [],
    };
  },
  methods: {
    getMovies() {
      axios
        .get("http://localhost:8000/api/movies")
        .then((res) => {
          this.movies = res.data;
        })
        .catch((err) => {
          consol.error(err);
        })
        .then(() => {
          console.log("termine chiamata");
        });
    },
  },
  mounted() {
    this.getMovies();
  },
};
</script>

<style>
</style>