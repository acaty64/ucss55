
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
Vue.component('model_pagination-component', require('./components/pagination/ModelIndexComponent.vue'));
Vue.component('menu-component', require('./components/menu/MenuComponent.vue'));
Vue.component('menutype_edit-component', require('./components/menu/menutype/EditComponent.vue'));
Vue.component('help-component', require('./components/menu/HelpComponent.vue'));
Vue.component('userindex-component', require('./components/user/UserIndexComponent.vue'));
Vue.component('dcurso_edit-component', require('./components/dcurso/DCursoEditComponent.vue'));
Vue.component('dcurso_orden-component', require('./components/dcurso/DcursoOrdenComponent.vue'));
Vue.component('envio-component', require('./components/envio/EnvioComponent.vue'));
Vue.component('dhora_edit-component', require('./components/dhora/DHoraEditComponent.vue'));
Vue.component('rhora_edit-component', require('./components/rhora/RHoraEditComponent.vue'));
Vue.component('cursogrupo_edit-component', require('./components/cursogrupo/CursoGrupoEditComponent.vue'));

import { store } from './components/cursogrupo/store.js';

const app = new Vue({
    el: '#app',
    store,
});
