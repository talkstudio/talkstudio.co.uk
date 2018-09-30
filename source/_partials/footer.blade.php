<footer id="footer" class="bg-grey-darkest text-grey">
    <div class="max-w-3xl mx-auto">
        <div class="mx-10">
            <div class="w-full py-12 lg:flex">
                <div class="lg:flex lg:w-4/5">
                    <div class="mb-8 text-center md:text-left lg:w-1/3 lg:pr-10">
                        <h4 class="subtitle text-white">Email us</h4>
                        <h3 class="title text-white mb-4">Got a question</h3>
                        <p>Curabitur eget dui ut elit molestie interdum. Duis sollicitudin ante urna, sit amet varius nunc elementum in. Aenean sed elit mattis. Donec quis leo a nisl hendrerit aliquam ac dictum libero.</p>
                    </div>

                    <div class="mb-16 lg:mb-0 lg:w-2/3 lg:pr-10">
                        {{--<div class="bg-red-dark text-white p-4 mb-4 rounded">
                            <h4>Errors:</h4>
                            <ul>
                                <li>Email is required</li>
                            </ul>
                        </div>--}}

                        <form action="" class="md:flex">
                            <div class="md:w-1/2 md:pr-2">
                                <div class="mb-4">
                                    <label for="name" class="hidden">Name</label>

                                    <input
                                        id="name"
                                        type="text"
                                        value=""
                                        class="input is-dark"
                                        required
                                        placeholder="Name"
                                    >
                                </div>

                                <div class="mb-4">
                                    <label for="email" class="hidden">Email</label>

                                    <input
                                        id="email"
                                        type="text"
                                        value=""
                                        class="input is-dark"
                                        required
                                        placeholder="Email"
                                    >
                                </div>

                                <div class="mb-4">
                                    <label for="type" class="hidden">Select enquiry type...</label>

                                    <div class="select w-full is-dark">
                                        <select id="type" required>
                                            <option value="" selected>Select enquiry type...</option>
                                            <option value="">Option One</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="md:w-1/2 md:pl-2">
                                <div class="mb-4">
                                    <label for="message" class="hidden">Message</label>

                                    <textarea
                                        id="message"
                                        class="textarea is-dark resize-none h-40"
                                        required
                                        placeholder="Message"
                                    ></textarea>
                                </div>

                                <div class="text-right">
                                    <button type="submit" class="button is-white is-outlined w-full md:w-auto">
                                        <span>Submit</span>

                                        <span class="icon">
                                            <icon icon="angle-right"></icon>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="text-center md:text-left lg:text-right lg:w-1/5">
                    <h4 class="subtitle text-white">Contact us</h4>

                    <h3 class="title text-white mb-4">Get in touch</h3>

                    <p class="leading-loose mb-8">
                        <a href="tel:07472862114" class="text-grey">07472 862 114</a><br>
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
                    <img src="/assets/images/layout/logo.svg" alt="Talk" class="w-24">
                </div>

                <div class="text-center text-xs">
                    &copy; Copyright 2018 Talk. All Rights Reserved. Privacy policy
                </div>
            </div>
        </div>
    </div>
</footer>
