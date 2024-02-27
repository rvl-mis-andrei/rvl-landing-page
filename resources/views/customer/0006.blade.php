@extends('customer.layout.app')

@section('title', env('APP_WEBSITE').' - Activities')

@section('content')
<div role="main" class="main">
    <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-5 p-4" style="background-image: url(customer/page-header/background-2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1 class="fs-5 mb-0 pb-0">Our <strong>Activities</strong></h1>
                    {{-- <p class="custom-font-secondary custom-font-size-1 mb-0 pb-0 text-white">Selection of Packaging Product</p> --}}

                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb breadcrumb-light d-block text-md-end">
                        <li><a href="#">Home</a></li>
                        <li class="active">Activities</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row pb-1">
            <h3 class="font-weight-bold text-3 mt-2 mt-md-0 mb-4">Featured Posts</h3>
            <div class="col-lg-7 mb-4 pb-2">
                <a href="#">
                    <article class="thumb-info thumb-info-no-borders thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
                        <div class="thumb-info-wrapper thumb-info-wrapper-opacity-6">
                            <img src="{{ asset('customer/web_img/generic-2.jpg') }}" class="img-fluid" alt="How To Take Better Concert Pictures in 30 Seconds">
                            <div class="thumb-info-title bg-transparent p-4">
                                <div class="thumb-info-type bg-color-dark px-2 mb-1">Photography</div>
                                <div class="thumb-info-inner mt-1">
                                    <h2 class="font-weight-bold text-color-light line-height-2 text-5 mb-0">How To Take Better Concert Pictures in 30 Seconds</h2>
                                </div>
                                <div class="thumb-info-show-more-content">
                                    <p class="mb-0 text-1 line-height-9 mb-1 mt-2 text-light opacity-5">Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                                </div>
                            </div>
                        </div>
                    </article>
                </a>
            </div>
            <div class="col-lg-5">
                <article class="thumb-info thumb-info-no-zoom bg-transparent border-radius-0 pb-4 mb-2">
                    <div class="row align-items-center pb-1">
                        <div class="col-sm-5">
                            <a href="blog-post.html">
                                <img src="{{ asset('customer/web_img/generic-2.jpg') }}" class="img-fluid border-radius-0" alt="Simple Ways to Have a Pretty Face">
                            </a>
                        </div>
                        <div class="col-sm-7 ps-sm-1">
                            <div class="thumb-info-caption-text">
                                <div class="thumb-info-type text-light text-uppercase d-inline-block bg-color-dark px-2 m-0 mb-1 float-none">
                                    <a href="blog-post.html" class="text-decoration-none text-color-light">Photography</a>
                                </div>
                                <h2 class="d-block line-height-2 text-4 text-dark font-weight-bold mt-1 mb-0">
                                    <a href="blog-post.html" class="text-decoration-none text-color-dark text-color-hover-primary">Simple Ways to Have a Pretty Face</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="thumb-info thumb-info-no-zoom bg-transparent border-radius-0 pb-4 mb-2">
                    <div class="row align-items-center pb-1">
                        <div class="col-sm-5">
                            <a href="blog-post.html">
                                <img src="{{ asset('customer/web_img/generic-2.jpg') }}" class="img-fluid border-radius-0" alt="Ranking the greatest players in basketball">
                            </a>
                        </div>
                        <div class="col-sm-7 ps-sm-1">
                            <div class="thumb-info-caption-text">
                                <div class="thumb-info-type text-light text-uppercase d-inline-block bg-color-dark px-2 m-0 mb-1 float-none">
                                    <a href="blog-post.html" class="text-decoration-none text-color-light">Sports</a>
                                </div>
                                <h2 class="d-block line-height-2 text-4 text-dark font-weight-bold mt-1 mb-0">
                                    <a href="blog-post.html" class="text-decoration-none text-color-dark text-color-hover-primary">Ranking the greatest players in basketball</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="thumb-info thumb-info-no-zoom bg-transparent border-radius-0 pb-4 mb-2">
                    <div class="row align-items-center pb-1">
                        <div class="col-sm-5">
                            <a href="blog-post.html">
                                <img src="{{ asset('customer/web_img/generic-2.jpg') }}" class="img-fluid border-radius-0" alt="4 Ways to Look Cool in Glasses">
                            </a>
                        </div>
                        <div class="col-sm-7 ps-sm-1">
                            <div class="thumb-info-caption-text">
                                <div class="thumb-info-type text-light text-uppercase d-inline-block bg-color-dark px-2 m-0 mb-1 float-none">
                                    <a href="blog-post.html" class="text-decoration-none text-color-light">Lifestyle</a>
                                </div>
                                <h2 class="d-block line-height-2 text-4 text-dark font-weight-bold mt-1 mb-0">
                                    <a href="blog-post.html" class="text-decoration-none text-color-dark text-color-hover-primary">4 Ways to Look Cool in Glasses</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                </article>

            </div>
        </div>
        <section class="section section-no-background border-0 m-0 pb-3">
            <div class="container container-xl-custom">
                <h3 class="font-weight-bold text-3 mb-4 mt-4 mt-md-0">Recent Posts</h3>
                <div class="row pb-1">
                    <div class="col-sm-6 col-lg-4 mb-4 pb-2">
                        <a href="blog-post.html">
                            <article>
                                <div class="thumb-info thumb-info-no-borders thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
                                    <div class="thumb-info-wrapper thumb-info-wrapper-opacity-6">
                                        <img src="{{ asset('customer/web_img/generic-2.jpg') }}" class="img-fluid" alt="How To Take Better Concert Pictures in 30 Seconds">
                                        <div class="thumb-info-title bg-transparent p-4">
                                            <div class="thumb-info-type bg-color-primary px-2 mb-1">Photography</div>
                                            <div class="thumb-info-inner mt-1">
                                                <h2 class="text-color-light line-height-2 text-4 font-weight-bold mb-0">How To Take Better Concert Pictures in 30 Seconds</h2>
                                            </div>
                                            <div class="thumb-info-show-more-content">
                                                <p class="mb-0 text-1 line-height-9 mb-1 mt-2 text-light opacity-5">Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </a>
                    </div>

                    <div class="col-sm-6 col-lg-4 mb-4 pb-2">
                        <a href="blog-post.html">
                            <article>
                                <div class="thumb-info thumb-info-no-borders thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
                                    <div class="thumb-info-wrapper thumb-info-wrapper-opacity-6">
                                        <img src="{{ asset('customer/web_img/generic-2.jpg') }}" class="img-fluid" alt="Gadgets That Make Your Smartphone Even Smarter">
                                        <div class="thumb-info-title bg-transparent p-4">
                                            <div class="thumb-info-type bg-color-primary px-2 mb-1">Gadgets</div>
                                            <div class="thumb-info-inner mt-1">
                                                <h2 class="text-color-light line-height-2 text-4 font-weight-bold mb-0">Gadgets That Make Your Smartphone Even Smarter</h2>
                                            </div>
                                            <div class="thumb-info-show-more-content">
                                                <p class="mb-0 text-1 line-height-9 mb-1 mt-2 text-light opacity-5">Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </a>
                    </div>

                    <div class="col-sm-6 col-lg-4 mb-4 pb-2">
                        <a href="blog-post.html">
                            <article>
                                <div class="thumb-info thumb-info-no-borders thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
                                    <div class="thumb-info-wrapper thumb-info-wrapper-opacity-6">
                                        <img src="{{ asset('customer/web_img/generic-2.jpg') }}" class="img-fluid" alt="20 Top-Rated Tourist Attractions in Manhattan">
                                        <div class="thumb-info-title bg-transparent p-4">
                                            <div class="thumb-info-type bg-color-primary px-2 mb-1">Travel</div>
                                            <div class="thumb-info-inner mt-1">
                                                <h2 class="text-color-light line-height-2 text-4 font-weight-bold mb-0">20 Top-Rated Tourist Attractions in Manhattan</h2>
                                            </div>
                                            <div class="thumb-info-show-more-content">
                                                <p class="mb-0 text-1 line-height-9 mb-1 mt-2 text-light opacity-5">Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </a>
                    </div>

                    <div class="col-sm-6 col-lg-4 mb-4 pb-2">
                        <a href="blog-post.html">
                            <article>
                                <div class="thumb-info thumb-info-no-borders thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
                                    <div class="thumb-info-wrapper thumb-info-wrapper-opacity-6">
                                        <img src="{{ asset('customer/web_img/generic-2.jpg') }}" class="img-fluid" alt="The Best Way to Ride a Motorcycle">
                                        <div class="thumb-info-title bg-transparent p-4">
                                            <div class="thumb-info-type bg-color-primary px-2 mb-1">Lifestyle</div>
                                            <div class="thumb-info-inner mt-1">
                                                <h2 class="text-color-light line-height-2 text-4 font-weight-bold mb-0">The Best Way to Ride a Motorcycle</h2>
                                            </div>
                                            <div class="thumb-info-show-more-content">
                                                <p class="mb-0 text-1 line-height-9 mb-1 mt-2 text-light opacity-5">Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </a>
                    </div>

                    <div class="col-sm-6 col-lg-4 mb-4 pb-2">
                        <a href="blog-post.html">
                            <article>
                                <div class="thumb-info thumb-info-no-borders thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
                                    <div class="thumb-info-wrapper thumb-info-wrapper-opacity-6">
                                        <img src="{{ asset('customer/web_img/generic-2.jpg') }}" class="img-fluid" alt="5 Fun Things to Do at the Beach">
                                        <div class="thumb-info-title bg-transparent p-4">
                                            <div class="thumb-info-type bg-color-primary px-2 mb-1">Travel</div>
                                            <div class="thumb-info-inner mt-1">
                                                <h2 class="text-color-light line-height-2 text-4 font-weight-bold mb-0">5 Fun Things to Do at the Beach</h2>
                                            </div>
                                            <div class="thumb-info-show-more-content">
                                                <p class="mb-0 text-1 line-height-9 mb-1 mt-2 text-light opacity-5">Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </a>
                    </div>

                    <div class="col-sm-6 col-lg-4 mb-4 pb-2">
                        <a href="blog-post.html">
                            <article>
                                <div class="thumb-info thumb-info-no-borders thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
                                    <div class="thumb-info-wrapper thumb-info-wrapper-opacity-6">
                                        <img src="{{ asset('customer/web_img/generic-2.jpg') }}" class="img-fluid" alt="Amazingly Fresh Fruit And Herb Drinks For Summer">
                                        <div class="thumb-info-title bg-transparent p-4">
                                            <div class="thumb-info-type bg-color-primary px-2 mb-1">Recipes</div>
                                            <div class="thumb-info-inner mt-1">
                                                <h2 class="text-color-light line-height-2 text-4 font-weight-bold mb-0">Amazingly Fresh Fruit And Herb Drinks For Summer</h2>
                                            </div>
                                            <div class="thumb-info-show-more-content">
                                                <p class="mb-0 text-1 line-height-9 mb-1 mt-2 text-light opacity-5">Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </a>
                    </div>

                </div>
            </div>
        </section>
    </div>
</div>
@endsection
