require('./bootstrap');

import Vue from 'vue';
import VueRouter from "vue-router";

import router from "./router";
import store from "./store";
import vuetify from './vuetify';
import App from "./App.vue";


Vue.use(VueRouter);


const app = new Vue({
    el: '#app',
    router,
    store,
    vuetify,
    components: {App}
});
