import VueRouter from 'vue-router';

let routes = [
    {
        name: 'index',
        path: '/',
        component: require('../components/index/Index')
    }
];

export default new VueRouter({
    mode: 'history',
    routes
});