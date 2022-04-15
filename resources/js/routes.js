import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import HomePage from './components/pages/HomePage.vue';
import ContactPage from './components/pages/ContactPage.vue';
import MovieShow from './components/pages/MovieShow.vue';

const router = new VueRouter({
    mode: 'history',
    routes: [
        {path: '/', component: HomePage, name: 'home'},
        {path: '/contacts', component: ContactPage, name: 'contacts'},
        {path: '/movies/:id', component: MovieShow, name: 'movie-show'},
    ]
});

export default router;