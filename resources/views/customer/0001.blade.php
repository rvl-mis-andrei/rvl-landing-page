@extends('customer.layout.app')

@section('title', 'RVL Movers Corporation - Home')

@section('content')

    <div role="main" class="main">

        {{-- START SLIDER --}}
        <div class="slider-container rev_slider_wrapper" style="height: 670px;">
            <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 670, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500], 'parallax': { 'type': 'scroll', 'origo': 'enterpoint', 'speed': 1000, 'levels': [2,3,4,5,6,7,8,9,12,50], 'disable_onmobile': 'on' }, 'navigation' : {'arrows': { 'enable': true }, 'bullets': {'enable': true, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 70, 'h_offset': 0}}}">
                <ul>
                    <li class="slide-overlay" data-transition="fade">
                        <img src="{{ asset('customer/web_img/slide-bg.jpg') }}"
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
                            <img src="{{ asset('customer/web_img/slide-rvl-1.png') }}" alt=""></div>

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
                            style="color: #f0f0f0;">CAR CARRIER, CARGO HAULING & TRUCKING SERVICES</div>

                    </li>
                    <li class="slide-overlay" data-transition="fade">
                        <img src="{{ asset('customer/web_img/slide-rvl-2.png') }}"
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
                            data-transform_in="y:[-50%];opacity:0;s:500;">What we Are</div>

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
                            data-lineheight="['55','55','55','95']">Safe and Quality Trucking Services</div>

                        <div class="tp-caption font-weight-light ws-normal text-center"
                            data-x="center"
                            data-y="center" data-voffset="['60','60','60','105']"
                            data-width="['530','530','530','1100']"
                            data-fontsize="['18','18','18','40']"
                            data-lineheight="['26','26','26','45']"
                            data-transform_in="y:[-50%];opacity:0;s:500;"
                            data-start="700"
                            style="color: #b5b5b5;">
                            Commiting to what we can deliver, Delivering to what we have commited
                        </div>

                    </li>
                    <li class="slide-overlay" data-transition="fade">
                        <img src="{{ asset('customer/web_img/slide-bg-6.jpg') }}"
                            alt=""
                            data-bgposition="center center"
                            data-bgfit="cover"
                            data-bgrepeat="no-repeat"
                            class="rev-slidebg">

                        <div class="tp-caption"
                            data-x="center" data-hoffset="['-200','-200','-200','-520']"
                            data-y="center" data-voffset="['-80','-80','-80','-130']"
                            data-start="1000"
                            data-transform_in="x:[-300%];opacity:0;s:500;"
                            data-transform_idle="opacity:0.2;s:500;"><img src="{{ asset('customer/web_img/slide-title-border.png') }}" alt=""></div>

                        <div class="tp-caption text-color-light font-weight-normal"
                            data-x="center"
                            data-y="center" data-voffset="['-80','-80','-80','-130']"
                            data-start="700"
                            data-fontsize="['16','16','16','40']"
                            data-lineheight="['25','25','25','45']"
                            data-transform_in="y:[-50%];opacity:0;s:500;">Safe and Quality Trucking Services , WE ARE</div>


                        <div class="tp-caption"
                            data-x="center" data-hoffset="['200','200','200','320']"
                            data-y="center" data-voffset="['-80','-80','-80','-130']"
                            data-start="1000"
                            data-transform_in="x:[300%];opacity:0;s:500;"
                            data-transform_idle="opacity:0.2;s:500;"><img src="{{ asset('customer/web_img/slide-title-border.png') }}" alt=""></div>

                        <div class="tp-caption font-weight-extra-bold text-color-light"
                            data-frames='[{"delay":1300,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-x="center"
                            data-y="center"
                            data-fontsize="['100','100','100','200']"
                            data-lineheight="['150','150','150','260']">RVL Movers Corporation</div>

                        <div class="tp-caption font-weight-light text-color-light"
                            data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2300,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                            data-x="center"
                            data-y="center" data-voffset="['85','85','85','140']"
                            data-fontsize="['18','18','18','40']"
                            data-lineheight="['26','26','26','45']">The best choice for your business</div>

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
                                <img src="{{ asset('customer/web_img/generic-1.jpg') }}" class="img-fluid box-shadow-5" alt="">
                            </div>
                            <div class="col-6">
                                <img src="{{ asset('customer/web_img/generic-2.jpg') }}" class="img-fluid box-shadow-5 mb-lg-4 mb-3" alt="">
                                <img src="{{ asset('customer/web_img/generic-3.jpg') }}" class="img-fluid box-shadow-5" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 ps-lg-4 ps-xl-5 text-start">
                        <h2 class="custom-highlight-text-1 d-inline-block line-height-5 text-4 positive-ls-3 font-weight-medium text-color-primary mb-0">ABOUT US</h2>
                        <h3 class="text-6 text-lg-4 text-xl-7 line-height-3 text-transform-none font-weight-semibold mb-1 mb-lg-2 mb-xl-2">{{ env('APP_WEBSITE') }}</h3>
                        <p class="text-3-5 pb-1 mb-1 mb-xl-4 px-1 ">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <p class="text-3-5 pb-1 mb-0 mb-xl-4 px-1 ">
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
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
                            <h2 class="text-color-primary font-weight-medium positive-ls-3 text-4 mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="200" style="animation-delay: 200ms;">WHAT WE DO</h2>
                        </div>
                        <div class="overflow-hidden mb-3">
                            <h3 class="font-weight-bold text-transform-none text-9 line-height-2 mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="400" style="animation-delay: 400ms;">A Selection Of Industries We Serve</h3>
                        </div>
                        <p class="custom-font-secondary custom-font-size-1 line-height-7 mb-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" style="animation-delay: 600ms;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur.</p>
                    </div>
                </div>
                <div class="">
                    <div class="row align-items-center py-5">
                        <div class="col-lg-12">
                            <div class="">
                                <div class="owl-carousel owl-theme nav-dark nav-style-1 nav-arrows-thin nav-font-size-lg nav-outside mb-0 custom-el-pos-1 owl-carousel-init owl-loaded owl-drag "
                                data-plugin-options="{'responsive': {'0': {'items': 1}, '768': {'items': 3}, '992': {'items': 3}, '1200': {'items': 3}}, 'loop': true, 'nav': true, 'dots': false, 'margin': 20}">
                                    <div class="p-relative">
                                        <span class="thumb-info thumb-info-swap-content anim-hover-inner-wrapper">
											<span class="thumb-info-wrapper overlay overlay-show overlay-gradient-bottom-content">
                                                <img src="{{ asset('customer/web_img/products/box_and_foam_inserts.png') }}" class="img-fluid rounded" alt="">
												<span class="thumb-info-title bottom-30 bg-transparent w-100 mw-100 p-0 text-center">
													<span class="thumb-info-swap-content-wrapper">
														<span class="thumb-info-inner text-3-5 pb-2">
															CARGO FLEETS
														</span>
														<span class="thumb-info-inner text-2">
															<p class="px-5 text-2 opacity-7 font-weight-medium text-light ls-0">
                                                                <h4 class="font-weight-bold text-light mb-3">LIST OF CARGO FLEETS</h4>
                                                                <ul class="list list-icons list-primary font-weight-medium mt-3 text-start">
                                                                    <li><i class="fas fa-check text-color-primary"></i> Motorcycle Carrier Truck.</li>
                                                                    <li><i class="fas fa-check text-color-primary"></i> Closed Van Truck.</li>
                                                                    <li><i class="fas fa-check text-color-primary"></i> Wingvan Truck.</li>
                                                                    <li><i class="fas fa-check text-color-primary"></i> Tracktor Head Truck.</li>
                                                                    <li><i class="fas fa-check text-color-primary"></i> Wingvan Trailer.</li>
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
                                                <img src="{{ asset('customer/web_img/products/box_and_foam_inserts.png') }}" class="img-fluid rounded" alt="">
												<span class="thumb-info-title bottom-30 bg-transparent w-100 mw-100 p-0 text-center">
													<span class="thumb-info-swap-content-wrapper">
														<span class="thumb-info-inner text-3-5 pb-2">
															CAR CARRIER FLEETS
														</span>
														<span class="thumb-info-inner text-2">
															<p class="px-5 text-2 opacity-7 font-weight-medium text-light ls-0">
                                                                <h4 class="font-weight-bold text-light mb-3">LIST OF CAR CARRIER FLEETS</h4>
                                                                <ul class="list list-icons list-primary font-weight-medium mt-3 text-start">
                                                                    <li><i class="fas fa-check text-color-primary"></i> Tractor Head Truck.</li>
                                                                    <li><i class="fas fa-check text-color-primary"></i> Car Carrier Trailer.</li>
                                                                    <li><i class="fas fa-check text-color-primary"></i> 6W Straight Truck.</li>
                                                                    <li><i class="fas fa-check text-color-primary"></i> Single Self-Loading.</li>
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
                                                <img src="{{ asset('customer/web_img/products/box_and_foam_inserts.png') }}" class="img-fluid rounded" alt="">
												<span class="thumb-info-title bottom-30 bg-transparent w-100 mw-100 p-0 text-center">
													<span class="thumb-info-swap-content-wrapper">
														<span class="thumb-info-inner text-3-5 pb-2">
															OTHER FLEETS
														</span>
														<span class="thumb-info-inner text-2">
															<p class="px-5 text-2 opacity-7 font-weight-medium text-light ls-0">
                                                                <h4 class="font-weight-bold text-light mb-3">LIST OF OTHER FLEETS</h4>
                                                                <ul class="list list-icons list-primary font-weight-medium mt-3 text-start">
                                                                    <li><i class="fas fa-check text-color-primary"></i> 6W Boom Truck.</li>
                                                                    <li><i class="fas fa-check text-color-primary"></i> 40' Skeletal Chassis.</li>
                                                                    <li><i class="fas fa-check text-color-primary"></i> Service Vehicles.</li>
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
                </div>
                <div class="row">
                    <div class="col text-center">
                        <a href="{{ route('services') }}" class="btn btn-primary custom-btn-style-1 font-weight-semibold btn-px-4 btn-py-2 text-3-5" data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light">
                            <span>All Services</span>
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
                            Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis ultrices non. </p>
                        <ul class="list ps-0 pe-lg-5 mb-0">
                            <li class="d-flex align-items-start pb-1 mb-3 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000" style="animation-delay: 1000ms;">
                                <i class="fas fa-check text-color-light text-4 custom-bg-color-grey-1 rounded-circle p-3"></i>
                                <span class="text-3-5 ps-3">We wil identify where you're getting off-track in all areas and not just</span>
                            </li>
                            <li class="d-flex align-items-start pb-1 mb-3 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1250" style="animation-delay: 1250ms;">
                                <i class="fas fa-check text-color-light text-4 custom-bg-color-grey-1 rounded-circle p-3"></i>
                                <span class="text-3-5 ps-3">We create a program that accelerates your strategic execution and growth goals.
                                </span>
                            </li>
                            <li class="d-flex align-items-start appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1500" style="animation-delay: 1500ms;">
                                <i class="fas fa-check text-color-light text-4 custom-bg-color-grey-1 rounded-circle p-3"></i>
                                <span class="text-3-5 ps-3">Consistently hit strategic objectives and revenue targets, and grow, year over year.</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <img src="{{ asset('customer/web_img/generic-2 (2).jpg') }}" alt="" class="img-fluid box-shadow-5">
                        {{-- <h2 class="custom-text-background custom-big-font-size-1 text-15 font-weight-bold float-end clearfix line-height-1 pe-xl-5 me-3 mb-0 d-none d-lg-block lazyloaded"
                        >BENEFITS</h2> --}}
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
                                <strong>Request a Quote</strong> - Need Immediate Confirmation? Call Us at <u>888-123-4567</u>
                            </span>
                        </p>
                    </div>
                    <div class="col-lg-3 pt-3 pt-lg-0 text-center text-lg-end">
                        <span class="d-inline-block appear-animation animated fadeInUpShorterPlus appear-animation-visible" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="300" style="animation-delay: 300ms;">
                            <a href="#" class="btn btn-light text-color-tertiary border-0 text-3-5 font-weight-semi-bold btn-px-5 btn-py-3">Request Rate</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        {{-- START FAQ --}}
        <section class="section section-no-background section-footer border-1 pt-0 mt-0 px-3">
            <div class="container pt-4 pb-5">
                <div class="row py-4">
                    <div class="col-lg-6">
                        <h4 class="text-primary text-3 font-weight-bold mb-2">FREQUENTLY ASKED QUESTIONS</h4>
                        <h3 class="mb-3 font-weight-semibold mb-0 text-capitalize">{{ env('APP_WEBSITE') }}</h3>
                        <div class="custom-divider divider divider-primary divider-small mb-4 mt-2">
                            <hr class="my-0 appear-animation animated customLineProgressAnim appear-animation-visible" data-appear-animation="customLineProgressAnim" data-appear-animation-delay="700" style="animation-delay: 700ms;">
                        </div>
                        <p class="mb-4 pb-2">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis ultrices non. Cras a elit sit amet leo acun volutpat. Suspendisse hendrerit vehicula leo, vel efficitur fel.</p>

                        <p class="mb-4 pb-2">Eo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis ultrices non. Cras a elit sit amet leo acun volutpat. Suspendisse hendrerit vehicula.</p>

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
