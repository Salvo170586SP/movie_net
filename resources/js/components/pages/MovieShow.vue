<template>
  <section>
    <div class="d-flex">
      <img :src="movie.img" width="200" :alt="movie.title" />
      <div class="text-movie bg-light p-3">
        <h2>{{ movie.title }}</h2>
        <hr>
        <p>Trama:  {{ movie.description }}</p>
        <p>Cast: {{ movie.actor.name }}</p>
        <span>Prezzo: €{{ movie.price }}</span>
        <p>{{ movie.available ? 'disponibile' : 'non disponibile' }}</p>
      <router-link :to="{name: 'home'}" class="btn btn-secondary">Torna indietro</router-link>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "MovieShow",
  components: {},
  data() {
    return {
      movie: [],
    };
  },
  methods: {
    getMovie() {
      axios
        .get("http://localhost:8000/api/movies/" + this.$route.params.id)
        .then((res) => {
          this.movie = res.data;
          console.log(this.movie);
        })
        .catch((err) => {
          console.error(err);
        })
        .then(() => {
          console.log("chiamata terminata");
        });
    },
  },
  mounted() {
    this.getMovie();
  },
};
</script>