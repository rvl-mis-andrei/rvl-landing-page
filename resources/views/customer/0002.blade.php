@extends('customer.layout.app')

@section('title', env('APP_WEBSITE').' - About Us')

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
                        <li><a href="{{ route('home') }}">Home</a></li>
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
                    <a class="lightbox" href="{{ asset('customer/web_img/about_us_expanded.webp') }}" data-plugin-options="{'type':'image'}">
                        <img src="{{ asset('customer/web_img/about_us.webp') }}" class="img-fluid box-shadow-5 rounded">'
                    </a>'
                </div>
                <div class="col-lg-6">
                    <h2 class="text-color-primary font-weight-medium positive-ls-3 text-4 mb-0">{{ env('APP_WEBSITE') }}</h2>
                    <h3 class="font-weight-bold text-transform-none text-9 line-height-2 mb-3">Company Overview</h3>
                    <p class="mb-3">
                        {{ env('APP_WEBSITE') }} is a Filipino family-owned business and been providing
                        customers with a range of delivery solutions to specific customer requirements since
                        1995 (28 years).
                        <br><br>
                        We provide a one stop shop for all your shipping needs, from a simple pick and drop to
                        overseeing the complete supply chain; we take care of your shipments no matter what
                        shape or size.
                    </p>
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-xl-7">
                            <div class="row flex-xl-nowrap align-items-center mb-4 mb-lg-0">
                                <div class="col-sm-auto mb-4 mb-sm-0">
                                    <div class="d-flex appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1000" style="animation-delay: 1000ms;">
                                        <img width="63" height="63" src="{{ asset('customer/icons/service-1.svg') }}" alt="" data-icon="" data-plugin-options="{'onlySVG': true, 'extraClass': 'd-lg-none d-xl-block'}" class="d-lg-none d-xl-block" style="opacity: 1; width: 63px;">
                                        <span class="text-3 font-weight-bold text-color-dark pt-2 ms-3">
                                            <strong class="d-block font-weight-bold text-10 mb-0">29</strong>
                                            Years in Industry
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-7 col-md-12">
                                    <blockquote class="custom-blockquote-style-1 m-0 pt-1 pb-2 px-2 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1200" style="animation-delay: 1200ms;">
                                        <p class="mb-0">“Safe and Quality Trucking Services”</p>
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
                        To deliver streamlined logistics solutions with utmost efficiency,
                        through impeccable service quality, competitive rates, and a
                        commitment to continuous improvement.
                        We seek excellence in the performance of our delivery services
                        and committed that our customer satisfaction is the essence of
                        our mission.
                    </p>

                    <h3 class="font-weight-bold text-transform-none text-9 line-height-2 mb-3">Our Vision</h3>
                    <p class="mb-3">
                        To become the preferred and leading logistics service
                        provider that is able to provide fast, safe, reliable and
                        cost-effective services for all types of cargo-related
                        needs to clients worldwide.
                    </p>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 ps-lg-5 mb-4 mb-lg-0">
                    <a class="lightbox" href="{{ asset('customer/web_img/mission_vision.webp') }}" data-plugin-options="{'type':'image'}">
                        <img src="{{ asset('customer/web_img/mission_vision.webp') }}" class="img-fluid box-shadow-3 rounded">
                    </a>
                </div>
            </div>
        </div>
    </section>
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
                                <h3 class="text-primary font-weight-bold">1995-1997</h3>
                            </div>

                            <article class="timeline-box left post post-medium">
                                <div class="timeline-box-arrow"></div>
                                <div class="p-2">
                                    <div class="row mb-2">

                                        <div class="col">
                                            <div class="post-image">
                                                <a href="javascript:;">
                                                    <img src="javascript:;" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">

                                            <div class="post-content">
                                                <h2 class="font-weight-semibold text-5 line-height-4 mt-2 mb-2"><a href="javascript:;">1995</a></h2>
                                                <p>Ventured into commercial hauling with Kimberly Clark as our initial client.</p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="post-meta">
                                                <span><i class="far fa-calendar-alt"></i> 1995 </span><br>
                                            </div>
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
                                                <a href="javascript:;">
                                                    <img src="javascript:;" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">

                                            <div class="post-content">
                                                <h2 class="font-weight-semibold text-5 line-height-4 mt-2 mb-2"><a href="javascript:;">1997</a></h2>
                                                <p>Ventured into commercial hauling with Kimberly Clark as our initial client.</p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="post-meta">
                                                <span><i class="far fa-calendar-alt"></i> 1997 </span><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <div class="timeline-date">
                                <h3 class="text-primary font-weight-bold">2003-2009</h3>
                            </div>

                            <article class="timeline-box left post post-medium">
                                <div class="timeline-box-arrow"></div>
                                <div class="p-2">
                                    <div class="row mb-2">

                                        <div class="col">
                                            <div class="post-image">
                                                <a href="javascript:;">
                                                    <img src="javascript:;" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">

                                            <div class="post-content">
                                                <h2 class="font-weight-semibold text-5 line-height-4 mt-2 mb-2"><a href="javascript:;">2003</a></h2>
                                                <p>Ventured into car carrier business with HONDA Cars Philippines, FORD and ISUZU thru Asian Terminals, Inc. (ATI)
                                                    Autologistics as our first client..</p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="post-meta">
                                                <span><i class="far fa-calendar-alt"></i> 2003 </span><br>
                                            </div>
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
                                                <a href="javascript:;">
                                                    <img src="javascript:;" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">

                                            <div class="post-content">
                                                <h2 class="font-weight-semibold text-5 line-height-4 mt-2 mb-2"><a href="javascript:;">2004</a></h2>
                                                <p>RVLo, a single proprietorship was converted to RVL MOVERS CORPORATION</p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="post-meta">
                                                <span><i class="far fa-calendar-alt"></i> 2004 </span><br>
                                            </div>
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
                                                <a href="javascript:;">
                                                    <img src="javascript:;" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">

                                            <div class="post-content">
                                                <h2 class="font-weight-semibold text-5 line-height-4 mt-2 mb-2"><a href="javascript:;">2008</a></h2>
                                                <p>Started to provide car carrier services with Mitsubishi Motors Philippines Corp. for selected import deliveries.</p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="post-meta">
                                                <span><i class="far fa-calendar-alt"></i> 2008 </span><br>
                                            </div>
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
                                                <a href="javascript:;">
                                                    <img src="javascript:;" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">

                                            <div class="post-content">
                                                <h2 class="font-weight-semibold text-5 line-height-4 mt-2 mb-2"><a href="javascript:;">2009</a></h2>
                                                <p>Expands its car carrier services with Mitsubishi Motors Philippines Corp. for regular dealer deliveries and various
                                                    import and transfer transactions up to present.</p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="post-meta">
                                                <span><i class="far fa-calendar-alt"></i> 2009 </span><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>


                            <div class="timeline-date">
                                <h3 class="text-primary font-weight-bold">2011-2019</h3>
                            </div>

                            <article class="timeline-box left post post-medium">
                                <div class="timeline-box-arrow"></div>
                                <div class="p-2">
                                    <div class="row mb-2">

                                        <div class="col">
                                            <div class="post-image">
                                                <a href="javascript:;">
                                                    <img src="javascript:;" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">

                                            <div class="post-content">
                                                <h2 class="font-weight-semibold text-5 line-height-4 mt-2 mb-2"><a href="javascript:;">2011</a></h2>
                                                <p>Supported TOYOTA’s first pilot project to provide car carrier services in Luzon. Handles Brokerage Services and
                                                    Import deliveries from Port to TMP Yards.</p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="post-meta">
                                                <span><i class="far fa-calendar-alt"></i> 2011 </span><br>
                                            </div>
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
                                                <a href="javascript:;">
                                                    <img src="javascript:;" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">

                                            <div class="post-content">
                                                <h2 class="font-weight-semibold text-5 line-height-4 mt-2 mb-2"><a href="javascript:;">2012</a></h2>
                                                <p>Started to provide car carrier services with NYK AUTO LOGISTICS handling FORD imports and dealership, up to
                                                    present.</p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="post-meta">
                                                <span><i class="far fa-calendar-alt"></i> 2012 </span><br>
                                            </div>
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
                                                <a href="javascript:;">
                                                    <img src="javascript:;" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">

                                            <div class="post-content">
                                                <h2 class="font-weight-semibold text-5 line-height-4 mt-2 mb-2"><a href="javascript:;">2017</a></h2>
                                                <p>Started to provide car carrier services with NYK AUTO LOGISTICS handling NISSAN imports and dealership.</p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="post-meta">
                                                <span><i class="far fa-calendar-alt"></i> 2017 </span><br>
                                            </div>
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
                                                <a href="javascript:;">
                                                    <img src="javascript:;" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">

                                            <div class="post-content">
                                                <h2 class="font-weight-semibold text-5 line-height-4 mt-2 mb-2"><a href="javascript:;">2019</a></h2>
                                                <p> RVL Movers Corp., was awarded by TOYOTA MOTOR PHILIPPINES to handle deliveries of Toyota vehicle in
                                                    Visayas and Mindanao to expand nationwide.</p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="post-meta">
                                                <span><i class="far fa-calendar-alt"></i> 2019 </span><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

    {{-- <section section class="section section-footer mb-0  pt-5 pb-1">
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
    </section> --}}

</div>

@endsection
