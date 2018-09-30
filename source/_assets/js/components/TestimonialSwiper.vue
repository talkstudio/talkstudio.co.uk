<template>
    <swiper class="swiper" :options="options">
        <slot></slot>
        
        <a class="navigation is-prev" slot="button-prev">
            <span class="icon">
                <icon icon="angle-left" size="2x"></icon>
            </span>
        </a>

        <a class="navigation is-next" slot="button-next">
            <span class="icon">
                <icon icon="angle-right" size="2x"></icon>
            </span>
        </a>
    </swiper>
</template>

<script>
    import { swiper, swiperSlide } from 'vue-awesome-swiper';

    export default {
        components: {
            swiper,
            swiperSlide
        },
        
        data() {
            return {
                options: {
                    speed: 800,
                    parallax: true,

                    navigation: {
                        prevEl: '.is-prev',
                        nextEl: '.is-next',
                        disabledClass: 'opacity-25'
                    }
                }
            }
        }
    }
</script>
