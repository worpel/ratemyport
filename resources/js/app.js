
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

Vue.component('profile-card', require('./components/Profilecard.vue'));
Vue.component('user-profile-detail', require('./components/UserProfileDetail.vue'));


import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

const profileStore = new Vuex.Store({
    state: {
        firstname: '',
        surname: '',
        country: '',
        email: '',
        website: '',
        github: '',
        twitter: '',
        skills: []
    }
})

export default profileStore

const app = new Vue({
    el: '#app',

});