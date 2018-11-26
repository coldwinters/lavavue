import VueRouter from 'vue-router';

let routes = [
    {
        name: 'index',
        path: '/',
        component: require('../components/Index')
    },
    {
        name: 'about',
        path: '/about',
        component: require('../components/About')
    },
    {
        name: 'show',
        path: '/:id',
        component: require('../components/Show')
    }
];

export default new VueRouter({
    mode: 'history',
    routes
});