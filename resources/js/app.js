import './bootstrap';
import Vue from 'vue';
import LoginForm from './components/LoginForm.vue';
import RegisterForm from './components/RegisterForm.vue';

Vue.component('login-form', LoginForm);
Vue.component('register-form', RegisterForm);

const app = new Vue({
    el: '#app'
});
