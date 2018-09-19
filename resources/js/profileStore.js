import Vue from 'vue';
import Vuex from 'vuex';
// import axios from 'axios';

Vue.use(Vuex);

const profileStore = new Vue.Store({
    state: {
        firstname: '',
        surname: '',
        country: '',
        email: '',
        website: '',
        github: '',
        twitter: ''
    }
})

export default profileStore