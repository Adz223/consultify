@extends('website.layout.master')
@section('content')
    <!--Main Slider Start-->
    <section class="main-slider main-slider-three">
        <div class="swiper-container thm-swiper__slider"
            data-swiper-options='{"slidesPerView": 1, "loop": true,   "effect": "fade",
        "pagination": {
            "el": "#main-slider-pagination",
            "type": "bullets",
            "clickable": true
        },
        "navigation": {
            "nextEl": "#main-slider__swiper-button-next",
            "prevEl": "#main-slider__swiper-button-prev"
        },
        "autoplay": {
            "delay": 5000
        }}'>
            <div class="swiper-wrapper">
                {{-- <div class="container">
                    <div class="row">
                        <div class="col-xl-7">
                            <div class="main-slider__content">
                                <h2>Smart & Flawless <br> Consulting Agency</h2>
                                <p>Veniam quis nostrud exercitation llamco laboris nis aliquip conseqa <br> rure
                                    dolorn repreh derit luptate velit excepteur.</p>
                                <div class="main-slider-three__bottom">
                                    <a href="about.html" class="thm-btn main-slider-three__btn">free
                                        consultation</a>
                                    <div class="main-slider-three__video">
                                        <div class="main-slider-three__video-link">
                                            <a href="" class="video-popup">
                                                <div class="main-slider-three__video-icon">
                                                    <span class="fas fa-play"></span>
                                                </div>
                                            </a>
                                        </div>
                                        <h5 class="main-slider-three__video-text">Watch Video</h5>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url({{ asset('./web2assets/images/Home3.jpg') }});">
                    </div>
                    <div class="main-slider-three-shape"><img
                            src="{{ asset('./web2assets/images/shapes/main-slider-three-shape.png') }}" alt=""></div>
                    <!-- /.image-layer -->
                    {{-- <div class="container">
                        <div class="row">
                            <div class="col-xl-7">
                                <div class="main-slider__content">
                                    <h2>Smart & Flawless <br> Consulting Agency</h2>
                                    <p>Veniam quis nostrud exercitation llamco laboris nis aliquip conseqa <br> rure
                                        dolorn repreh derit luptate velit excepteur.</p>
                                    <div class="main-slider-three__bottom">
                                        <a href="about.html" class="thm-btn main-slider-three__btn">free
                                            consultation</a>
                                        <div class="main-slider-three__video">
                                            <div class="main-slider-three__video-link">
                                                <a href="" class="video-popup">
                                                    <div class="main-slider-three__video-icon">
                                                        <span class="fas fa-play"></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <h5 class="main-slider-three__video-text">Watch Video</h5>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url({{asset('./web2assets/images/Home3.jpg')}});">
                    </div>
                    <div class="main-slider-three-shape"><img src="{{('./web2assets/images/shapes/main-slider-three-shape.png')}}"
                            alt=""></div>
                    <!-- /.image-layer -->
                    {{-- <div class="container">
                        <div class="row">
                            <div class="col-xl-7">
                                <div class="main-slider__content">
                                    <h2>Smart & Flawless <br> Consulting Agency</h2>
                                    <p>Veniam quis nostrud exercitation llamco laboris nis aliquip conseqa <br> rure
                                        dolorn repreh derit luptate velit excepteur.</p>
                                    <div class="main-slider-three__bottom">
                                        <a href="about.html" class="thm-btn main-slider-three__btn">free
                                            consultation</a>
                                        <div class="main-slider-three__video">
                                            <div class="main-slider-three__video-link">
                                                <a href="" class="video-popup">
                                                    <div class="main-slider-three__video-icon">
                                                        <span class="fas fa-play"></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <h5 class="main-slider-three__video-text">Watch Video</h5>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url({{asset('./web2assets/images/Home3.jpg')}});">
                    </div>
                    <div class="main-slider-three-shape"><img src="{{asset('./web2assets/images/shapes/main-slider-three-shape.png')}})"
                            alt=""></div>
                    <!-- /.image-layer -->
                    {{-- <div class="container">
                        <div class="row">
                            <div class="col-xl-7">
                                <div class="main-slider__content">
                                    <h2>Smart & Flawless <br> Consulting Agency</h2>
                                    <p>Veniam quis nostrud exercitation llamco laboris nis aliquip conseqa <br> rure
                                        dolorn repreh derit luptate velit excepteur.</p>
                                    <div class="main-slider-three__bottom">
                                        <a href="about.html" class="thm-btn main-slider-three__btn">free
                                            consultation</a>
                                        <div class="main-slider-three__video">
                                            <div class="main-slider-three__video-link">
                                                <a href="" class="video-popup">
                                                    <div class="main-slider-three__video-icon">
                                                        <span class="fas fa-play"></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <h5 class="main-slider-three__video-text">Watch Video</h5>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            <!-- If we need navigation buttons -->
            <div class="main-slider__nav">
                <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                    <i class="icon-right-arrow icon-left-arrow"></i>
                </div>
                <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                    <i class="icon-right-arrow"></i>
                </div>
            </div>
        </div>
    </section>
    <!--Main Slider End-->

    <!--Brand One Start-->
    <section class="brand-three">
        <div class="container">
            <div class="thm-swiper__slider swiper-container"
                data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                    "0": {
                        "spaceBetween": 30,
                        "slidesPerView": 2
                    },
                    "375": {
                        "spaceBetween": 30,
                        "slidesPerView": 2
                    },
                    "575": {
                        "spaceBetween": 30,
                        "slidesPerView": 3
                    },
                    "767": {
                        "spaceBetween": 50,
                        "slidesPerView": 4
                    },
                    "991": {
                        "spaceBetween": 50,
                        "slidesPerView": 5
                    },
                    "1199": {
                        "spaceBetween": 100,
                        "slidesPerView": 5
                    }
                }}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{asset('./web2assets/images/brand/brand-3-1.png')}})" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('./web2assets/images/brand/brand-3-2.png')}})" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('./web2assets/images/brand/brand-3-3.png')}})" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('./web2assets/images/brand/brand-3-4.png')}})" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('./web2assets/images/brand/brand-3-5.png')}})" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('./web2assets/images/brand/brand-3-1.png')}})" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('./web2assets/images/brand/brand-3-2.png')}})" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('./web2assets/images/brand/brand-3-3.png')}})" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('./web2assets/images/brand/brand-3-4.png')}})" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('./web2assets/images/brand/brand-3-5.png')}})" alt="">
                    </div><!-- /.swiper-slide -->
                </div>
            </div>
        </div>
    </section>
    <!--Brand One End-->

    <!--Real World Start-->
    <section class="real-world">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <div class="real-world__left">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Welcome</span>
                            <h2 class="section-title__title">The Real World Experience</h2>
                        </div>
                        <p class="real-world__left-text">The right consultation on right time can keep your
                            business
                            to keep growing.</p>
                        <ul class="list-unstyled real-world__points">
                            <li>
                                <div class="icon">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="text">
                                    <p>Nsectetur cing elit.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="text">
                                    <p>Suspe ndisse suscip sagits leo.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="text">
                                    <p> Entum estibulum dignis posue.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="text">
                                    <p>You are going to use a pasge.</p>
                                </div>
                            </li>
                        </ul>
                        <div class="real-world__progress">
                            <div class="real-world__progress-single">
                                <h4 class="real-world__progress-title">Consulting</h4>
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="77%">
                                        <div class="count-text">77%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="real-world__middle">
                        <div class="real-world__img">
                            <img src="{{asset('./web2assets/images/resources/real-world-img-1.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="real-world__counter-box">
                        <ul class="list-unstyled real-world__counter">
                            <li class="real-world__counter-single">
                                <div class="real-world__counter-content">
                                    <h3 class="odometer" data-count="300">0</h3>
                                    <p class="real-world__counter-text">Completed Cases</p>
                                </div>
                                <div class="real-world__counter-icon">
                                    <span class="icon-help"></span>
                                </div>
                            </li>
                            <li class="real-world__counter-single">
                                <div class="real-world__counter-content">
                                    <h3 class="odometer" data-count="960">0</h3>
                                    <p class="real-world__counter-text">Happy Customers</p>
                                </div>
                                <div class="real-world__counter-icon">
                                    <span class="icon-customer-review"></span>
                                </div>
                            </li>
                            <li class="real-world__counter-single">
                                <div class="real-world__counter-content">
                                    <h3 class="odometer" data-count="888">0</h3>
                                    <p class="real-world__counter-text">Expert Consultant</p>
                                </div>
                                <div class="real-world__counter-icon">
                                    <span class="icon-consultant"></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Real World End-->

    <!--services Two Start-->
    <section class="services-two">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">What we’re doing</span>
                <h2 class="section-title__title">Services We Offer</h2>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <!--services Two Single-->
                    <div class="services-two__single">
                        <div class="services-two_icon">
                            <span class="icon-creative"></span>
                        </div>
                        <h3 class="services-two__title"><a href="audit-marketing.html">Employee <br>
                                Resourcing</a>
                        </h3>
                        <p class="services-two__text">Lorem ipsum is are many variations of pass of majority.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <!--services Two Single-->
                    <div class="services-two__single">
                        <div class="services-two_icon">
                            <span class="icon-analysis"></span>
                        </div>
                        <h3 class="services-two__title"><a href="audit-marketing.html">Audit <br> Marketing</a>
                        </h3>
                        <p class="services-two__text">Lorem ipsum is are many variations of pass of majority.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <!--services Two Single-->
                    <div class="services-two__single">
                        <div class="services-two_icon">
                            <span class="icon-business"></span>
                        </div>
                        <h3 class="services-two__title"><a href="banking-advising.html">Banking <br> Advising</a>
                        </h3>
                        <p class="services-two__text">Lorem ipsum is are many variations of pass of majority.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <!--services Two Single-->
                    <div class="services-two__single">
                        <div class="services-two_icon">
                            <span class="icon-global"></span>
                        </div>
                        <h3 class="services-two__title"><a href="marketing-rules.html">Marketing <br> Rules</a>
                        </h3>
                        <p class="services-two__text">Lorem ipsum is are many variations of pass of majority.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--services Two End-->

    <!--Our Mission Start-->
    <section class="our-mission" id="our-mission">
        <div class="our-mission-bg-box">
            <div class="our-mission-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                style="background-image: url({{asset('./web2assets/images/backgrounds/our-mission-bg.jpg')}})"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="our-mission__inner">
                        <h2 class="our-mission__title">Our Mission is to Protect your <br> <span>Business</span> &
                            Much More</h2>
                        <a href="about.html" class="thm-btn our-mission__btn">free consultation</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Our Mission End-->

    <!--We Improve Start-->
    <section class="we-improve clearfix">
        <div class="we-improve-bg" style="background-image: url({{asset('./web2assets/images/backgrounds/we-improve-bg.jpg')}})">
        </div>
        <div class="container">
            <div class="we-improve__inner">
                <div class="section-title text-left">
                    <span class="section-title__tagline">experts & Creatives</span>
                    <h2 class="section-title__title">We Improve Business</h2>
                </div>
                <p class="we-improve__text">Alteration in some form, lipsum is simply free text by injected humou
                    or
                    randomised words even believable.</p>
                <div class="we-improve__funded">
                    <div class="we-improve__funded-img">
                        <img src="{{asset('./web2assets/images/resources/we-improve-funded-img.jpg')}})" alt="">
                    </div>
                    <p class="we-improve__funded-content">Our Consulting & Finance Company Funded in
                        <span>1987</span>
                    </p>
                </div>
                <ul class="list-unstyled we-improve__points">
                    <li>
                        <div class="icon">
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="text">
                            <p>Nsectetur cing elit.</p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="text">
                            <p>Suspe ndisse suscip leo.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--We Improve End-->

    <!--Team One Start-->
    <section class="team-one">
        <div class="team-one__container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Professional Consultant</span>
                <h2 class="section-title__title">Meet Our Experts</h2>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <!--Team One Single-->
                    <div class="team-one__single">
                        <div class="team-one__img">
                            <img src="{{asset('./web2assets/images/team/team-one-img-1.jpg')}})" alt="">
                            <ul class="list-unstyled team-one__social">
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-one__content">
                            <h4 class="team-one__name">Sarah Albert</h4>
                            <p class="team-one__title">Consultant</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <!--Team One Single-->
                    <div class="team-one__single">
                        <div class="team-one__img">
                            <img src="{{asset('./web2assets/images/team/team-one-img-2.jpg')}})" alt="">
                            <ul class="list-unstyled team-one__social">
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-one__content">
                            <h4 class="team-one__name">Mike Hardson</h4>
                            <p class="team-one__title">Manager</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <!--Team One Single-->
                    <div class="team-one__single">
                        <div class="team-one__img">
                            <img src="{{asset('./web2assets/images/team/team-one-img-3.jpg')}})" alt="">
                            <ul class="list-unstyled team-one__social">
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-one__content">
                            <h4 class="team-one__name">Jessica Brown</h4>
                            <p class="team-one__title">CO - Founder</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <!--Team One Single-->
                    <div class="team-one__single">
                        <div class="team-one__img">
                            <img src="{{asset('./web2assets/images/team/team-one-img-4.jpg')}})" alt="">
                            <ul class="list-unstyled team-one__social">
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-one__content">
                            <h4 class="team-one__name">David Cooper</h4>
                            <p class="team-one__title">Consultant</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Team One End-->

    <!--Feature Two Start-->
    <section class="feature-three">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <!--Feature Two Single-->
                    <div class="feature-three__single">
                        <div class="feature-three__icon">
                            <span class="icon-help"></span>
                        </div>
                        <div class="feature-three__content">
                            <h4 class="feature-three__title">Get Professional Advice</h4>
                            <p class="feature-three__text">There are many variations of available but the majority
                                have suffered alteration.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <!--Feature Two Single-->
                    <div class="feature-three__single">
                        <div class="feature-three__icon">
                            <span class="icon-consultant"></span>
                        </div>
                        <div class="feature-three__content">
                            <h4 class="feature-three__title">Trusted & Professional</h4>
                            <p class="feature-three__text">There are many variations of available but the majority
                                have suffered alteration.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Feature Two End-->

    <!--News Three Start-->
    <section class="news-three">
        <div class="news-three-bg"></div>
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">direct from the blog</span>
                <h2 class="section-title__title">News & Articles</h2>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <!--News One Single-->
                    <div class="news-one__single">
                        <div class="news-one__img">
                            <img src="{{asset('./web2assets/images/blog/news-one-img-1.jpg')}}" alt="">
                            <a href="news-details.html">
                                <span class="news-one__plus"></span>
                            </a>
                            <div class="news-one__date">
                                <p>20 oct</p>
                            </div>
                        </div>
                        <div class="news-one__content">
                            <ul class="list-unstyled news-one__meta">
                                <li><a href="news-details.html"><i class="far fa-user-circle"></i> Admin</a></li>
                                <li><a href="news-details.html"><i class="far fa-comments"></i> 2 Comments</a>
                                </li>
                            </ul>
                            <h3 class="news-one__title">
                                <a href="news-details.html">Long Term Advice to Grow Businesses</a>
                            </h3>
                            <p class="news-one__text">Aellentesque porttitor lacus quis enim varius sed efficitur
                                turpis gilla sed sit amet.</p>
                            <div class="news-one__bottom">
                                <a href="news-details.html" class="news-one__btn">Read More</a>
                                <a href="news-details.html" class="news-one__arrow"><span
                                        class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <!--News One Single-->
                    <div class="news-one__single">
                        <div class="news-one__img">
                            <img src="{{asset('./web2assets/images/blog/news-one-img-2.jpg')}}" alt="">
                            <a href="news-details.html">
                                <span class="news-one__plus"></span>
                            </a>
                            <div class="news-one__date">
                                <p>20 oct</p>
                            </div>
                        </div>
                        <div class="news-one__content">
                            <ul class="list-unstyled news-one__meta">
                                <li><a href="news-details.html"><i class="far fa-user-circle"></i> Admin</a></li>
                                <li><a href="news-details.html"><i class="far fa-comments"></i> 2 Comments</a>
                                </li>
                            </ul>
                            <h3 class="news-one__title">
                                <a href="news-details.html">DevOps. Nano technology along the</a>
                            </h3>
                            <p class="news-one__text">Aellentesque porttitor lacus quis enim varius sed efficitur
                                turpis gilla sed sit amet.</p>
                            <div class="news-one__bottom">
                                <a href="news-details.html" class="news-one__btn">Read More</a>
                                <a href="news-details.html" class="news-one__arrow"><span
                                        class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                    <!--News One Single-->
                    <div class="news-one__single">
                        <div class="news-one__img">
                            <img src="{{asset('./web2assets/images/blog/news-one-img-3.jpg')}}" alt="">
                            <a href="news-details.html">
                                <span class="news-one__plus"></span>
                            </a>
                            <div class="news-one__date">
                                <p>20 oct</p>
                            </div>
                        </div>
                        <div class="news-one__content">
                            <ul class="list-unstyled news-one__meta">
                                <li><a href="news-details.html"><i class="far fa-user-circle"></i> Admin</a></li>
                                <li><a href="news-details.html"><i class="far fa-comments"></i> 2 Comments</a>
                                </li>
                            </ul>
                            <h3 class="news-one__title">
                                <a href="news-details.html">Capitalize on low hanging fruit to</a>
                            </h3>
                            <p class="news-one__text">Aellentesque porttitor lacus quis enim varius sed efficitur
                                turpis gilla sed sit amet.</p>
                            <div class="news-one__bottom">
                                <a href="news-details.html" class="news-one__btn">Read More</a>
                                <a href="news-details.html" class="news-one__arrow"><span
                                        class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--News Three End-->

    <!--Contact One Start-->
    <section class="contact-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="contact-one__left">
                        <div class="section-title text-left">
                            {{-- <span class="section-title__tagline">Contact with us</span>
                            <h2 class="section-title__title">Contact Experts</h2> --}}
                        </div>
                        <p class="contact-one__text">It is a long established fact that a reader will be distracted
                            by <br> the readable content of a page when looking at layout. Many<br> desktop
                            publishing packages and web page editors now use <br> as their default model text.</p>
                        <h2 class="contact-one__founder">Kevin Martin <span>- Co Founder</span></h2>
                        <div class="contact-one__bottom">
                            <div class="contact-one__bottom-img">
                                <img src="{{asset('./web2assets/images/resources/contact-one-bottom-img.jpg')}}" alt="">
                            </div>
                            <ul class="list-unstyled contact-one__bottom-points">
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Nsectetur cing elit.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Suspe susc sagittis leo.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Entum dignissim posuere.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Donec ante vel sncus.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="contact-one__right">
                        <div class="contact-one__form-box">
                            <form action="" class="contact-one__form contact-form-validated"
                                novalidate="novalidate">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="contact-one__input-box">
                                            <input type="text" placeholder="Your Name" name="name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="contact-one__input-box">
                                            <input type="email" placeholder="Email Address" name="email">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="contact-one__input-box">
                                            <input type="text" placeholder="Phone Number" name="phone">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="contact-one__input-box">
                                            <input type="text" placeholder="Subject" name="Subject">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="contact-one__input-box">
                                            <textarea name="message" placeholder="Write a Message"></textarea>
                                        </div>
                                        <button type="submit" class="thm-btn contact-one__btn">send a
                                            message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact One End-->
@endsection