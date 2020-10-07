require('./bootstrap');

window.Vue = require('vue')

// import VueRouter from './router'
import VueRouter from 'vue-router';
// import mainPage from './components/pages/mainPage.vue'

// Vue Router
Vue.use(VueRouter);

let routes = [
    { path: '/aboutus', component: require('./components/aboutus.vue').default },
    { path: '/customers', component: require('./components/customers.vue').default },
    { path: '/partners', component: require('./components/partners.vue').default },
    { path: '/products', component: require('./components/products.vue').default },
    { path: '/services', component: require('./components/services.vue').default },
]

Vue.component('mainapp', require('./components/main.vue').default)

const router = new VueRouter({
    mode: 'history',
    routes // short for `routes: routes`
});

const app = new Vue({
    el: '#app',
    router
})