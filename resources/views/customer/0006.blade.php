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
                            <img src="{{ asset('customer/web_img/activities/2-22-24/2-22-24-1.jpg') }}" class="img-fluid" alt="RVL Movers Corporation Trainees 1st Batch for the year 2024!">
                            <div class="thumb-info-title bg-transparent p-4">
                                <div class="thumb-info-type bg-color-primary px-2 mb-1">TRAINEES</div>
                                <div class="thumb-info-inner mt-1">
                                    <h2 class="font-weight-bold text-color-light line-height-2 text-5 mb-0">RVLMC Trainees 1st Batch of 2024</h2>
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
                            <a href="javascript:;">
                                <img src="{{ asset('customer/web_img/activities/2-6-24/2-6-24-1.jpg') }}" class="img-fluid border-radius-0" alt=" RVL MOVERS CORP - Christmas Party 2023">
                            </a>
                        </div>
                        <div class="col-sm-7 ps-sm-1">
                            <div class="thumb-info-caption-text">
                                <div class="thumb-info-type text-light text-uppercase d-inline-block bg-color-primary px-2 m-0 mb-1 float-none">
                                    <a href="javascript:;" class="text-decoration-none text-color-light">Christmas Party</a>
                                </div>
                                <h2 class="d-block line-height-2 text-4 text-dark font-weight-bold mt-1 mb-0">
                                    <a href="javascript:;" class="text-decoration-none text-color-dark text-color-hover-primary"> RVLMC - Christmas Party 2023</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="thumb-info thumb-info-no-zoom bg-transparent border-radius-0 pb-4 mb-2">
                    <div class="row align-items-center pb-1">
                        <div class="col-sm-5">
                            <a href="javascript:;">
                                <img src="{{ asset('customer/web_img/activities/10-23-23/10-23-23-1.jpg') }}" class="img-fluid border-radius-0" alt="Ranking the greatest players in basketball">
                            </a>
                        </div>
                        <div class="col-sm-7 ps-sm-1">
                            <div class="thumb-info-caption-text">
                                <div class="thumb-info-type text-light text-uppercase d-inline-block bg-color-primary px-2 m-0 mb-1 float-none">
                                    <a href="javascript:;" class="text-decoration-none text-color-light">TRAINING</a>
                                </div>
                                <h2 class="d-block line-height-2 text-4 text-dark font-weight-bold mt-1 mb-0">
                                    <a href="javascript:;" class="text-decoration-none text-color-dark text-color-hover-primary">
                                        Maintenance Orientation and Actual Troubleshooting HINO Familiarization
                                    </a>
                                </h2>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="thumb-info thumb-info-no-zoom bg-transparent border-radius-0 pb-4 mb-2">
                    <div class="row align-items-center pb-1">
                        <div class="col-sm-5">
                            <a href="javascript:;">
                                <img src="{{ asset('customer/web_img/activities/10-11-23/10-11-23-1.jpg') }}" class="img-fluid border-radius-0" alt="FIRE SAFETY AWARENESS">
                            </a>
                        </div>
                        <div class="col-sm-7 ps-sm-1">
                            <div class="thumb-info-caption-text">
                                <div class="thumb-info-type text-light text-uppercase d-inline-block bg-color-primary px-2 m-0 mb-1 float-none">
                                    <a href="javascript:;" class="text-decoration-none text-color-light">SEMINAR</a>
                                </div>
                                <h2 class="d-block line-height-2 text-4 text-dark font-weight-bold mt-1 mb-0">
                                    <a href="javascript:;" class="text-decoration-none text-color-dark text-color-hover-primary">Fire Safety Awareness</a>
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
                                        <img src="{{ asset('customer/web_img/activities/9-13-23/9-13-23-1.jpg') }}" class="img-fluid" alt="OSH MANDATORY SEMINAR">
                                        <div class="thumb-info-title bg-transparent p-4">
                                            <div class="thumb-info-type bg-color-primary px-2 mb-1">SEMINAR</div>
                                            <div class="thumb-info-inner mt-1">
                                                <h2 class="text-color-light line-height-2 text-4 font-weight-bold mb-0">OSH Mandatory Seminar : BATCH 3</h2>
                                            </div>
                                            <div class="thumb-info-show-more-content">
                                                <p class="mb-0 text-1 line-height-9 mb-1 mt-2 text-light opacity-5">
                                                    Occupational Safety and Health
                                                    Mandatory 8-Hour Safety and Health Seminar
                                                </p>
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
                                        <img src="{{ asset('customer/web_img/activities/9-13-23/9-13-23-2.jpg') }}" class="img-fluid" alt="OSH MANDATORY SEMINAR">
                                        <div class="thumb-info-title bg-transparent p-4">
                                            <div class="thumb-info-type bg-color-primary px-2 mb-1">SEMINAR</div>
                                            <div class="thumb-info-inner mt-1">
                                                <h2 class="text-color-light line-height-2 text-4 font-weight-bold mb-0">OSH Mandatory Seminar : BATCH 2</h2>
                                            </div>
                                            <div class="thumb-info-show-more-content">
                                                <p class="mb-0 text-1 line-height-9 mb-1 mt-2 text-light opacity-5">
                                                    Occupational Safety and Health
                                                    Mandatory 8-Hour Safety and Health Seminar
                                                </p>
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
                                        <img src="{{ asset('customer/web_img/activities/9-13-23/9-13-23-3.jpg') }}" class="img-fluid" alt="OSH MANDATORY SEMINAR">
                                        <div class="thumb-info-title bg-transparent p-4">
                                            <div class="thumb-info-type bg-color-primary px-2 mb-1">SEMINAR</div>
                                            <div class="thumb-info-inner mt-1">
                                                <h2 class="text-color-light line-height-2 text-4 font-weight-bold mb-0">OSH Mandatory Seminar : BATCH 1</h2>
                                            </div>
                                            <div class="thumb-info-show-more-content">
                                                <p class="mb-0 text-1 line-height-9 mb-1 mt-2 text-light opacity-5">
                                                    Occupational Safety and Health
                                                    Mandatory 8-Hour Safety and Health Seminar
                                                </p>
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
                                        <img src="{{ asset('customer/web_img/activities/9-11-23/9-11-23-1.jpg') }}" class="img-fluid" alt="OSH MANDATORY SEMINAR">
                                        <div class="thumb-info-title bg-transparent p-4">
                                            <div class="thumb-info-type bg-color-primary px-2 mb-1">TRAINING</div>
                                            <div class="thumb-info-inner mt-1">
                                                <h2 class="text-color-light line-height-2 text-4 font-weight-bold mb-0">8-MDL BUILDERS INC</h2>
                                            </div>
                                            <div class="thumb-info-show-more-content">
                                                <p class="mb-0 text-1 line-height-9 mb-1 mt-2 text-light opacity-5">
                                                    LAST DAY OF ON-THE-JOB TRAINING
                                                </p>
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
                                        <img src="{{ asset('customer/web_img/activities/10-25-23/10-25-23-1.jpg') }}" class="img-fluid" alt="OSH MANDATORY SEMINAR">
                                        <div class="thumb-info-title bg-transparent p-4">
                                            <div class="thumb-info-type bg-color-primary px-2 mb-1">BIRTHDAY</div>
                                            <div class="thumb-info-inner mt-1">
                                                <h2 class="text-color-light line-height-2 text-4 font-weight-bold mb-0">BIRTHDAY CELEBRATORS</h2>
                                            </div>
                                            <div class="thumb-info-show-more-content">
                                                <p class="mb-0 text-1 line-height-9 mb-1 mt-2 text-light opacity-5">
                                                    BIRTHDAY CELEBRATORS FOR THE MONTH OF OCTOBER 2023! 🥳🥳🥳
                                                </p>
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
                                        <img src="{{ asset('customer/web_img/activities/8-26-23/8-26-23-1.jpg') }}" class="img-fluid" alt="OSH MANDATORY SEMINAR">
                                        <div class="thumb-info-title bg-transparent p-4">
                                            <div class="thumb-info-type bg-color-primary px-2 mb-1">SEMINAR</div>
                                            <div class="thumb-info-inner mt-1">
                                                <h2 class="text-color-light line-height-2 text-4 font-weight-bold mb-0">CUSTOMER SERVICE SEMINAR</h2>
                                            </div>
                                            <div class="thumb-info-show-more-content">
                                                <p class="mb-0 text-1 line-height-9 mb-1 mt-2 text-light opacity-5">
                                                    CUSTOMER SERVICE SEMINAR
                                                </p>
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
