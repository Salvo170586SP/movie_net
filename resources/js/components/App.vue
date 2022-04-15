<template>
  <div>
    <Header />
    <main class="container my-5">
        <router-view></router-view>
    </main>
  </div>
</template>

<script>
import Header from "./Header.vue";
export default {
  name: "App",
  components: {
    Header,
  },
};
</script>


