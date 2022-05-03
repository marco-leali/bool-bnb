import Vue from 'vue';
import VueRouter from 'vue-router'

Vue.use(VueRouter)

//importo i componenti

import Home from './components/Pages/Home.vue';



const router = new VueRouter({
    mode: 'history',
    linkExactActiveClass: 'active',
    routes: [
        { path: '/', component: Home, name: 'Home' },
        /* { path: '*', component: NotFound }, */
    ],
})

export default router;