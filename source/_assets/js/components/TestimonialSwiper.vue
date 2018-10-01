<template>
    <div class="relative md:mx-64 md:px-24">
        <swiper
            ref="swiper"
            class="swiper"
            @resize="setSwiperPositions"
            :options="options"
            @slide-change="setSwiperPositions"
        >
            <slot></slot>
        </swiper>

        <div class="swiper-navigation-holder">
            <a
                class="swiper-navigation is-prev"
                :class="{ 'is-disabled': isAtBeginning }"
                @click="swiper.slidePrev()"
            >
                <span class="icon">
                    <icon icon="angle-left" size="2x"></icon>
                </span>
            </a>

            <a
                class="swiper-navigation is-next"
                :class="{ 'is-disabled': isAtEnd }"
                @click="swiper.slideNext()"
            >
                <span class="icon">
                    <icon icon="angle-right" size="2x"></icon>
                </span>
            </a>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                isAtBeginning: false,
                isAtEnd: false,

                options: {
                    speed: 600,
                    effect: 'fade',
                    parallax: true
                }
            }
        },

        computed: {
            swiper() {
                return this.$refs.swiper.swiper;
            }
        },

        mounted() {
            this.setSwiperPositions();
        },

        methods: {
            setSwiperPositions() {
                this.isAtBeginning = this.swiper.isBeginning;
                this.isAtEnd = this.swiper.isEnd;
            }
        }
    }
</script>
