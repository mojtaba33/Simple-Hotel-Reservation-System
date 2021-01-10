import VueRouter from 'vue-router';

import ExampleComponent from "./components/ExampleComponent";

const routes = [
    { path: '/', component: ExampleComponent },
];

const router = new VueRouter({
    mode: 'history',
    routes,
});

export default router;