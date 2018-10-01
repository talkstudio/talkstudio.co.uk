import './bootstrap';
import './lib/icons';

import VueScrollTo from 'vue-scrollto';
Vue.use(VueScrollTo, {
    easing: 'ease-in-out',
    duration: 800
});

import VueAwesomeSwiper from 'vue-awesome-swiper';
Vue.use(VueAwesomeSwiper);

import 'swiper/dist/css/swiper.css';

Vue.component('testimonial-swiper', require('./components/TestimonialSwiper'));

const app = new Vue({
    el: '#app',

    data() {
        return {
            navIsOpen: false
        }
    }
});
