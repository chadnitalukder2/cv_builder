import { createRouter, createWebHistory } from 'vue-router';
import Dashboard from '../components/Dashboard.vue';
import CreateCv from '../components/CreateCv.vue';
import EditCv from '../components/EditCv.vue';

const routes = [
    { path: '/', component: Dashboard },
    { path: '/create', component: CreateCv },
    { path: '/edit/:id', component: EditCv },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
