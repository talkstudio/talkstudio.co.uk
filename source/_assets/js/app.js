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

Vue.component('banner-swiper', require('./components/BannerSwiper'));
Vue.component('contact-form', require('./components/ContactForm'));
Vue.component('mobile-nav', require('./components/MobileNav'));
Vue.component('testimonial-swiper', require('./components/TestimonialSwiper'));

const app = new Vue({
    el: '#app',

    data() {
        return {
            navIsOpen: false
        }
    },

    methods: {
        toggleNav() {
            this.navIsOpen = ! this.navIsOpen;
        },

        mobileScrollTo(element) {
            this.navIsOpen = false;
            VueScrollTo.scrollTo(`#${element}`);
        }
    }
});
