<template>
  <div class=" col-sm-5 col-md-5 col-lg-3 p-3">
    <div id="card-movie" class="shadow">
      <img
        :src="movie.img"
        style="height: 400px"
        class="img-fluid rounded shadow"
        :alt="movie.title"
      />
      <div class="txt-movie text-light rounded p-3">
        <h3>{{ movie.title }}</h3>
        <p>
          Trama:
          {{ movie.description.slice(0, 40) }}...
        </p>
        <p>Prezzo: €{{ movie.price }}</p>
        <p>
          {{ movie.available ? "nelle sale" : "prossima uscita" }}
        </p>
        <router-link class="btn btn-primary" :to="{name: 'movie-show', params:{ id: movie.id}}">Scopri</router-link>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "CardMovie",
  props: ["movie"],
};
</script>

<style lang="scss" scoped>
#card-movie {
  position: relative;
  cursor: pointer;

  .txt-movie {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;

    display: none;
    &:hover {
      background-color: rgba(0, 0, 0, 0.726);
      transition: background-color 0.5s;
     transform: scale(1.1); 
    
      z-index: 1;
    }
  }

  &:hover img {
     transform: scale(1.1);
     z-index: 1;

  }

  &:hover .txt-movie {
    display: block;
    z-index: 1;
  }
}
</style>