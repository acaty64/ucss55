
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
window.VueRouter = require('vue-router');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('menu-component', require('./components/MenuComponent.vue'));
Vue.component('help-component', require('./components/HelpComponent.vue'));
Vue.component('userindex-component', require('./components/UserIndexComponent.vue'));
Vue.component('dcurso-component', require('./components/DCursoComponent.vue'));
Vue.component('App', require('./components/App.vue'));

const app = new Vue({
    el: '#app'
});
