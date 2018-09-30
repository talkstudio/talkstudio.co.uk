<header class="max-w-3xl mx-auto">
    <div class="flex justify-between py-6 mx-10 border-b border-white-a35">
        <div>
            <h1 class="leading-none">
                <a href="/">
                    <img src="/assets/images/layout/logo.svg" alt="Talk Studio">
                </a>
            </h1>
        </div>

        <div class="self-center">
            <div class="hamburger has-spin md:hidden" :class="{ 'is-active': navIsOpen }" @click="navIsOpen = ! navIsOpen">
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
                        class="button font-normal is-white is-outlined border rounded-full"
                    >Contact</a>
                </li>
            </ul>
        </div>
    </div>
</header>
