import Vue from 'vue';
import VueRouter from 'vue-router'

Vue.use(VueRouter)

//importo i componenti

import HomePage from './components/Pages/HomePage.vue';
import ApartmentsSearch from './components/Pages/Apartments/ApartmentsSearch.vue';
import ApartmentDetail from './components/Pages/Apartments/ApartmentDetail.vue';
import PacksDetail from './components/Pages/Apartments/PacksDetail.vue';

import FormMessage from './components/Pages/FormMessage.vue';



const router = new VueRouter({
    mode: 'history',
    linkExactActiveClass: 'active',
    routes: [
        { path: '/', component: HomePage, name: 'HomePage' },
        { path: '/apartments', component: ApartmentsSearch, name: 'ApartmentsSearch' },
        { path: '/apartments/:id', component: ApartmentDetail, name: 'ApartmentDetail' },
        { path: '/packsDetail', component: PacksDetail, name: 'PacksDetail' },
        { path: '/contact/:id', component: FormMessage, name: 'FormMessage' }
        /* { path: '*', component: NotFound }, */
    ],
})

export default router;