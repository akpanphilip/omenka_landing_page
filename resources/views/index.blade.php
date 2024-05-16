@extends('layout.main')
@section('content')
    <div class="hero" id="home">
        <div class="grid-hero">
            <div class="hero-text">
                <p class="hero-title">Explore <span class="block-lg">Igbo culture</span> <span class="block-lg">with
                        Omenka.</span></p>
                <p class="hero-subtitle">Immerse Yourself in Igbo Heritage - <span>Cultivating Connection, Community &
                        Beyond</span></p>
                <div class="download-btns">
                    <a href="https://apps.apple.com/ng/app/omenka/id6477753751">
                        <img src={{ asset('assets/images/appstore.png') }} alt="">
                    </a>
                    <a href="https://play.google.com/store/apps/details?id=com.omenkaapp">
                        <img src={{ asset('assets/images/googleplay.png') }} alt="">
                    </a>
                </div>
            </div>
            <div>
                <img src={{ asset('assets/images/hero-img.png') }} alt="">
            </div>
        </div>
    </div>

    <div class="section pb-0" id="about">
        <div class="container-100">
            <div class="row">
                <div class="col-lg-3">
                    <p class="title text-center-sm">About Us</p>
                </div>
                <div class="col-lg-9">
                    <p class="subtitle text-center-sm fw-normal">
                        At Omenka, we are passionate about showcasing the depth and diversity of Igbo heritage, offering a
                        platform where individuals worldwide can explore, learn, and connect with the essence of our
                        culture. Through our curated content, from poetry to news, music to documentation, we strive to
                        provide a comprehensive and immersive experience that celebrates the beauty and significance of Igbo
                        traditions. Join us on this enriching journey of discovery, where every interaction fosters a deeper
                        understanding and appreciation of Igbo culture, uniting us across continents and generations.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="section pb-0" id="explore">
        <div class="container-100">
            <p class="title text-center">Explore</p>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <p class="subtitle text-center">Discover the richness of the Igbo heritage with Omenka, a
                        community-based app
                        designed to protect and celebrate the essence of Igbo language, culture, people and more</p>
                </div>
            </div>
            <swiper-container class="mySwiper swiper-100" pagination="true" pagination-clickable="true" slides-per-view="3"
                space-between="30" autoplay-delay="4000" autoplay-disable-on-interaction="false">
                <swiper-slide>
                    <div class="item-100">
                        <img src={{ asset('assets/images/language.png') }} class="item-icon" alt="">
                        <div class="item-title">Language</div>
                        <div class="item-subtitle">
                            Dive deep into the rich tapestry of the Igbo language with our comprehensive Igbo language
                            dictionary, engaging wordsearch puzzles, daily word highlights, and helpful pronunciation
                            guides.
                        </div>
                        <img src={{ asset('assets/images/language-explore.png') }} class="item-img" alt="">
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="item-100">
                        <img src={{ asset('assets/images/business.png') }} class="item-icon" alt="">
                        <div class="item-title">Business</div>
                        <div class="item-subtitle">
                            Promote your business ventures to Igbo people all over the world! Through the Omenka
                            ‘BusinessConnect’ feature, promote your business and advertise upcoming events!.
                        </div>
                        <img src={{ asset('assets/images/business-explore.png') }} class="item-img" alt="">
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="item-100">
                        <img src={{ asset('assets/images/music.png') }} class="item-icon" alt="">
                        <div class="item-title">Music</div>
                        <div class="item-subtitle">
                            Check out the ever growing collection of Igbo music, old and new. Whether you’re dedicated to
                            the traditional music icons or looking to discover new artists, there’s something for everyone!
                        </div>
                        <img src={{ asset('assets/images/music-explore.png') }} class="item-img" alt="">
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="item-100">
                        <img src={{ asset('assets/images/culture.png') }} class="item-icon" alt="">
                        <div class="item-title">Culture</div>
                        <div class="item-subtitle">
                            Embark on a journey of discovery, exploring the vibrant tapestry of Igbo culture through
                            captivating stories, cherished traditions, jubilant festivals, and joyful
                            celebrations with Omenka.
                        </div>
                        <img src={{ asset('assets/images/culture-explore.png') }} class="item-img" alt="">
                    </div>
                </swiper-slide>


            </swiper-container>
        </div>
    </div>



    <div class="section">
        <div class="container-100">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="row">
                        <div class="col-lg-8">
                            <p class="title text-center-sm">Get started <span class="block-lg">with <span
                                        class="brown-text">Omenka</span></span></p>
                            <p class="subtitle text-center-sm">
                                The app provides a rich cultural <span class="block-lg">background for the Igbo
                                    Culture</span>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="row g-4">
                        <div class="col-lg-4">
                            <div class="count-sec">
                                <div class="count-value"><span class="counter" id="counter1">1000</span> +</div>
                                <div class="count-desc">Words</div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="count-sec">
                                <div class="count-value"><span class="counter" id="counter1">100</span> +</div>
                                <div class="count-desc">Proverbs</div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="count-sec border-0">
                                <div class="count-value"><span class="counter" id="counter1">100</span> +</div>
                                <div class="count-desc">Classic Music</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





        </div>
    </div>

    <div class="section bg-lighter-green">
        <div class="container-100">
            <div class="row justify-content-center" id="features">
                <div class="col-lg-6">
                    <p class="title text-center mt-10">Features</p>
                    <p class="subtitle text-center text-green">Explore Our Features: Unveiling What We Offer</p>
                </div>
            </div>

            <div class="row align-items-center justify-content-center g-4 feature-item">
                <div class="col-md-5">
                    <div class="features-caption">
                        Omenka Connect
                    </div>
                    <p class="subtitle fw-normal text-green">
                        Omenka lets you Coonect with other people on the app in minutes.
                    </p>

                    <div class="check-wraps">
                        <div class="check-wrap">
                            <i class="bi bi-check-square-fill"></i>
                            <div class="check-wrap-in">
                                <div class="item-title">Business Connect</div>
                                <div class="item-subtitle">
                                    Promote your business ventures to Igbo people all over the world! Through the Omenka
                                    ‘BusinessConnect’ feature, you can connect with new and loyal customers, promote your
                                    business
                                    and advertise upcoming events!
                                </div>
                            </div>
                        </div>
                        <div class="check-wrap">
                            <i class="bi bi-check-square-fill"></i>
                            <div class="check-wrap-in">
                                <div class="item-title">People Connect</div>
                                <div class="item-subtitle">
                                    Build relationships with members of your Igbo community from all over the world. Meet
                                    like minded individuals, make new friends and expand your network, all through the
                                    ‘OmenkaConnect’ feature!
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-5">
                    <div class="feature-img">
                        <img src={{ asset('assets/images/home-mobile.png') }} alt="">
                    </div>
                </div>
            </div>

            <div class="row align-items-center justify-content-center reverse-col-sm feature-item">
                <div class="col-md-5">
                    <div class="feature-img">
                        <img src={{ asset('assets/images/word-search-mobile.png') }} alt="">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="features-caption">
                        Word Search
                    </div>
                    <p class="subtitle fw-normal text-green">
                        Dive into the world of Igbo language with our interactive word search feature. Uncover new words,
                        expand your vocabulary, and deepen your connection to Igbo culture—all in one engaging experience.
                    </p>
                </div>

            </div>

            <div class="row align-items-center justify-content-center feature-item">
                <div class="col-md-5">
                    <div class="features-caption">
                        Igbo Calender
                    </div>
                    <p class="subtitle fw-normal text-green">
                        The Omenka app Igbo calendar feature offers users a culturally enriching experience by displaying
                        the thirteen lunar months, highlighting significant events and moon phases, while also providing
                        customization options and educational resources.
                    </p>
                </div>
                <div class="col-md-5">
                    <div class="feature-img">
                        <img src={{ asset('assets/images/igbo-calender.png') }} alt="">
                    </div>
                </div>
            </div>

            <div class="row align-items-center justify-content-center reverse-col-sm feature-item">
                <div class="col-md-5">
                    <div class="feature-img">
                        <img src={{ asset('assets/images/poem-mobile.png') }} alt="">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="features-caption">
                        Poems & Short Story
                    </div>
                    <p class="subtitle fw-normal text-green">
                        Unleash your creativity with our poem and short story features on the Omenka App. Immerse yourself
                        in evocative poetry and captivating narratives, crafted to celebrate and explore the beauty of Igbo
                        culture.
                    </p>
                </div>

            </div>

            <div class="row align-items-center justify-content-center feature-item">
                <div class="col-md-5">
                    <div class="features-caption">
                        Jokes & Riddles
                    </div>
                    <p class="subtitle text-green fw-normal">
                        Enjoy Igbo-inspired humor and brain-teasers on the Omenka App. Dive into jokes and riddles that
                        entertain and engage, all reflecting the essence of Igbo culture.
                    </p>
                </div>
                <div class="col-md-5">
                    <div class="feature-img">
                        <img src={{ asset('assets/images/riddle-mobile.png') }} alt="">
                    </div>
                </div>
            </div>

            <div class="row align-items-center justify-content-center reverse-col-sm feature-item">
                <div class="col-md-5">
                    <div class="feature-img">
                        <img src={{ asset('assets/images/music-mobile.png') }} alt="">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="features-caption">
                        Audio & Audio Books
                    </div>
                    <p class="subtitle text-green fw-normal">
                        Dive into Igbo culture through audio on Omenka. Explore traditional music, spoken word, and more for
                        an immersive experience.
                    </p>
                </div>

            </div>
        </div>
    </div>

    <div class="download-section section" id="download">
        <div class="container-100">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="download-section-text">
                        <p class="title text-light">
                            Do even more with <span class="block-lg">the <span class="brown-text">Omenka App</span></span>
                        </p>
                        <p class="subtitle text-light fw-light">
                            Unlock Endless Possibilities and Elevate Your Experience <span class="block-lg">
                                with the Omenka
                                App. Seamlessly
                                Explore, Connect, and Engage.
                            </span>
                        </p>
                        <div class="download-btns">
                            <a href="https://apps.apple.com/ng/app/omenka/id6477753751">
                                <img src={{ asset('assets/images/appstore.png') }} alt="">
                            </a>
                            <a href="https://play.google.com/store/apps/details?id=com.omenkaapp">
                                <img src={{ asset('assets/images/googleplay.png') }} alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 offset-md-1">
                    <div class="phone">
                        <img src={{ asset('assets/images/home-mobile.png') }} alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container-100">
            <div class="row">

                <div class="col-md-6">
                    <div class="contactForm">
                        <p class="title mt-10">Let's hear from you</p>
                        <div id="messageContainer" style="display: none;"></div>
                        <form id="contactForm" class="mt-2">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" placeholder="name@example.com" name="name"
                                    id="name" required>
                                <label for="name">Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="name@example.com" required>
                                <label for="email">Email</label>
                            </div>
                            <div class="form-floating">
                                <textarea class="form-control" name="message" id="message" rows="30" placeholder="Leave a comment here"
                                    id="floatingTextarea" style="height: 150px" required></textarea>
                                <label for="floatingTextarea">Message</label>
                            </div>
                            <div class="form-group mt-4">
                                <button class="btn-100" style="width: 200px">
                                    <span id="buttonText">submit</span>
                                    <span id="spinner" style="display: none;">Loading...</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-5 offset-md-1 mt-50">
                    <p class="title mt-10">FAQs</p>
                    <div class="accordion mt-2" id="accordion-item">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseOne">
                                    How to get started
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    To get started, simply navigate to the app's homepage and click on the "Sign Up" or "Get
                                    Started" button. Follow the prompts to create an account by providing your email
                                    address, creating a password, and possibly verifying your account through email. Once
                                    registered, you can explore the app's features and functionalities. If you encounter any
                                    issues during the sign-up process, you can reach out to our support team for assistance.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseTwo">
                                    Is there a subscription fee
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    There is no subscription fee required to access the basic features of the app. However,
                                    certain premium features may be available through a subscription model. You can check
                                    the app's pricing page or settings section for more information on subscription options
                                    and pricing tiers.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseThree">
                                    How to become a Partner
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Becoming a partner with us is simple! Just reach out to our partnership team through the
                                    contact form on our website or send us an email at
                                    <a href="mailto:info@omenkaapp.com">info@omenkaapp.com</a> expressing your interest.
                                    We'll be
                                    happy to discuss potential collaboration opportunities and how we can work together to
                                    achieve mutual goals.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


    <div class="section discover">
        <div class="container-100">
            <p class="title text-center">Connect. <span class="brown-text">Discover.</span> Celebrate.</p>
            <p class="subtitle text-center">Connect with Igbo Culture, Community, and Beyond</p>


            {{-- <swiper-container class="mySwiper swiper-200" pagination="true" pagination-clickable="true" slides-per-view="3"
                space-between="30" autoplay-delay="2500" autoplay-disable-on-interaction="false">
                <swiper-slide>
                    <div class="item-200"></div>
                </swiper-slide>
                <swiper-slide>
                    <div class="item-200"></div>
                </swiper-slide>
                <swiper-slide>
                    <div class="item-200"></div>
                </swiper-slide>
                <swiper-slide>
                    <div class="item-200"></div>
                </swiper-slide>
                <swiper-slide>
                    <div class="item-200"></div>
                </swiper-slide>
                <swiper-slide>
                    <div class="item-200"></div>
                </swiper-slide>

            </swiper-container> --}}

        </div>
    </div>
    <div class="contact-sm container-100">
        <div class="contact-app-sm">
            <i class="bi bi-envelope"></i><a href="mailto:info@omenkaapp.com">info@omenkaapp.com</a>
        </div>
        <div class="contact-app-sm">
            <i class="bi bi-telephone"></i><a href="tel:+15056390377">+1 (505) 639-0377</a>
        </div>
        <div class="contact-app-sm">
            <i class="bi bi-geo-alt"></i><a href="">2322 Wisconsin Str. NE, Albuquerque, NM 87110</a>
        </div>
    </div>
    <div id="contact"></div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#contactForm').submit(function(e) {
                e.preventDefault();

                $('#spinner').show();
                $('#buttonText').hide();

                $.ajax({
                    url: '/send-message',
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                        $('#messageContainer').html('<p style="color: green;">' + response
                            .message + '</p>').show();
                        $('#name, #email, #message').val(''); // Clear form input fields
                    },
                    error: function(xhr) {
                        console.error('Error:', xhr.responseText);
                        alert('Error submitting form');
                    },
                    complete: function() {
                        $('#spinner').hide();
                        $('#buttonText').show();
                    }
                });
            });
        });
    </script>
@endsection
