
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import Vuetify from 'vuetify';
import App from './App';
import Routes from './core/routes.js';
import 'vuetify/dist/vuetify.min.css';
import PageHeader from './core/components/PageHeader';

Vue.use(Vuetify, {
    theme: {
    primary: '#315199',
    secondary: '#1CA3F3',
    accent: '#8c9eff',
    error: '#b71c1c',
    internship: '#009D4D',
    contract: '#0277BD',
    sliderColor: '#1CA3F3',
    },

});

Vue.component('page-header', PageHeader);


const app = new Vue({
    el: '#app',
    router: Routes,
    render: h => h(App)
});

export default app;