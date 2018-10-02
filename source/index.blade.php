@extends('_layouts.app')

@section('content')
    {{-- TODO --}}
    {{-- Header slider pagination on mobile --}}
    {{-- Mobile Navigation --}}

    <section class="flex flex-col min-h-screen bg-header bg-center bg-cover">
        <div>
            @include('_partials.header')
        </div>

        <div class="flex flex-grow">
            <banner-swiper :pagination="['Project One', 'Project Two', 'Project Three']">
                @foreach(range(1, 3) as $i)
                    <swiper-slide{{ $i !== 1 ? ' v-cloak' : null }} class="flex">
                        <div class="flex flex-grow justify-center w-full max-w-3xl mx-auto text-white pb-16 lg:justify-start lg:pb-32">
                            <div class="mx-10 py-32 text-center lg:w-2/5 lg:text-left">
                                <h3 class="subtitle mb-6" data-swiper-parallax-x="-20%">Web design project {{ $i }}</h3>
                                <h2 class="title text-4xl md:text-5xl" data-swiper-parallax-x="-40%">Company name placeholder</h2>
    
                                <hr class="w-3/4 lg:ml-0 my-6">
    
                                <a class="button is-white is-outlined" data-swiper-parallax-x="-60%">
                                    <span>View site</span>
    
                                    <span class="icon">
                                        <icon icon="angle-right"></icon>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </swiper-slide>
                @endforeach
            </banner-swiper>
        </div>
    </section>

    <section id="services" class="max-w-md lg:max-w-3xl mx-auto">
        <div class="mx-10 py-20 text-center">
            <h2 class="subtitle">Welcome to talk</h2>
            <h1 class="title mb-5">Introducing Our Services</h1>

            <div class="w-10 h-1 bg-black mx-auto mb-10"></div>

            <div class="lg:flex">
                <div class="mb-10 lg:w-1/3 lg:pr-12">
                    <img src="/assets/images/layout/consultancy.svg" alt="UI &amp; UX Consultancy" class="max-w-2/3 lg:mb-6">

                    <div class="content">
                        <h2 class="font-serif">UI &amp; UX Consultancy</h2>
                        <p>Nunc ut lorem sit amet turpis ultricies mattis. Duis tincidunt dui ut est rutrum posuere. Nunc varius, elit eu maximus porta, nisi arcu porttitor turpis, non viverra dolor augue eu nisi. Aenean consequat mi non ligula dictum, et rutrum ex sagittis ante dapibus.</p>
                    </div>
                </div>

                <div class="mb-10 lg:w-1/3 lg:px-6">
                    <img src="/assets/images/layout/web-design.svg" alt="Web Design" class="max-w-2/3 lg:mb-6">

                    <div class="content">
                        <h2 class="font-serif">Web Design</h2>
                        <p>Nunc ut lorem sit amet turpis ultricies mattis. Duis tincidunt dui ut est rutrum posuere. Nunc varius, elit eu maximus porta, nisi arcu porttitor turpis, non viverra dolor augue eu nisi. Aenean consequat mi non ligula dictum, et rutrum ex sagittis ante dapibus.</p>
                    </div>
                </div>

                <div class="lg:w-1/3 lg:pl-12">
                    <img src="/assets/images/layout/branding.svg" alt="Branding" class="max-w-2/3 lg:mb-6">

                    <div class="content">
                        <h2 class="font-serif">Branding</h2>
                        <p>Nunc ut lorem sit amet turpis ultricies mattis. Duis tincidunt dui ut est rutrum posuere. Nunc varius, elit eu maximus porta, nisi arcu porttitor turpis, non viverra dolor augue eu nisi. Aenean consequat mi non ligula dictum, et rutrum ex sagittis ante dapibus.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="bg-clouds bg-left-top bg-no-repeat">
        <div class="max-w-md lg:max-w-3xl mx-auto px-10 py-10 lg:pb-20">
            <div class="lg:flex">
                <div class="lg:w-3/5 lg:pt-10">
                    <img src="/assets/images/layout/workspace.png" alt="">
                </div>

                <div class="pt-12 text-center lg:pt-0 lg:text-left lg:w-2/5">
                    <h3 class="subtitle">About Talk</h3>
                    <h2 class="title mb-5">Our history</h2>
                    <div class="mx-auto w-10 h-1 bg-black mb-10 lg:ml-0"></div>

                    <div class="content">
                        <p>Curabitur eget dui ut elit molestie interdum. Duis sollicitudin ante urna, sit amet varius nunc elementum in. Aenean sed elit mattis, molestie dui at, congue ex. Mauris ultrices facilisis mollis. In ex tellus, malesuada in justo ut, dapibus mollis justo. Donec dignissim diam nec convallis facilisis. Integer nec varius risus. Sed tincidunt pharetra purus, quis pretium sem scelerisque nec.</p>
                        <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse laoreet ligula eget pulvinar semper. Mauris ipsum justo, fermentum quis ante pulvinar, iaculis porttitor tellus. </p>
                        <p>
                            <a class="button is-grey-darker is-outlined">
                                <span>Talk to us</span>

                                <span class="icon">
                                    <icon icon="angle-right"></icon>
                                </span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <div id="portfolio" class="pt-20 text-center">
                <h4 class="subtitle">Portfolio</h4>
                <h3 class="title mb-5">Some of our work</h3>
                <div class="mx-auto w-10 h-1 bg-black"></div>
            </div>
        </div>
    </section>

    <section class="md:flex">
        @foreach(range(1, 5) as $i)
            <div class="image-overlay">
                <img src="/assets/images/placeholders/400x680.jpg" class="hidden md:block" alt="">
                <img src="/assets/images/placeholders/800x400.jpg" class="block md:hidden" alt="">

                <div class="overlay items-center justify-center">
                    <div class="overlay-content p-8 text-center">
                        <h3 class="subtitle text-white">Web design</h3>

                        <h2 class="title text-xl text-white mb-5">Company Name</h2>

                        <div class="w-10 h-1 bg-white mx-auto mb-8"></div>

                        <a class="button is-white is-outlined">
                            <span>View site</span>

                            <span class="icon">
                                <icon icon="angle-right"></icon>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </section>

    <section id="testimonials" class="max-w-3xl mx-auto px-10 py-20 text-center">
        <h3 class="subtitle">Testimonials</h3>
        <h2 class="title mb-5">Your thoughts</h2>

        <div class="w-10 h-1 bg-black mx-auto mb-10"></div>

        <div class="max-w-xl mx-auto">
            <testimonial-swiper>
                @foreach(range(1, 4) as $i)
                    <swiper-slide{{ $i !== 1 ? ' v-cloak' : null }} class="bg-white">
                        <img
                            alt=""
                            src="/assets/images/placeholders/quote.jpg"
                            class="mx-auto mb-4 rounded-full"
                        >

                        <div class="font-light text-lg mb-6" data-swiper-parallax-x="-50">
                            <p>Curabitur eget dui ut elit molestie interdum. Duis sollicitudin ante urna, sit amet varius nunc elementum in. Aenean sed elit mattis, molestie dui at, congue ex. Mauris ultrices facilisis mollis. In ex tellus, malesuada in justo ut, dapibus mollis justo. Donec dignissim diam nec convallis facilisis. Integer nec varius risus.</p>
                        </div>

                        <p data-swiper-parallax-x="-80">
                            <strong class="uppercase">Rich Moore - Director, Rich Tea Biscuits</strong>
                        </p>
                    </swiper-slide>
                @endforeach
            </testimonial-swiper>
        </div>
    </section>

    @include('_partials.footer')
@endsection
