<template>
    <swiper
        ref="swiper"
        class="flex-grow"
        :options="options"
        @slideChange="slideChanged"
    >
        <slot></slot>

        <div class="hidden lg:flex absolute pin-x pin-b z-10 h-32" slot="pagination">
            <div class="flex flex-grow max-w-3xl mx-auto px-10">
                <div class="banner-swiper-pagination flex flex-grow border-t border-white-a35">
                    <a
                        :key="index"
                        v-for="(label, index) in pagination"
                        @click="setActiveSlide(index)"
                        :class="{ 'is-active': activeSlide === index }"
                    >
                        <span>
                            <span class="w-full flex">
                                <span class="flex-shrink mr-2">
                                    <span class="featured-number">
                                        <span>{{ index + 1 }}</span>
                                    </span>
                                </span>

                                <span class="flex-grow">
                                    <strong class="block text-lg font-serif">{{ label }}</strong>
                                    <span class="text-xs font-semibold uppercase">Web design</span>
                                </span>
                            </span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </swiper>
</template>

<script>
    export default {
        props: {
            pagination: {
                type: Array,
                required: true
            }
        },

        data() {
            return {
                activeSlide: 0,

                options: {
                    speed: 800,
                    parallax: true
                }
            }
        },

        computed: {
            swiper() {
                return this.$refs.swiper.swiper;
            }
        },

        watch: {
            activeSlide(slide) {
                this.swiper.slideTo(slide, this.options.speed, false);
            }
        },

        methods: {
            slideChanged() {
                this.activeSlide = this.swiper.activeIndex;
            },

            setActiveSlide(slide) {
                this.activeSlide = slide;
            }
        }
    }
</script>
 