@extends('customer.layout.app')

@section('title', 'RVL Movers Corporation - Home')

@section('content')

    <div role="main" class="main">

        {{-- START SLIDER --}}
        <div class="slider-container rev_slider_wrapper" style="height: 670px;">
            <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 670, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500], 'parallax': { 'type': 'scroll', 'origo': 'enterpoint', 'speed': 1000, 'levels': [2,3,4,5,6,7,8,9,12,50], 'disable_onmobile': 'on' }, 'navigation' : {'arrows': { 'enable': true }, 'bullets': {'enable': true, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 70, 'h_offset': 0}}}">
                <ul>
                    <li class="slide-overlay" data-transition="fade">
                        <img src="{{ asset('customer/web_img/slide-bg.webp') }}"
                            alt=""
                            data-bgposition="center center"
                            data-bgfit="cover"
                            data-bgrepeat="no-repeat"
                            class="rev-slidebg">

                        <div class="tp-caption tp-resizeme"
                            data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"opacity:0;","to":"o:1;x:0;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-type="image"
                            data-x="left"
                            data-y="center"
                            data-width="['auto']"
                            data-height="['auto']"
                            data-basealign="slide">
                            <img src="{{ asset('customer/web_img/slide-rvl-2.webp') }}" alt=""></div>

                        <div class="tp-caption tp-resizeme rs-parallaxlevel-7"
                            data-frames='[{"delay":2500,"speed":1500,"frame":"0","from":"opacity:0;x:-50%;y:-50%;","to":"opacity:1;x:0;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-type="image"
                            data-x="-500"
                            data-y="-700"
                            data-width="['auto']"
                            data-height="['auto']"
                            data-basealign="slide"><img src="{{ ('customer/web_img/slide-parallax-porto-symbol.png')  }}" alt=""></div>

                        <div class="tp-caption"
                            data-x="center" data-hoffset="['-150','-150','-150','-240']"
                            data-y="center" data-voffset="['-50','-50','-50','-75']"
                            data-start="1000"
                            data-transform_in="x:[-300%];opacity:0;s:500;"
                            data-transform_idle="opacity:0.2;s:500;"><img src="{{ asset('customer/web_img/slide-title-border.png') }}" alt=""></div>

                        <div class="tp-caption text-color-light font-weight-normal"
                            data-x="center"
                            data-y="center" data-voffset="['-50','-50','-50','-75']"
                            data-start="700"
                            data-fontsize="['22','22','22','40']"
                            data-lineheight="['25','25','25','45']"
                            data-transform_in="y:[-50%];opacity:0;s:500;">WELCOME TO</div>

                        <div class="tp-caption d-none d-md-block"
                            data-frames='[{"delay":2400,"speed":500,"frame":"0","from":"opacity:0;x:10%;","to":"opacity:1;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-x="center" data-hoffset="['80','80','80','135']"
                            data-y="center" data-voffset="['-33','-33','-33','-55']"><img src="{{ asset('customer/web_img/slide-blue-line.png') }}" alt=""></div>

                        <div class="tp-caption"
                            data-x="center" data-hoffset="['150','150','150','240']"
                            data-y="center" data-voffset="['-50','-50','-50','-75']"
                            data-start="1000"
                            data-transform_in="x:[300%];opacity:0;s:500;"
                            data-transform_idle="opacity:0.2;s:500;"><img src="{{ asset('customer/web_img/slide-title-border.png') }}" alt=""></div>

                        <div class="tp-caption font-weight-extra-bold text-color-light negative-ls-2"
                            data-x="center"
                            data-y="center"
                            data-start="700"
                            data-fontsize="['50','50','50','90']"
                            data-transform_in="y:[-50%];opacity:0;s:500;"
                            data-lineheight="['55','55','55','95']">RVL Movers Corporation</div>

                            <div class="tp-caption font-weight-light ws-normal text-center"
                            data-x="center"
                            data-y="center" data-voffset="['60','60','60','105']"
                            data-width="['530','530','530','1100']"
                            data-fontsize="['18','18','18','40']"
                            data-lineheight="['26','26','26','45']"
                            data-transform_in="y:[-50%];opacity:0;s:500;"
                            data-start="700"
                            style="color: #ffffff;">CAR CARRIER, CARGO DELIVERY, MOTORCYCLE CARRIER AND BROKERAGE SERVICES</div>

                    </li>
                    <li class="" data-transition="fade">
                        <img src="{{ asset('customer/web_img/slide-rvl-1.webp') }}"
                            alt=""
                            data-bgposition="center center"
                            data-bgfit="cover"
                            data-bgrepeat="no-repeat"
                            class="rev-slidebg">

                        <div class="tp-caption"
                            data-x="center" data-hoffset="['-170','-170','-170','-350']"
                            data-y="center" data-voffset="['-50','-50','-50','-75']"
                            data-start="1000"
                            data-transform_in="x:[-300%];opacity:0;s:500;"
                            data-transform_idle="opacity:0.2;s:500;"><img src="{{ asset('customer/web_img/slide-title-border.png') }}" alt=""></div>

                        <div class="tp-caption text-color-light font-weight-normal"
                            data-x="center"
                            data-y="center" data-voffset="['-50','-50','-50','-75']"
                            data-start="700"
                            data-fontsize="['16','16','16','40']"
                            data-lineheight="['25','25','25','45']"
                            data-transform_in="y:[-50%];opacity:0;s:500;">SERVICES</div>

                        <div class="tp-caption"
                            data-x="center" data-hoffset="['170','170','170','350']"
                            data-y="center" data-voffset="['-50','-50','-50','-75']"
                            data-start="1000"
                            data-transform_in="x:[300%];opacity:0;s:500;"
                            data-transform_idle="opacity:0.2;s:500;"><img src="{{ asset('customer/web_img/slide-title-border.png') }}" alt=""></div>

                        <div class="tp-caption font-weight-extra-bold text-color-light negative-ls-1"
                            data-x="center"
                            data-y="center"
                            data-transform_in="y:[-50%];opacity:0;s:500;"
                            data-start="700"
                            data-fontsize="['50','50','50','90']"
                            data-lineheight="['55','55','55','95']">CAR CARRIER SERVICES</div>

                        <div class="tp-caption font-weight-light ws-normal text-center"
                            data-x="center"
                            data-y="center" data-voffset="['60','60','60','105']"
                            data-width="['530','530','530','1100']"
                            data-fontsize="['18','18','18','40']"
                            data-lineheight="['26','26','26','45']"
                            data-transform_in="y:[-50%];opacity:0;s:500;"
                            data-start="700"
                            style="color: #ffffff;">
                            COVERING LUZON, VISAYAS & MINDANAO
                        </div>

                    </li>
                    <li class="" data-transition="fade">
                        <img src="{{ asset('customer/web_img/slide-rvl-3.webp') }}"
                            alt=""
                            data-bgposition="center center"
                            data-bgfit="cover"
                            data-bgrepeat="no-repeat"
                            class="rev-slidebg">

                        <div class="tp-caption"
                            data-x="center" data-hoffset="['-170','-170','-170','-350']"
                            data-y="center" data-voffset="['-50','-50','-50','-75']"
                            data-start="1000"
                            data-transform_in="x:[-300%];opacity:0;s:500;"
                            data-transform_idle="opacity:0.2;s:500;"><img src="{{ asset('customer/web_img/slide-title-border.png') }}" alt=""></div>

                        <div class="tp-caption text-color-light font-weight-normal"
                            data-x="center"
                            data-y="center" data-voffset="['-50','-50','-50','-75']"
                            data-start="700"
                            data-fontsize="['16','16','16','40']"
                            data-lineheight="['25','25','25','45']"
                            data-transform_in="y:[-50%];opacity:0;s:500;">AFFILIATED COMPANIES</div>

                        <div class="tp-caption"
                            data-x="center" data-hoffset="['170','170','170','350']"
                            data-y="center" data-voffset="['-50','-50','-50','-75']"
                            data-start="1000"
                            data-transform_in="x:[300%];opacity:0;s:500;"
                            data-transform_idle="opacity:0.2;s:500;"><img src="{{ asset('customer/web_img/slide-title-border.png') }}" alt=""></div>

                        <div class="tp-caption font-weight-extra-bold text-color-light negative-ls-1"
                            data-x="center"
                            data-y="center"
                            data-transform_in="y:[-50%];opacity:0;s:500;"
                            data-start="700"
                            data-fontsize="['50','50','50','90']"
                            data-lineheight="['55','55','55','95']">3 JUPITER PROPERTY DEVELOPMENT</div>

                        <div class="tp-caption font-weight-light ws-normal text-center"
                            data-x="center"
                            data-y="center" data-voffset="['60','60','60','105']"
                            data-width="['530','530','530','1100']"
                            data-fontsize="['18','18','18','40']"
                            data-lineheight="['26','26','26','45']"
                            data-transform_in="y:[-50%];opacity:0;s:500;"
                            data-start="700"
                            style="color: #ffffff;">
                            PROPERTY DEVELOPMENT AND YARD RENTALS
                        </div>

                    </li>

                </ul>
            </div>
        </div>

        <div class="home-intro bg-primary py-4 mb-5" id="home-intro">
            <div class="container">

                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <p class="mb-2">
                            Safe and Quality Trucking Services
                            <span>Check out our services or learn more.</span>
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <div class="get-started text-start text-lg-end">
                            <a href="{{ route('services') }}" class="btn btn-dark btn-lg text-3 font-weight-semibold px-4 py-3">OUR SERVICES</a>
                            <div class="learn-more">or <a href="{{ route('about_us') }}">learn more.</a></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        {{-- END SLIDER --}}


        {{-- START ABOUT US --}}
        <div class="container py-5 mb-5">
            <div class="text-center">
                <div id="aboutus" class="row align-items-xl-center">
                    <div class="col-md-12 col-lg-6 mb-5 mb-lg-0">
                        <div class="row row-gutter-sm">
                            <div class="col-6">
                                <img src="{{ asset('customer/web_img/about-us-1.webp') }}" class="img-fluid box-shadow-5" alt="">
                            </div>
                            <div class="col-6">
                                <img src="{{ asset('customer/web_img/about-us-2.webp') }}" class="img-fluid box-shadow-5 mb-lg-4 mb-3" alt="">
                                <img src="{{ asset('customer/web_img/about-us-3.webp') }}" class="img-fluid box-shadow-5" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 ps-lg-4 ps-xl-5 text-start">
                        <h2 class="custom-highlight-text-1 d-inline-block line-height-5 text-4 positive-ls-3 font-weight-medium text-color-primary mb-0">ABOUT US</h2>
                        <h3 class="text-6 text-lg-4 text-xl-7 line-height-3 text-transform-none font-weight-semibold mb-1 mb-lg-2 mb-xl-2">{{ env('APP_WEBSITE') }}</h3>
                        <p class="text-3-5 pb-1 mb-1 mb-xl-4 px-1 ">
                            {{ env('APP_WEBSITE') }} is a Filipino family-owned business and been providing
                            customers with a range of delivery solutions to specific customer requirements since
                            1995 (28 years).
                            <br><br>
                            We provide a one stop shop for all your shipping needs, from a simple pick and drop to
                            overseeing the complete supply chain; we take care of your shipments no matter what
                            shape or size.
                        </p>
                        <div class="align-items-center mt-3">
                            {{-- <div class="col-lg-6 col-xl-7 mb-3">
                                <div class="row flex-xl-nowrap align-items-center mb-4 mb-lg-0">
                                    <div class="col-sm-auto mb-4 mb-sm-0">
                                        <div class="d-flex appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1000" style="animation-delay: 1000ms;">
                                            <img width="63" height="63" src="{{ asset('customer/icons/label.svg') }}" alt="" data-icon="" data-plugin-options="{'onlySVG': true, 'extraClass': 'd-lg-none d-xl-block'}" class="d-lg-none d-xl-block" style="opacity: 1; width: 63px;">
                                            <span class="text-2 font-weight-bold text-color-dark pt-2 ms-3">
                                                <strong class="d-block font-weight-bold text-10 mb-0">10</strong>
                                                AWARDS & RECOGNITIONS
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-sm-7 col-md-12">
                                        <blockquote class="custom-blockquote-style-1 m-0 pt-1 pb-2 px-2 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1200" style="animation-delay: 1200ms;">
                                            <p class="mb-0">“Safe and Quality Trucking Servicecs”</p>
                                        </blockquote>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000" style="animation-delay: 1000ms;">
								<a href="{{ route('about_us') }}" class="btn btn-primary custom-btn-style-1 font-weight-semibold btn-px-4 btn-py-2 text-3-5" data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light">
                                    <span>ABOUT US</span>
                                </a>
							</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        {{-- END ABOUT US --}}

        {{-- START OUR SERVICE --}}
        <section class="section section-height-4 border-0 m-0 p-5 appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" style="animation-delay: 100ms;">
            <div class="container">
                <div class="row justify-content-center mb-3">
                    <div class="col-lg-12 col-xl-12 text-center">
                        <div class="overflow-hidden">
                            <h5 class="text-color-primary font-weight-medium positive-ls-3 text-4 mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                                WHAT WE DO
                            </h5>
                        </div>
                        <div class="overflow-hidden mb-2">
                            <h3 class="font-weight-medium text-transform-none text-9 line-height-2 mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="400" style="animation-delay: 400ms;">
                                RVLMC's LOGISTIC FLEET
                            </h3>
                        </div>
                        <p class="custom-font-secondary custom-font-size-1 line-height-7 mb-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" style="animation-delay: 600ms;">
                            Safe & Quality Trucking Services.
                        </p>
                    </div>
                </div>
                <div class="row align-items-center py-4">
                    <div class="col-lg-12">
                        <div class="">
                            <div class="owl-carousel owl-theme nav-dark nav-style-1 nav-arrows-thin nav-font-size-lg nav-outside mb-0 custom-el-pos-1 owl-carousel-init owl-loaded owl-drag "
                            data-plugin-options="{'responsive': {'0': {'items': 1}, '768': {'items': 3}, '992': {'items': 3}, '1200': {'items': 3}}, 'loop': true, 'nav': true, 'dots': false, 'margin': 20}">
                                <div class="p-relative">
                                    <span class="thumb-info thumb-info-swap-content anim-hover-inner-wrapper">
                                        <span class="thumb-info-wrapper overlay overlay-show overlay-gradient-bottom-content">
                                            <img src="{{ asset('customer/web_img/trucks/CAR_CARRIER_SERVICES.webp') }}" class="img-fluid rounded" alt="">
                                            <span class="thumb-info-title bottom-30 bg-transparent w-100 mw-100 p-0 text-center">
                                                <span class="thumb-info-swap-content-wrapper">
                                                    <span class="thumb-info-inner text-3-5 pb-2">
                                                        CAR CARRIER
                                                    </span>
                                                    <span class="thumb-info-inner text-2">
                                                        <p class="px-5 text-2 opacity-7 font-weight-medium text-light ls-0">
                                                            <h4 class="font-weight-bold text-light mb-3">CAR CARRIER</h4>
                                                            <ul class="list list-icons list-primary font-weight-medium mt-3 text-start">
                                                                <li><i class="fas fa-check text-color-primary"></i> 135 Units.</li>
                                                            </ul>
                                                        </p>
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                    </span>
                                </div>
                                <div class="p-relative">
                                    <span class="thumb-info thumb-info-swap-content anim-hover-inner-wrapper">
                                        <span class="thumb-info-wrapper overlay overlay-show overlay-gradient-bottom-content">
                                            <img src="{{ asset('customer/web_img/trucks/MOTOR_CARRIER_SERVICES.webp') }}" class="img-fluid rounded" alt="">
                                            <span class="thumb-info-title bottom-30 bg-transparent w-100 mw-100 p-0 text-center">
                                                <span class="thumb-info-swap-content-wrapper">
                                                    <span class="thumb-info-inner text-3-5 pb-2">
                                                        MOTORCYCLE CARRIER
                                                    </span>
                                                    <span class="thumb-info-inner text-2">
                                                        <p class="px-5 text-2 opacity-7 font-weight-medium text-light ls-0">
                                                            <h4 class="font-weight-bold text-light mb-3">MOTORCYCLE CARRIER</h4>
                                                            <ul class="list list-icons list-primary font-weight-medium mt-3 text-start">
                                                                <li><i class="fas fa-check text-color-primary"></i> 25 Units</li>
                                                                {{-- <li><i class="fas fa-check text-color-primary"></i> Car Carrier Trailer.</li>
                                                                <li><i class="fas fa-check text-color-primary"></i> 6W Straight Truck.</li>
                                                                <li><i class="fas fa-check text-color-primary"></i> Single Self-Loading.</li> --}}
                                                            </ul>
                                                        </p>
                                                        {{-- <a href="#" class="btn border-0 px-3 py-1 line-height-8 btn-primary ls-0">View Details</a> --}}
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                    </span>
                                </div>
                                <div class="p-relative">
                                    <span class="thumb-info thumb-info-swap-content anim-hover-inner-wrapper">
                                        <span class="thumb-info-wrapper overlay overlay-show overlay-gradient-bottom-content">
                                            <img src="{{ asset('customer/web_img/trucks/CARGO_TRUCK_SERVICES.webp') }}" class="img-fluid rounded" alt="">
                                            <span class="thumb-info-title bottom-30 bg-transparent w-100 mw-100 p-0 text-center">
                                                <span class="thumb-info-swap-content-wrapper">
                                                    <span class="thumb-info-inner text-3-5 pb-2">
                                                        6W CLOSED VAN TRUCKS
                                                    </span>
                                                    <span class="thumb-info-inner text-2">
                                                        <p class="px-5 text-2 opacity-7 font-weight-medium text-light ls-0">
                                                            <h4 class="font-weight-bold text-light mb-3">6W CLOSED VAN TRUCKS</h4>
                                                            <ul class="list list-icons list-primary font-weight-medium mt-3 text-start">
                                                                <li><i class="fas fa-check text-color-primary"></i> 2 Units</li>
                                                                {{-- <li><i class="fas fa-check text-color-primary"></i> 40' Skeletal Chassis.</li>
                                                                <li><i class="fas fa-check text-color-primary"></i> Service Vehicles.</li> --}}
                                                            </ul>
                                                        </p>
                                                        {{-- <a href="#" class="btn border-0 px-3 py-1 line-height-8 btn-primary ls-0">View Details</a> --}}
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                    </span>
                                </div>
                                <div class="p-relative">
                                    <span class="thumb-info thumb-info-swap-content anim-hover-inner-wrapper">
                                        <span class="thumb-info-wrapper overlay overlay-show overlay-gradient-bottom-content">
                                            <img src="{{ asset('customer/web_img/trucks/TRUCK_SERVICES_10W.webp') }}" class="img-fluid rounded" alt="">
                                            <span class="thumb-info-title bottom-30 bg-transparent w-100 mw-100 p-0 text-center">
                                                <span class="thumb-info-swap-content-wrapper">
                                                    <span class="thumb-info-inner text-3-5 pb-2">
                                                        10W WINGVAN TRUCKS
                                                    </span>
                                                    <span class="thumb-info-inner text-2">
                                                        <p class="px-5 text-2 opacity-7 font-weight-medium text-light ls-0">
                                                            <h4 class="font-weight-bold text-light mb-3">
                                                                10W WINGVAN TRUCKS
                                                            </h4>
                                                            <ul class="list list-icons list-primary font-weight-medium mt-3 text-start">
                                                                <li><i class="fas fa-check text-color-primary"></i> 10 Units</li>
                                                                {{-- <li><i class="fas fa-check text-color-primary"></i> 40' Skeletal Chassis.</li>
                                                                <li><i class="fas fa-check text-color-primary"></i> Service Vehicles.</li> --}}
                                                            </ul>
                                                        </p>
                                                        {{-- <a href="#" class="btn border-0 px-3 py-1 line-height-8 btn-primary ls-0">View Details</a> --}}
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center">
                        <a href="{{ route('services') }}" class="btn btn-primary custom-btn-style-1 font-weight-semibold btn-px-4 btn-py-2 text-3-5" data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light">
                            <span>OUR SERVICES</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        {{-- END OUR SERVICE --}}

        <section class="section section-no-background section-height-4 position-relative border-0 m-0">
            <div class="container position-relative z-index-3 pt-0 mt-0">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h2 class="custom-highlight-text-1 d-inline-block line-height-5 text-4 positive-ls-3 font-weight-medium text-color-primary mb-2 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250" style="animation-delay: 250ms;">
                            WHY US</h2>
                        <h3 class="text-9 line-height-3 text-transform-none font-weight-medium text-color-dark ls-0 mb-3 pb-1 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" style="animation-delay: 500ms;">
                            Learn Here The Main Reasons Why You Should Choose Us</h3>
                        <p class="text-3-5 pb-2 mb-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750" style="animation-delay: 750ms;">
                            {{-- We have housing facilities in our garages for
                            the delivery crews for quicker response time to
                            delivery bookings. --}}
                            RVL Movers Corporation has proven track record of exemplary performance as attested by our clients
                        </p>
                        <ul class="list ps-0 pe-lg-5 mb-0">
                            <li class="d-flex align-items-start pb-1 mb-3 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000" style="animation-delay: 1000ms;">
                                {{-- <i class="fa-regular fa-circle-check text-4 custom-bg-color-grey-1 rounded-circle p-3"></i> --}}
                                <i class="fa-regular fa-circle-check text-4 custom-bg-color-grey-1 rounded-circle p-3"></i>
                                <span class="text-3-5 ps-3">
                                   <b>On Time Deliveries</b><br>
                                    We have housing facilities in our garages for
                                    the delivery crews for quicker response time to
                                    delivery bookings
                                </span>
                            </li>
                            <li class="d-flex align-items-start pb-1 mb-3 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1250" style="animation-delay: 1250ms;">
                                <i class="fa-regular fa-circle-check text-4 custom-bg-color-grey-1 rounded-circle p-3"></i>
                                <span class="text-3-5 ps-3">
                                    <b>Trained and Disciplined Personnel</b><br>
                                    RVL crew undergo periodic trainings on road
                                    safety and safety driving seminars
                                </span>
                            </li>
                            <li class="d-flex align-items-start appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1500" style="animation-delay: 1500ms;">
                                <i class="fa-regular fa-circle-check text-4 custom-bg-color-grey-1 rounded-circle p-3"></i>
                                <span class="text-3-5 ps-3">
                                    <b>Motorpool Division</b><br>
                                    RVL Movers can cater to all
                                    mechanical, electrical, hydraulic, tinsmith
                                    welding, painting, fabrication & other repairs for the upkeep of our fleets.
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <img src="{{ asset('customer/web_img/CAR_CARRIER_TRUCKS.webp') }}" alt="" class="img-fluid box-shadow-5 rounded">
                    </div>
                </div>
            </div>
        </section>
        <div class="bg-gradient m-0">
            <div class="container py-2">
                <div class="row align-items-center text-center text-lg-start py-5">
                    <div class="col-lg-9 mb-3 mb-lg-0">
                        <p class="text-color-light text-4-5 font-weight-medium line-height-4 mb-0">
                            <span class="d-inline-block appear-animation animated fadeInUpShorterPlus appear-animation-visible" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="0" style="animation-delay: 0ms;">
                                <strong>Request a Quote</strong> - Need Immediate Confirmation? Call Us at <u>0998 598 4656</u>
                            </span>
                        </p>
                    </div>
                    <div class="col-lg-3 pt-3 pt-lg-0 text-center text-lg-end">
                        <span class="d-inline-block appear-animation animated fadeInUpShorterPlus appear-animation-visible" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="300" style="animation-delay: 300ms;">
                            <a href="{{ route('contact_us') }}" class="btn btn-light text-color-tertiary border-0 text-3-5 font-weight-semi-bold btn-px-5 btn-py-3">
                                Request Rate
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        {{-- START FAQ --}}
        {{-- <section class="section section-no-background section-footer border-1 pt-5 mt-0 px-3 mb-0 pb-0">
            <div class="container pt-4 pb-5">
                <div class="row py-4">
                    <div class="col-lg-6">
                        <h4 class="text-primary text-3 font-weight-bold mb-2">FREQUENTLY ASKED QUESTIONS</h4>
                        <h3 class="mb-3 font-weight-semibold mb-0 text-capitalize">{{ env('APP_WEBSITE') }}</h3>
                        <div class="custom-divider divider divider-primary divider-small mb-4 mt-2">
                            <hr class="my-0 appear-animation animated customLineProgressAnim appear-animation-visible" data-appear-animation="customLineProgressAnim" data-appear-animation-delay="700" style="animation-delay: 700ms;">
                        </div>
                        <p class="mb-4 pb-2">
                            At RVL Movers Corporation, our main mission is to offer innovative, practical, and top-quality trucking services encompassing car carrier, motorcycle transport, and cargo services nationwide.
                            <br><br>
                            We ensure the safety and security of all vehicles in transit and provide our customers with a competitive advantage.


                        </p>

                        <div class="hstack gap-3 pt-3">
                            <div>
                                <a href="{{ route('contact_us') }}" class="btn btn-modern btn-primary font-weight-bold border-0 py-3 px-5 btn-arrow-effect-1 ws-nowrap">CONTACT US <i class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                            <div class="vr"></div>
                            <div>
                                <a href="tel:0495020295" class="d-flex align-items-center text-decoration-none text-color-dark text-color-hover-primary font-weight-semibold ms-1">
                                    <i class="icon icon-phone text-color-primary text-4-5 me-2"></i>
                                    0998 598 4656
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
                                            1 - Who ?
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
        {{-- END FAQ --}}

        {{-- START SLIDER CUSTOMER LOGO --}}
        {{-- <div class="container-fluid p-2 m-0">
            <div class="row">
                <div>
                    <div class="owl-carousel owl-theme carousel-center-active-item custom-carousel-vertical-center-items custom-dots-style-1 mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 3}, '768': {'items': 3}, '992': {'items': 5}, '1200': {'items': 5}, '1600': {'items': 7}}, 'autoplay': false, 'autoplayTimeout': 3000, 'dots': true}">
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
        </div> --}}
        {{-- END SLIDER CUSTOMER LOGO --}}


    </div>

@endsection
