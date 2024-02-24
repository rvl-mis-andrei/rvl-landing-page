@extends('customer.layout.app')

@section('title', 'RVL Movers Corporation - About Us')

@section('content')

<div role="main" class="main">
    <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-5 p-4" style="background-image: url(customer/page-header/background-2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1 class="fs-5 mb-0 pb-0">About <strong>Us</strong></h1>
                    {{-- <p class="custom-font-secondary custom-font-size-1 mb-0 pb-0 text-white">We are Exelpack Corporation</p> --}}
                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb breadcrumb-light d-block text-md-end">
                        <li><a href="#">Home</a></li>
                        <li class="active">About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section custom-section-shape-background bg-white border-0 m-0 pt-4">
        <div class="container position-relative z-index-3 my-3">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 pe-lg-5 mb-4 mb-lg-0">
                    <a class="lightbox" href="{{ asset('customer/web_img/buildings/building_1.png') }}" data-plugin-options="{'type':'image'}">
                        <img src="{{ asset('customer/web_img/buildings/building_1.png') }}" class="img-fluid box-shadow-5 rounded">'
                    </a>'
                </div>
                <div class="col-lg-6">
                    <h2 class="text-color-primary font-weight-medium positive-ls-3 text-4 mb-0">{{ env('APP_WEBSITE') }}</h2>
                    <h3 class="font-weight-bold text-transform-none text-9 line-height-2 mb-3">Company Overview</h3>
                    <p class="mb-3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        <br><br>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>

                    {{-- <div class="row align-items-center pb-2 mb-4 mb-lg-1 mb-xl-4">
                        <div class="col-5">
                            <div class="d-flex">
                                <img width="63" height="63" src="{{ asset('customer/icons/label.svg') }}" alt="" data-icon="" data-plugin-options="{'onlySVG': true, 'extraClass': 'd-lg-none d-xl-block'}" class="d-lg-none d-xl-block" style="opacity: 1; width: 63px;">
                                <span class="text-3 font-weight-bold text-color-dark pt-2 ms-2">
                                    <strong class="d-block font-weight-bold text-9 mb-2">240+</strong>
                                    Satisfied Clients
                                </span>
                            </div>
                        </div>
                        <div class="col-7">
                            <blockquote class="custom-blockquote-style-1 m-0 pt-1 pb-0">
                                <p class="mb-0">
                                    <div class="row g-0">
                                        <div class="col-12 px-4">
                                            <img class="img-fluid" src="{{ asset('customer/logo/certification.png') }}" alt="">
                                        </div>
                                    </div>

                                </p>
                            </blockquote>
                        </div>
                    </div> --}}
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-xl-7">
                            <div class="row flex-xl-nowrap align-items-center mb-4 mb-lg-0">
                                <div class="col-sm-auto mb-4 mb-sm-0">
                                    <div class="d-flex appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1000" style="animation-delay: 1000ms;">
                                        <img width="63" height="63" src="{{ asset('customer/icons/label.svg') }}" alt="" data-icon="" data-plugin-options="{'onlySVG': true, 'extraClass': 'd-lg-none d-xl-block'}" class="d-lg-none d-xl-block" style="opacity: 1; width: 63px;">
                                        <span class="text-3 font-weight-bold text-color-dark pt-2 ms-3">
                                            <strong class="d-block font-weight-bold text-10 mb-0">240+</strong>
                                            Satisfied Clients
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-7 col-md-12">
                                    <blockquote class="custom-blockquote-style-1 m-0 pt-1 pb-2 px-2 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1200" style="animation-delay: 1200ms;">
                                        <p class="mb-0">“Committing to what we can deliver, Delivering to what we have committed”</p>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section section class="section custom-section-shape-background custom-section-shape-background-reverse border-0 m-0">
        <div class="container position-relative z-index-3 my-5">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 order-2 order-lg-1">
                    <h2 class="text-color-primary font-weight-medium positive-ls-3 text-4 mb-0"></h2>
                    <h3 class="font-weight-bold text-transform-none text-9 line-height-2 mb-3">Our Mission</h3>
                    <p class="mb-3">
                        • To provide innovative, practical and top quality trucking services that offers our customers a competitive advantage. <br>
                        • We are dedicated to the growth of our personnel and their wellbeing so they may achieve exceptional service.<br>
                        • We will strive to go the extra mile, setting the highest standards to meet and exceed our customer’s transportation demands.<br>
                    </p>

                    <h3 class="font-weight-bold text-transform-none text-9 line-height-2 mb-3">Our Vision</h3>
                    <p class="mb-3">
                        • To become the preferred and leading Logistics Service Provider in the country.<br>
                        • To be able to provide fast, efficient, reliable and cost
                        saving services of all types of cargo-related needs to
                        clients nationwide.
                    </p>

                </div>
                <div class="col-lg-6 order-1 order-lg-2 ps-lg-5 mb-4 mb-lg-0">
                    <img src="{{ asset('customer/web_img/buildings/building_2.png') }}" class="img-fluid box-shadow-3">
                </div>
            </div>
        </div>
    </section>
    {{-- <section section class="section custom-section-shape-background bg-white custom-section-shape-background-reverse border-0 m-0">
        <div class="container position-relative z-index-3 my-5">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 order-2 order-lg-2 ">
                    <h2 class="text-color-primary font-weight-medium positive-ls-3 text-4 mb-0"></h2>
                    <h3 class="font-weight-bold text-transform-none text-9 line-height-2 mb-3">Our Core Values</h3>
                    <p class="mb-3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
                <div class="col-lg-6 order-1 order-lg-1 ps-lg-0 mb-4 mb-lg-0">
                    <img src="{{ asset('customer/web_img/buildings/building_3.png') }}" class="img-fluid box-shadow-3">
                </div>
            </div>
        </div>
    </section> --}}
    <section class="page-header bg-white page-header-modern page-header-md mb-0 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-dark font-weight-bold text-8">Company Timeline</h1>
                    <span class="sub-title text-dark">Safe and Quality Trucking Services</span>
                </div>
            </div>
        </div>
    </section>
    <div class="container py-4">

        <div class="row">
            <div class="col">
                <div class="blog-posts">

                    <section class="timeline">
                        <div class="timeline-body">
                            <div class="timeline-date">
                                <h3 class="text-primary font-weight-bold">January 2023</h3>
                            </div>

                            <article class="timeline-box left post post-medium">
                                <div class="timeline-box-arrow"></div>
                                <div class="p-2">
                                    <div class="row mb-2">

                                        <div class="col">
                                            <div class="post-image">
                                                <a href="blog-post.html">
                                                    <img src="img/blog/wide/blog-11.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">

                                            <div class="post-content">
                                                <h2 class="font-weight-semibold text-5 line-height-4 mt-2 mb-2"><a href="blog-post.html">This is a stardard post with preview image</a></h2>
                                                <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="post-meta">
                                                <span><i class="far fa-calendar-alt"></i> January 10, 2023 </span><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="post-meta">
                                                <span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span>
                                                <span><i class="far fa-folder"></i> <a href="#">Lifestyle</a>, <a href="#">Design</a> </span>
                                                <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <a href="blog-post.html" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="timeline-box right post post-medium">
                                <div class="timeline-box-arrow"></div>
                                <div class="p-2">
                                    <div class="row mb-2">

                                        <div class="col">
                                            <div class="post-image">
                                                <div class="owl-carousel owl-theme show-nav-hover dots-inside nav-inside nav-style-1 nav-light mb-0" data-plugin-options="{'items': 1, 'margin': 10, 'loop': false, 'nav': true, 'dots': true}">
                                                    <div>
                                                        <div class="img-thumbnail border-0 p-0 d-block">
                                                            <img class="img-fluid border-radius-0" src="img/blog/wide/blog-24.jpg" alt="">
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="img-thumbnail border-0 p-0 d-block">
                                                            <img class="img-fluid border-radius-0" src="img/blog/wide/blog-20.jpg" alt="">
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="img-thumbnail border-0 p-0 d-block">
                                                            <img class="img-fluid border-radius-0" src="img/blog/wide/blog-21.jpg" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">

                                            <div class="post-content">
                                                <h2 class="font-weight-semibold text-5 line-height-4 mt-2 mb-2"><a href="blog-post.html">This is a stardard slider gallery post</a></h2>
                                                <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="post-meta">
                                                <span><i class="far fa-calendar-alt"></i> January 9, 2023 </span><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="post-meta">
                                                <span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span>
                                                <span><i class="far fa-folder"></i> <a href="#">Lifestyle</a>, <a href="#">Design</a> </span>
                                                <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <a href="blog-post.html" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="timeline-box left post post-medium">
                                <div class="timeline-box-arrow"></div>
                                <div class="p-2">
                                    <div class="row mb-2">
                                        <div class="col">
                                            <div class="post-image">
                                                <div class="lightbox" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}, 'mainClass': 'mfp-with-zoom', 'zoom': {'enabled': true, 'duration': 300}}">
                                                    <div class="row mx-0">
                                                        <div class="col-6 col-md-4 p-0">
                                                            <a href="img/blog/square/blog-13.jpg">
                                                                <span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">
                                                                    <span class="thumb-info-wrapper">
                                                                        <img src="img/blog/square/blog-13.jpg" class="img-fluid" alt="" />
                                                                        <span class="thumb-info-action">
                                                                            <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span>
                                                                        </span>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="col-6 col-md-4 p-0">
                                                            <a href="img/blog/square/blog-16.jpg">
                                                                <span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">
                                                                    <span class="thumb-info-wrapper">
                                                                        <img src="img/blog/square/blog-16.jpg" class="img-fluid" alt="" />
                                                                        <span class="thumb-info-action">
                                                                            <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span>
                                                                        </span>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="col-6 col-md-4 p-0">
                                                            <a href="img/blog/square/blog-20.jpg">
                                                                <span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">
                                                                    <span class="thumb-info-wrapper">
                                                                        <img src="img/blog/square/blog-20.jpg" class="img-fluid" alt="" />
                                                                        <span class="thumb-info-action">
                                                                            <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span>
                                                                        </span>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="col-6 col-md-4 p-0">
                                                            <a href="img/blog/square/blog-23.jpg">
                                                                <span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">
                                                                    <span class="thumb-info-wrapper">
                                                                        <img src="img/blog/square/blog-23.jpg" class="img-fluid" alt="" />
                                                                        <span class="thumb-info-action">
                                                                            <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span>
                                                                        </span>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="col-6 col-md-4 p-0">
                                                            <a href="img/blog/square/blog-29.jpg">
                                                                <span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">
                                                                    <span class="thumb-info-wrapper">
                                                                        <img src="img/blog/square/blog-29.jpg" class="img-fluid" alt="" />
                                                                        <span class="thumb-info-action">
                                                                            <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span>
                                                                        </span>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="col-6 col-md-4 p-0">
                                                            <a href="img/blog/square/blog-40.jpg">
                                                                <span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">
                                                                    <span class="thumb-info-wrapper">
                                                                        <img src="img/blog/square/blog-40.jpg" class="img-fluid" alt="" />
                                                                        <span class="thumb-info-action">
                                                                            <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span>
                                                                        </span>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="post-content">
                                                <h2 class="font-weight-semibold text-5 line-height-4 mt-2 mb-2"><a href="blog-post.html">This is a standard image gallery thumbs post</a></h2>
                                                <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="post-meta">
                                                <span><i class="far fa-calendar-alt"></i> January 8, 2023 </span><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="post-meta">
                                                <span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span>
                                                <span><i class="far fa-folder"></i> <a href="#">Lifestyle</a>, <a href="#">Design</a> </span>
                                                <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <a href="blog-post.html" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <div class="timeline-date">
                                <h3 class="text-primary font-weight-bold">November 2023</h3>
                            </div>

                            <article class="timeline-box left post post-medium">
                                <div class="timeline-box-arrow"></div>
                                <div class="p-2">
                                    <div class="row mb-2">

                                        <div class="col">
                                            <div class="post-image">
                                                <div class="ratio ratio-16x9">
                                                    <iframe  src="https://player.vimeo.com/video/45830194?color=ffffff&amp;title=0&amp;byline=0&amp;portrait=0&amp;badge=0" width="640" height="360" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">

                                            <div class="post-content">
                                                <h2 class="font-weight-semibold text-5 line-height-4 mt-2 mb-2"><a href="blog-post.html">This is a standard embedded video post</a></h2>
                                                <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="post-meta">
                                                <span><i class="far fa-calendar-alt"></i> November 10, 2023 </span><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="post-meta">
                                                <span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span>
                                                <span><i class="far fa-folder"></i> <a href="#">Lifestyle</a>, <a href="#">Design</a> </span>
                                                <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <a href="blog-post.html" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="timeline-box right post post-medium">
                                <div class="timeline-box-arrow"></div>
                                <div class="p-2">
                                    <div class="row mb-2">

                                        <div class="col">
                                            <div class="post-image">
                                                <div class="ratio ratio-16x9">
                                                    <video  autoplay="" muted="" loop="" controls="">
                                                        <source src="video/memory-of-a-woman.mp4" type="video/mp4">
                                                    </video>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">

                                            <div class="post-content">
                                                <h2 class="font-weight-semibold text-5 line-height-4 mt-2 mb-2"><a href="blog-post.html">This is a standard HTML5 video post</a></h2>
                                                <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="post-meta">
                                                <span><i class="far fa-calendar-alt"></i> November 9, 2023 </span><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="post-meta">
                                                <span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span>
                                                <span><i class="far fa-folder"></i> <a href="#">Lifestyle</a>, <a href="#">Design</a> </span>
                                                <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <a href="blog-post.html" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <div class="timeline-date">
                                <h3 class="text-primary font-weight-bold">September 2023</h3>
                            </div>

                            <article class="timeline-box left post post-medium">
                                <div class="timeline-box-arrow"></div>
                                <div class="p-2">
                                    <div class="row mb-2">

                                        <div class="col">
                                            <div class="post-image">
                                                <blockquote class="blockquote-primary">
                                                    <p>Pellentesque pellentesque eget tempor tellus. Fusce lacllentesque eget tempor tellus ellentesque pelleinia tempor malesuada. Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
                                                    <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">

                                            <div class="post-content">
                                                <h2 class="font-weight-semibold text-5 line-height-4 mt-2 mb-2"><a href="blog-post.html">This is a standard blockquote post</a></h2>
                                                <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="post-meta">
                                                <span><i class="far fa-calendar-alt"></i> September 10, 2023 </span><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="post-meta">
                                                <span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span>
                                                <span><i class="far fa-folder"></i> <a href="#">Lifestyle</a>, <a href="#">Design</a> </span>
                                                <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <a href="blog-post.html" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="timeline-box right post post-medium">
                                <div class="timeline-box-arrow"></div>
                                <div class="p-2">
                                    <div class="row mb-2">

                                        <div class="col">
                                            <div class="post-image">
                                                <a href="http://www.themeforest.net/" class="d-block btn btn-primary btn-outline border-0 rounded-0 font-weight-bold text-center text-6 p-5" target="_blank">PORTO ON<br> THEMEFOREST</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">

                                            <div class="post-content">
                                                <h2 class="font-weight-semibold text-5 line-height-4 mt-2 mb-2"><a href="blog-post.html">This is a standard link post</a></h2>
                                                <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="post-meta">
                                                <span><i class="far fa-calendar-alt"></i> September 9, 2023 </span><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="post-meta">
                                                <span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span>
                                                <span><i class="far fa-folder"></i> <a href="#">Lifestyle</a>, <a href="#">Design</a> </span>
                                                <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <a href="blog-post.html" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="timeline-box left post post-medium">
                                <div class="timeline-box-arrow"></div>
                                <div class="p-2">
                                    <div class="row mb-2">

                                        <div class="col">
                                            <div class="post-image">
                                                <div class="ratio ratio-soundcloud ratio-16x9">
                                                    <iframe  src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/341546259&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true"></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">

                                            <div class="post-content">
                                                <h2 class="font-weight-semibold text-5 line-height-4 mt-2 mb-2"><a href="blog-post.html">This is a standard audio embedded post</a></h2>
                                                <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="post-meta">
                                                <span><i class="far fa-calendar-alt"></i> September 8, 2023 </span><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="post-meta">
                                                <span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span>
                                                <span><i class="far fa-folder"></i> <a href="#">Lifestyle</a>, <a href="#">Design</a> </span>
                                                <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <a href="blog-post.html" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
{{-- 
                            <div class="timeline-date">
                                <h3 class="text-primary font-weight-bold"><a href="#">Load More...</a></h3>
                            </div> --}}

                        </div>

                    </section>

                </div>
            </div>

        </div>

    </div>

    <section section class="section section-footer mb-0  pt-5 pb-1">
        <div class="container-fluid">
            <div class="row text-center pt-0 mt-0 pb-3">
                <div class="col">
                    <h2 class="custom-highlight-text-1 d-inline-block line-height-5 text-4 positive-ls-3 font-weight-medium text-color-primary mb-2">
                        WHO ARE WITH US
                    </h2>
                    <h2 class="word-rotator slide font-weight-bold text-8 mb-2">
                        <span>Our</span>
                        <span class="word-rotator-words" style="width: 118.609px;">
                            <b class="is-hidden">Valued</b>
                            <b class="is-visible">Amazing</b>
                        </span>
                        <span>Clients</span>
                    </h2>
                    <h4 class="text-muted lead tall text-4">Client Satisfaction Based On Our Survey.</h4>
                </div>
            </div>
            <div class="row pb-5">
                <div class="col">

                    <div class="owl-carousel owl-theme mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 5}, '992': {'items': 7}, '1200': {'items': 7}}, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false}">
                        <div class="text-center">
                            <img class="d-inline-block img-fluid" src="{{ asset('customer/logos/logo-8.png') }}" alt="" style="max-width: 90px;" />
                        </div>
                        <div class="text-center">
                            <img class="d-inline-block img-fluid" src="{{ asset('customer/logos/logo-9.png') }}" alt="" style="max-width: 140px;" />
                        </div>
                        <div class="text-center">
                            <img class="d-inline-block img-fluid" src="{{ asset('customer/logos/logo-10.png') }}" alt="" style="max-width: 140px;" />
                        </div>
                        <div class="text-center">
                            <img class="d-inline-block img-fluid" src="{{ asset('customer/logos/logo-11.png') }}" alt="" style="max-width: 140px;" />
                        </div>
                        <div class="text-center">
                            <img class="d-inline-block img-fluid" src="{{ asset('customer/logos/logo-12.png') }}" alt="" style="max-width: 100px;" />
                        </div>
                        <div class="text-center">
                            <img class="d-inline-block img-fluid" src="{{ asset('customer/logos/logo-13.png') }}" alt="" style="max-width: 100px;" />
                        </div>
                        <div class="text-center">
                            <img class="d-inline-block img-fluid" src="{{ asset('customer/logos/logo-14.png') }}" alt="" style="max-width: 140px;" />
                        </div>
                        <div class="text-center">
                            <img class="d-inline-block img-fluid" src="{{ asset('customer/logos/logo-15.png') }}" alt="" style="max-width: 110px;" />
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="section section-footer border-1 bg-white pt-0 mt-0">
        <div class="container pt-4 pb-5">
            <div class="row py-5">
                <div class="col-lg-6">
                    <h4 class="text-primary text-3 font-weight-bold mb-2">FREQUENTLY ASKED QUESTIONS</h4>
                    <h3 class="mb-3 font-weight-semibold">Learn More About Us</h3>
                    <div class="custom-divider divider divider-primary divider-small my-3 ">
                        <hr class="my-0 appear-animation animated customLineProgressAnim appear-animation-visible" data-appear-animation="customLineProgressAnim" data-appear-animation-delay="700" style="animation-delay: 700ms;">
                    </div>
                    <p class="mb-4 pb-2">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis ultrices non. Cras a elit sit amet leo acun volutpat. Suspendisse hendrerit vehicula leo, vel efficitur fel.</p>

                    <p class="mb-4 pb-2">Eo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis ultrices non. Cras a elit sit amet leo acun volutpat. Suspendisse hendrerit vehicula.</p>

                    <div class="hstack gap-4 pt-3">
                        <div>
                            <a href="#" class="btn btn-modern btn-primary font-weight-bold border-0 py-3 px-5 btn-arrow-effect-1 ws-nowrap">CONTACT US <i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                        <div class="vr"></div>
                        <div>
                            <a href="tel:0123456789" class="d-flex align-items-center text-decoration-none text-color-dark text-color-hover-primary font-weight-semibold ms-1">
                                <i class="icon icon-phone text-color-primary text-4-5 me-2"></i>
                                800-123-4567
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <div class="accordion accordion-modern-status accordion-modern-status-primary" id="accordion100">
                        <div class="card card-default">
                            <div class="card-header" id="collapse100HeadingOne">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-dark font-weight-bold border-radius text-3-5 collapsed" data-bs-toggle="collapse" data-bs-target="#collapse100One" aria-expanded="false" aria-controls="collapse100One">
                                        1 - Tristique sit amet condim vel?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse100One" class="collapse" aria-labelledby="collapse100HeadingOne" data-bs-parent="#accordion100" style="">
                                <div class="card-body">
                                    <p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-default">
                            <div class="card-header" id="collapse100HeadingTwo">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-dark font-weight-bold border-radius text-3-5 collapsed" data-bs-toggle="collapse" data-bs-target="#collapse100Two" aria-expanded="false" aria-controls="collapse100Two">
                                        2 - Cras a elit sit amet leo accumsan?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse100Two" class="collapse" aria-labelledby="collapse100HeadingTwo" data-bs-parent="#accordion100" style="">
                                <div class="card-body">
                                    <p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-default">
                            <div class="card-header" id="collapse100HeadingThree">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-dark font-weight-bold border-radius text-3-5 collapsed" data-bs-toggle="collapse" data-bs-target="#collapse100Three" aria-expanded="false" aria-controls="collapse100Three">
                                        3 - Hel officitur felis ultricis nan?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse100Three" class="collapse" aria-labelledby="collapse100HeadingThree" data-bs-parent="#accordion100" style="">
                                <div class="card-body">
                                    <p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-default">
                            <div class="card-header" id="collapse100HeadingFour">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-dark font-weight-bold border-radius text-3-5 collapsed" data-bs-toggle="collapse" data-bs-target="#collapse100Four" aria-expanded="false" aria-controls="collapse100Four">
                                        4 - Wuspaisse hendreirit vehicula leo?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse100Four" class="collapse" aria-labelledby="collapse100HeadingFour" data-bs-parent="#accordion100" style="">
                                <div class="card-body">
                                    <p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-default">
                            <div class="card-header" id="collapse100HeadingFive">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-dark font-weight-bold border-radius text-3-5 collapsed" data-bs-toggle="collapse" data-bs-target="#collapse100Five" aria-expanded="false" aria-controls="collapse100Five">
                                        5 - Lintegers aliquet ullamcorper dollor, quis sollic tudin?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse100Five" class="collapse" aria-labelledby="collapse1HeadingFive" data-bs-parent="#accordion100" style="">
                                <div class="card-body">
                                    <p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

@endsection
