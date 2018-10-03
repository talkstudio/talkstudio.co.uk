<template>
    <div class="md:hidden" @scroll.prevent>
        <transition :css="false" @enter="overlayEnter" @leave="overlayLeave">
            <div class="mobile-nav-overlay" v-if="active" @click="$emit('close')"></div>
        </transition>
        
        <transition :css="false" @enter="navEnter" @leave="navLeave">
            <div class="mobile-nav-wrap" v-if="active">
                <div class="mobile-nav-scroll px-10 pb-8">
                    <slot></slot>
                </div>
            </div>
        </transition>
    </div>
</template>

<script>
    import Velocity from 'velocity-animate';

    export default {
        props: {
            active: {
                type: Boolean,
                default: false
            }
        },

        data() {
            return {
                speed: 225
            }
        },

        watch: {
            active(value) {
                if (value) {
                    document.documentElement.classList.add('overflow-hidden');
                } else {
                    document.documentElement.classList.remove('overflow-hidden');
                }
            }
        },

        methods: {
            overlayEnter(el, done) {
                Velocity(el, { opacity: 1 }, {
                    duration: this.speed,
                    complete: () => {
                        done();
                    }
                });
            },

            overlayLeave(el, done) {
                Velocity(el, { opacity: 0 }, {
                    duration: this.speed,
                    complete: () => {
                        done();
                    }
                });
            },

            navEnter(el, done) {
                Velocity(el, {
                    opacity: 1,
                    translateX: ['0%', '30%']
                }, {
                    duration: this.speed,
                    complete: () => {
                        done();
                    }
                });
            },

            navLeave(el, done) {
                Velocity(el, {
                    opacity: 0,
                    translateX: '30%'
                }, {
                    duration: this.speed,
                    complete: () => {
                        done();
                    }
                });
            }
        }
    }
</script>
