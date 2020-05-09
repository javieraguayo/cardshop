/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');
import router from './routes'
import Vue from 'vue'
import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css'



Vue.use(Vuetify)

/**
   primary: #00bcd4,
      secondary: #607d8b,
      accent: #cddc39,
      error: #f44336,
      warning: #ffc107,
      info: #03a9f4,
      success: #4caf50 
*/


window.Vue = require('vue');
window.axios = require('axios');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('toolbar-component', require('./components/Toolbar.vue').default);
//cart carrito de compra table
Vue.component('cartgeneral-component', require('./components/CartGeneralComponent.vue').default);
//card carta 
Vue.component('card-component', require('./components/CardComponent.vue').default);
//componente que contiene for de cartas
Vue.component('general-list-component', require('./components/GeneralCardListComponent.vue').default);
//componente de carro unidad
Vue.component('cart-component', require('./components/CartComponent.vue').default);
//Menu logout y carro btn show cart
Vue.component('menu-auth-component', require('./components/MenuAuth.vue').default);
//component carousel home
Vue.component('carousel-home-component', require('./components/CarouselHomeComponent.vue').default);
//componente login 
Vue.component('login-component', require('./components/LoginComponent.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    vuetify: new Vuetify(),
    router
});

// const app = new Vue({
//     el: '#app',
//     router
// });
