
import {createRouter, createWebHistory} from "vue-router";
import Home from '../views/HomePage.vue';
import ReservationsPageVue from "../views/ReservationsPage.vue";

const routes = [
    
    {
        path: '/',
        name: 'home',
        component: Home,
    },
    {
        path: '/reservations',
        name: 'reservations',
        component: ReservationsPageVue
    }

]


const router = createRouter({
    history: createWebHistory(),
    routes,
})



export default router;
