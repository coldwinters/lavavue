
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';
import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
import router from './router/router';
import App from './App.vue';

Vue.use(VueRouter);
Vue.use(ElementUI);

const app = new Vue({
    el: '#app',
    router,
    components: {
        App
    }
});
