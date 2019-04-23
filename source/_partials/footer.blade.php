<footer id="footer" class="bg-grey-darkest text-grey">
    <div class="max-w-3xl mx-auto px-10">
        <div class="w-full py-12 lg:flex">
            <div class="lg:flex lg:w-4/5">
                <div class="mb-8 text-center md:text-left lg:w-1/3 lg:pr-10">
                    <h4 class="subtitle text-white">Email us</h4>
                    <h3 class="title text-white mb-4">Got a question</h3>

                    <p>Need a full quote or just simply want a chat about your needs? Give us a shout!</p>
                </div>

                <div class="mb-16 lg:mb-0 lg:w-2/3 lg:pr-10">
                    <contact-form></contact-form>
                </div>
            </div>

            <div class="text-center md:text-left lg:text-right lg:w-1/5">
                <h4 class="subtitle text-white">Contact us</h4>

                <h3 class="title text-white mb-4">Get in touch</h3>

                <p class="leading-loose mb-8">
                    <a href="mailto:info@talkstudio.co.uk" class="text-grey">info@talk.com</a>
                </p>

                <ul class="nav is-divided">
                    <li><a href="" class="text-grey">Linkedin</a></li>
                    <li><a href="" class="text-grey">Dribbble</a></li>
                    <li><a href="" class="text-grey">Behance</a></li>
                </ul>
            </div>
        </div>

        <hr class="bg-white-a35">

        <div class="md:flex md:justify-between items-center py-8">
            <div class="text-center mb-6 md:mb-0">
                @include('_partials.branding', ['class' => 'w-24 text-white'])
            </div>

            <div class="text-center text-xs">
                &copy; Copyright 2019 Talk. All Rights Reserved. Privacy policy
            </div>
        </div>
    </div>
</footer>
