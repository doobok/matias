require('./bootstrap');

require('alpinejs');

// мультиязычность
import './ml';

// Vue
window.Vue = require('vue').default;

// валидатор форм
import Vuelidate from 'vuelidate';
Vue.use(Vuelidate);

// Components
Vue.component('nav-bar', require('./components/NavBar.vue').default);
Vue.component('mp-slideshow', require('./components/MpSlideshow.vue').default);
Vue.component('mp-cases', require('./components/MpCarouselCases.vue').default);
Vue.component('mp-carousel-logo', require('./components/MpCarouselLogo.vue').default);
Vue.component('phone-btn', require('./components/PhoneGetBtn.vue').default);
Vue.component('phone-form', require('./components/PhoneGetForm.vue').default);

const app = new Vue({
    el: '#app',
});
