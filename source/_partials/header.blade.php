<header class="relative max-w-3xl mx-auto px-10">
    <mobile-nav :active="navIsOpen" @close="toggleNav" v-cloak>
        <ul class="nav is-mobile">
            <li><a @click="mobileScrollTo('top')">Home</a></li>
            <li><a @click="mobileScrollTo('services')">Services</a></li>
            <li><a @click="mobileScrollTo('about')">About</a></li>
            <li><a @click="mobileScrollTo('portfolio')">Portfolio</a></li>
            <li><a @click="mobileScrollTo('testimonials')">Testimonials</a></li>
            <li><a @click="mobileScrollTo('footer')">Contact</a></li>
        </ul>
    </mobile-nav>

    <div class="flex justify-between py-6 border-b border-white-a35">
        <div class="flex items-center pr-10">
            <h1 class="leading-none" title="Talk Studio">
                @include('_partials.branding', ['class' => 'max-w-5/6 w-branding text-white'])
            </h1>
        </div>

        <div class="self-center">
            <div
                class="hamburger has-spin md:hidden"
                :class="{ 'is-active': navIsOpen }"
                @click="navIsOpen = ! navIsOpen"
            >
                <div class="hamburger-holder">
                    <div class="hamburger-inner"></div>
                </div>
            </div>

            <ul class="nav is-header">
                <li class="is-active"><a>Home</a></li>
                <li><a v-scroll-to="'#services'">Services</a></li>
                <li><a v-scroll-to="'#about'">About</a></li>
                <li><a v-scroll-to="'#portfolio'">Portfolio</a></li>
                <li><a v-scroll-to="'#testimonials'">Testimonials</a></li>
                <li>
                    <a
                        v-scroll-to="'#footer'"
                        class="button white outlined font-normal rounded-full"
                    >Contact</a>
                </li>
            </ul>
        </div>
    </div>
</header>
