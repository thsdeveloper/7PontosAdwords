
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Vuetify from 'vuetify';
Vue.use(Vuetify);

import VueRouter from 'vue-router';
Vue.use(VueRouter);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

Vue.component('login-form', require('./components/LoginForm.vue'));
Vue.component('toolbar-7p', require('./components/Toolbar7p.vue'));
Vue.component('dialog-confirm-7p', require('./components/DialogConfirm7p.vue'));


// define routes for users
const routes = [
{
  path: '/',
  name: 'userIndex',
  component: require('./components/user/index.vue')
},
{
  path: '/create',
  name: 'userCreate',
  component: require('./components/user/create.vue')
},
{
  path: '/view/:id',
  name: 'userView',
  component: require('./components/user/view.vue')
}
];
const router = new VueRouter({routes});

const app = new Vue({
  router
}).$mount('#app');
