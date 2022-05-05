import Vue from 'vue';
import VueRouter from 'vue-router'

Vue.use(VueRouter)

//importo i componenti

import HomePage from './components/Pages/HomePage.vue';
import ApartmentsSearch from './components/Pages/Apartments/ApartmentsSearch.vue';



const router = new VueRouter({
    mode: 'history',
    linkExactActiveClass: 'active',
    routes: [
        { path: '/', component: HomePage, name: 'HomePage' },
        { path: '/apartments-search', component: ApartmentsSearch, name: 'ApartmentsSearch' }
        /* { path: '*', component: NotFound }, */
    ],
})

export default router;