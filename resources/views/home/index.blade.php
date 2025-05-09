<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.css')

</head>

<body>
    <!-- header area start -->
    @include('home.header')
    <!-- header area end -->
    <!-- hero slider start -->
    <div class="rts-hero-slider rt-relative v_2">
        <div class="rts-hero-slider-active swiper swiper-data" data-swiper='{
            "slidesPerView":1,
            "effect": "fade",
            "loop": false,
            "speed": 1000,
            "navigation":{
                "nextEl":".rt-next",
                "prevEl":".rt-prev"
            },
            "autoplay":{
                "delay":"7000"
            }
}'>
            <div class="swiper-wrapper">
                <!-- single slider -->
                <div class="swiper-slide">
                    <div class="rts-slider-height rts-slider-overlay rt-relative ">
                        <div class="rts-slider-bg" data-background="{{asset('bibm/assets/images/banner/02.webp')}}"
                            style="background-image: url({{asset('bibm/assets/images/banner/02.webp')}});"></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 col-xl-6 col-md-8 col-sm-9">
                                    <div class="rts-slider">
                                        <div class="rts-slider-content">
                                            <h6 class="rts-subtitle">Welcome to MBM Alumni Society</h6>
                                            <h1 class="rts-slider-title" style="font-size: 48px;">
                                                25 Years of Excellence: Pioneering Leadership in Banking and Beyond
                                            </h1>
                                            <p class="rts-slider-desc">
                                                With decades of proven expertise, we bring together the strengths of
                                                distinguished institutions to shape the future of banking and finance
                                            </p>
                                            <div class="rts-slider-btn">
                                                <a href="{{route('about') }}" class="rts-theme-btn btn-arrow">About Us
                                                    <span><i class="fa-thin fa-arrow-right"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single slider -->
                <div class="swiper-slide">
                    <div class="rts-slider-height rts-slider-overlay rt-relative ">
                        <div class="rts-slider-bg" data-background="assets/images/event/11.jpg"
                            style="background-image: url(assets/images/event/11.jpg);"></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 col-xl-6 col-md-8 col-sm-9">
                                    <div class="rts-slider">
                                        <div class="rts-slider-content">
                                            <h6 class="rts-subtitle">Welcome to MBM Alumni Society</h6>
                                            <h1 class="rts-slider-title" style="font-size: 48px;">
                                                25 Years of Excellence: Pioneering Leadership in Banking and Beyond
                                            </h1>
                                            <p class="rts-slider-desc">
                                                With decades of proven expertise, we bring together the strengths of
                                                distinguished institutions to shape the future of banking and finance
                                            </p>
                                            <div class="rts-slider-btn" style="color: #007FAA;">
                                                <a href="{{route('about') }}" class="rts-theme-btn btn-arrow">About Us
                                                    <span><i class="fa-thin fa-arrow-right"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- slider arrow -->
            <div class="rts-slider-arrow">
                <div class="rt-slider-btn rt-next">
                    <i class="fa-regular fa-arrow-left"></i>
                </div>
                <div class="rt-slider-btn rt-prev">
                    <i class="fa-regular fa-arrow-right"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- hero slider  end -->
    <!-- About -->
    <section class="about v__1" style="padding-top: 120px;padding-bottom: 60px;">
        <div class="container">
            <div class="row justify-content-md-center align-items-center">
                <div class="col-lg-6 col-md-10">
                    <div class="about__images">
                        <div class="about__images--wrapper">
                            <div class="about__images--wrapper--left">
                                <img src="{{asset('bibm/assets/images/about/building_2.png')}}" alt="">
                            </div>
                            <div class="about__images--wrapper--center">
                                <div class="rts__circle v__1">
                                    <svg class="spinner" viewBox="0 0 100 100">
                                        <defs>
                                            <path id="circle-2" d="M50,50 m-37,0a37,37 0 1,1 74,0a37,37 0 1,1 -74,0">
                                            </path>
                                        </defs>
                                        <text>
                                            <textPath xlink:href="#circle-2">MBM * Established 1997 * Explore Future *
                                            </textPath>
                                        </text>
                                    </svg>
                                    <div class="rts__circle--icon">
                                        <i class="fa-light fa-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="about__images--wrapper--right">
                                <img src="{{asset('bibm/assets/images/about/building_red.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10">
                    <div class="about__content">
                        <h2 class="rts__title">About MBM Alumni Society</h2>
                        <p style="text-align: justify;" class="rts__description">The MBM Alumni Society (MAS) brings
                            together graduates of the Masters in Bank Management (MBM) program from BIBM, affiliated
                            with the University of Dhaka. With a growing network of over 1800+ alumni in the banking and
                            financial sectors worldwide, MAS serves as a platform for connection, collaboration, and
                            professional growth.
                            We aim to strengthen alumni ties, celebrate achievements, and support each other through
                            networking, events, and shared opportunities — upholding the legacy and excellence of the
                            MBM community.

                            Facilitate Networking among alumni across generations and geographies
                            Organize Events & Reunions to strengthen bonds and celebrate milestones
                            Support Career Growth through mentorship, industry insights, and opportunities
                            Collaborate with BIBM to bridge academia and industry
                            Celebrate Alumni Achievements and highlight success stories</p><br>

                        <!-- Stats row with two items side by side -->
                        <!-- Stats row with two items side by side -->
                        <div class="row g-4 justify-content-center" style="margin-top: -26px;">
                            <div class="col-md-6 col-sm-10 col-12 text-center text-sm-start">
                                <div class="rts-counter-wrapper">
                                    <h2 class="single-cta-item__title">25</h2>
                                    <p class="rts-description mt--10">Years of Excellence in MBM</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-10 col-12 text-center text-sm-start">
                                <div class="rts-counter-wrapper">
                                    <h2 class="single-cta-item__title">1800+</h2>
                                    <p class="rts-description mt--10">Alumni Worldwide</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>




            </div>
        </div>

    </section>
    <!-- about us end -->
    <!-- notice board start -->
    <section>
        <div id="clickevent" class="container">
            <div class="row">
                <div class="rts__section--wrapper v__8 p-0">
                    <h2 class="rts__section--title">Alumni Event</h2>
                    <div class="rts__section--link">
                    </div>
                </div>

            </div>
            <div class="row g-5 justify-content-md-center mb-5">
                <div class="col-lg-4 col-md-6 col-sm-6" style="margin-top: 90px;">
                    <div class="rts__single--event v__3">
                        <div class="rts__single--event--thumb">
                            <a href="event-detailsinvalid link">
                                <img src="{{asset('bibm/assets/images/event/01.jpg')}}" alt="event">
                            </a>
                        </div>
                        <div class="rts__single--event--meta">
                            <div class="rts__single--event--meta--dl">
                                <span class="date">
                                    <img src="{{asset('bibm/assets/images/icon/calendar.svg')}}" alt="">
                                    <span>April 18,Friday,2025</span>
                                </span>
                                <span class="location">
                                    <i class="fa-sharp fa-light fa-location-dot"></i>
                                    <span>Dhaka, Bangladesh</span>
                                </span>
                            </div>
                            <h5 class="rts__single--event--meta--title d-none d-lg-block"
                                style="letter-spacing: 1.5px;">
                                <a href="event-detailsinvalid link">
                                    Celebrating 25 Years of Excellence – MBM Silver Jubilee</a>
                            </h5>
                            <!-- <h5 class="rts__single--event--meta--title d-lg-none">
                            <a href="event-detailsinvalid link">
                                Celebrating 25 Years of Excellence – MBM Silver Jubilee</a>
                        </h5> -->
                            <p>This 2025 marks a significant milestone as MBM Alumni Society(MAS) celebrates 25 years of
                                success of MBM (Masters in Bank Management) Program since its inception.....</p>
                            <a href="event-detailsinvalid link" class="rts__round--btn">
                                <i class="fa-light fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-11 col-lg-5 ms-0 ms-lg-5">
                    <div class="event__background customstom__event__background bounce-2">
                        <img src="{{asset('bibm/assets/images/event/event__bg.png')}}" alt="" class="img-fluid">
                    </div>
                </div>

                <style>
                    .bounce-2 {
                        animation: bounce-2 3s ease infinite;
                    }

                    @keyframes bounce-2 {
                        0% {
                            transform: translateY(0);
                        }

                        50% {
                            transform: translateY(-10px);
                        }

                        100% {
                            transform: translateY(0);
                        }
                    }
                </style>
            </div>
        </div>
    </section>
    <!-- notice board end -->




    <!-- campus life -->
    <section class="campus ">
        <div class="container">
            <div class="row">
                <div class="rts__section--wrapper v__6">
                    <!-- <p class="rts__section--wrapper--description">
                        Building a vibrant community of creative and accomplished people from around the world
                    </p> -->
                    <h2 class="rts__section--wrapper--title" style="color: black;">
                        Golden <span>Memories</span>
                    </h2>
                </div>
            </div>
            <!-- content -->
            <!-- Photo Grid Layout -->
            <div class="photo-grid-container">
                <div class="photo-grid">
                    <div class="photo-item small-square">
                        <a href="#">
                            <div class="campus__single--item--thumb">
                                <img src="{{asset('bibm/assets/images/event/14.jpeg')}}"
                                    alt="Photographer in night scene">
                            </div>
                        </a>
                    </div>

                    <div class="photo-item portrait">
                        <a href="#">
                            <div class="campus__single--item--thumb">
                                <img src="{{asset('bibm/assets/images/event/13.jpg')}}" alt="Photographer with camera">
                            </div>
                        </a>
                    </div>

                    <div class="photo-item small-square">
                        <a href="#">
                            <div class="campus__single--item--thumb">
                                <img src="{{asset('bibm/assets/images/event/12.jpeg')}}" alt="Sunset photographer">
                            </div>
                        </a>
                    </div>

                    <div class="photo-item small-square">
                        <a href="#">
                            <div class="campus__single--item--thumb">
                                <img src="{{asset('bibm/assets/images/event/11.jpg')}}" alt="Mountain photography">
                            </div>
                        </a>
                    </div>

                    <div class="photo-item small-square">
                        <a href="#">
                            <div class="campus__single--item--thumb">
                                <img src="{{asset('bibm/assets/images/event/10.jpeg')}}" alt="Camera detail">
                            </div>
                        </a>
                    </div>

                    <div class="photo-item small-square">
                        <a href="#">
                            <div class="campus__single--item--thumb">
                                <img src="{{asset('bibm/assets/images/event/04.jpg')}}" alt="Street photography">
                            </div>
                        </a>
                    </div>

                    <div class="photo-item small-square">
                        <a href="#">
                            <div class="campus__single--item--thumb">
                                <img src="{{asset('bibm/assets/images/event/05.jpg')}}" alt="Silhouette photography">
                            </div>
                        </a>
                    </div>

                    <div class="photo-item small-square">
                        <a href="#">
                            <div class="campus__single--item--thumb">
                                <img src="{{asset('bibm/assets/images/event/06.jpg')}}" alt="Urban photography">
                            </div>
                        </a>
                    </div>
                    <div class="photo-item small-square">
                        <a href="#">
                            <div class="campus__single--item--thumb">
                                <img src="{{asset('bibm/assets/images/event/07.jpg')}}" alt="Urban photography">
                            </div>
                        </a>
                    </div>
                    <div class="photo-item small-square">
                        <a href="#">
                            <div class="campus__single--item--thumb">
                                <img src="{{asset('bibm/assets/images/event/08.jpeg')}}" alt="Urban photography">
                            </div>
                        </a>
                    </div>
                    <div class="photo-item small-square">
                        <a href="#">
                            <div class="campus__single--item--thumb">
                                <img src="{{asset('bibm/assets/images/event/09.jpg')}}" alt="Travel photography">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- shape area -->
        <div class="rts__shape">
            <img src="{{asset('bibm/assets/images/icon/note_khata.svg')}}" class="rts__shape--1" alt="">
            <img src="{{asset('bibm/assets/images/icon/book.svg')}}" class="rts__shape--2" alt="">
            <img src="{{asset('bibm/assets/images/icon/compas_scale.svg')}}" class="rts__shape--3" alt="">
        </div>
    </section>
    <style>
    /* Photo Grid Styles */
    .photo-grid-container {
        width: 100%;
        padding: 0 15px;
    }

    .photo-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-auto-rows: minmax(200px, auto);
        gap: 15px;
        margin-bottom: 30px;
    }

    .photo-item {
        position: relative;
        overflow: hidden;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        background-color: #fff;
        transition: transform 0.3s ease;
    }

    .photo-item:hover {
        transform: translateY(-5px);
    }

    .campus__single--item--thumb {
        height: 100%;
        width: 100%;
    }

    .campus__single--item--thumb img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .photo-item:hover .campus__single--item--thumb img {
        transform: scale(1.05);
    }

    .campus__single--item--title {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(0, 0, 0, 0.7);
        margin: 0;
        padding: 10px;
        font-size: 16px;
    }

    .campus__single--item--title a {
        color: #fff;
        text-decoration: none;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .campus__single--item--title span {
        opacity: 0;
        transform: translateX(-10px);
        transition: all 0.3s ease;
    }

    .photo-item:hover .campus__single--item--title span {
        opacity: 1;
        transform: translateX(0);
    }

    /* Grid Item Positioning */
    .portrait {
        grid-row: span 2;
    }

    /* For second image in the reference that spans 2 rows */
    .photo-item:nth-child(2) {
        grid-row: span 2;
    }

    /* Responsive Adjustments */
    @media (max-width: 992px) {
        .photo-grid {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media (max-width: 768px) {
        .photo-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 576px) {
        .photo-grid {
            grid-template-columns: 1fr;
        }

        .photo-item {
            grid-row: auto !important;
        }
    }
    </style>
    <!-- campus life end -->
    <!-- Testimonial Start -->
    <div class="rts-testimonial v_2 rt-relative pt--120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-10">
                    <div class="rts-section text-center mb--45">
                        <h2 class="rts-section-title">Message from President</h2>
                    </div>
                </div>
            </div>
            <!-- testimonial content -->
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-10">
                    <div class="rts-testimonial-box">
                        <div class="testimonial-item rt-flex">
                            <div class="testimonial-item-image save-from-hidden">
                                <!-- <img src="assets/images/testimonial/testimonial-big.jpg" alt="testimonial thumbnail"> -->
                                <img src="{{asset('bibm/assets/images/testimonial/testimonial-big.jpg')}}"
                                    alt="testimonial thumbnail">
                                <!-- <a href="https://www.youtube.com/watch?v=7ahgosTZJHg" class="video-play popup-video">
                                    <img src="assets/images/icon/video-btn.svg" alt="video">
                                </a> -->
                            </div>
                            <div class="testimonial-item-content w-630 rt-relative">
                                <div class="testmonial-v2">
                                    <div class="swiper-wrapper">
                                        <!-- single testimonial -->
                                        <div class="swiper-slide">
                                            <div class="single-testimonial">
                                                <div class="rt-between mb--50">
                                                    <div class="rt-icon">
                                                        <img src="{{asset('bibm/assets/images/testimonial/quote.svg')}}"
                                                            alt="quote icon">
                                                    </div>
                                                    <!-- <div class="rt-review">
                                                        <div class="rating-star mb--10">
                                                            <i class="fa-sharp fa-solid fa-star"></i>
                                                            <i class="fa-sharp fa-solid fa-star"></i>
                                                            <i class="fa-sharp fa-solid fa-star"></i>
                                                            <i class="fa-sharp fa-solid fa-star"></i>
                                                            <i class="fa-sharp fa-light fa-star"></i>
                                                        </div>
                                                        <p class="rt-secondary rt-medium --p-s">4.5 ( 112 Review)</p>
                                                    </div> -->
                                                </div>
                                                <p class="testimonial-text">
                                                    Proud to be an alumnus of BIBM and honored to serve as President of
                                                    the MBM Alumni Association (MAS). MAS promotes networking and
                                                    professional growth through events, research, and seminars.

                                                    Stay active, stay connected, and keep your profile updated for the
                                                    latest updates and opportunities.

                                                    Thank you for your support!
                                                </p>
                                                <div class="rt-testimonial-author mt--50">
                                                    <div class="rt-author-meta rt-flex rt-gap-20">


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                     
                                    </div>
                                </div>
                            </div>
                            <!-- rts dot -->
                            <!-- <div class="swiper-pagination"></div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial end -->
    <!-- blog area start -->
    <div class="rts-blog rts-section-padding v_2 no-bg">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-11 col-lg-12">
                    <div class="rts-section rts-border-bottom-1 mb--50 pb--20">
                        <h2 class="rts-section-title">
                            Important News
                        </h2>
                        <p class="rts-section-description">Whether you’re considering a foundation course or an
                            undergraduate academics is a place.</p>

                    </div>
                </div>
            </div>
            <!-- research content -->
            <div class="row g-5">
                <!-- single item -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="rts__research--single">
                        <div class="rts__research--single--thumb">
                            <a href="">
                                <img src="{{asset('bibm/assets/images/research/01.png')}}" alt="">
                            </a>
                        </div>
                        <div class="rts__research--single--meta">
                            <a class="rts__research--single--meta--title" href="researcinvalid linkh">Congratulation Mr.
                                Kamrul Hasan Khan for joining as the Deputy Managing Director of Modhumoti Bank
                                Limited</a>
                            <p class="rts__research--single--meta--excerpt">
                                The Executive Committee of MBM Alumni Society congratulated Mr. Kamrul Hasan Khan for
                                joining as the Deputy Managing Director of Modhumoti Bank Limited recently. Prior to
                                joining Modhumoti Bank, he also worked for MTBL, Prime Bank, HSBC and EBL.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- single item end -->
                <!-- single item -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="rts__research--single">
                        <div class="rts__research--single--thumb">
                            <a href="">
                                <img src="{{asset('bibm/assets/images/research/02.png')}}" alt="">
                            </a>
                        </div>
                        <div class="rts__research--single--meta">
                            <a class="rts__research--single--meta--title" href="research2invalid link">Congratulations
                                Mr. Nazmul Haque Kiron for being elected as the President of Bangladesh Bank Club.</a>
                            <p class="rts__research--single--meta--excerpt">
                                Congratulations Mr. Nazmul Haque Kiron for being elected as the President of Bangladesh
                                Bank Club. Executive Committee of MBM Alumni Society on behalf of the Alumni,
                                Congratulated him today at his office. It is mentionable that Mr. Nazmul is also the
                                Sports &...
                            </p>
                        </div>
                    </div>
                </div>
                <!-- single item end -->
                <!-- single item -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="rts__research--single">
                        <div class="rts__research--single--thumb">
                            <a href="research3invalid link">
                                <img src="{{asset('bibm/assets/images/research/03.png')}}" alt="">
                            </a>
                        </div>
                        <div class="rts__research--single--meta">
                            <a class="rts__research--single--meta--title" href="research3invalid link">Congratulations
                                Mr. Muhommad Badiuzzaman Dider to the post of Director, Bangladesh Bank.</a>
                            <p class="rts__research--single--meta--excerpt">
                                Congratulations to Mr. Nazmul Haque Kiron for being elected as the President of
                                Bangladesh Bank Club. Executive Committee of MBM Alumni Society on behalf of the Alumni,
                                Congratulated him today at his office. It is mentionable that Mr. Nazmul is also the
                                Sports &...
                            </p>
                        </div>
                    </div>
                </div>
                <!-- single item end -->
            </div>
        </div>
    </div>
    <!-- blog area end -->
    <!-- newsletter -->
    <div class="rts-newsletter v_1 rts-cta-background">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="rts-newsletter-box" style="background-image: url(assets/images/newsletter/bg-1.jpg);">
                        <div class="rts-newsletter-box-content">
                            <h4 class="newsletter-title">Don’t Miss Awesome Story From Our Alumni
                            </h4>
                            <div class="newsletter-form w-530">
                                <form action="#">
                                    <input type="email" name="subscription" id="subscription"
                                        placeholder="Enter Your mail" required>
                                    <button type="submit" class="rts-nbg-btn btn-arrow">Subscribe <span><i
                                                class="fa-sharp fa-regular fa-arrow-right"></i></span></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- newsletter end -->
    @include('home.footer')