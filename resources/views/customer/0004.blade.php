@extends('customer.layout.app')

@section('title', env('APP_WEBSITE').' - Services')

@section('content')
<div role="main" class="main">
    <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-5 p-4" style="background-image: url(customer/page-header/background-2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1 class="fs-5 mb-0 pb-0">Our <strong>Services</strong></h1>
                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb breadcrumb-light d-block text-md-end">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active">Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container pb-1">
        <section class="section mb-0 pb-0 border-0 pt-3 bg-white">
            <div class="container border-0 pt-md-4 pt-xl-0 p-0">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-12 pb-sm-4 pb-lg-0 mb-5 mb-lg-0">
                        <div class="overflow-hidden">
                            <h2 class="custom-highlight-text-1 d-inline-block line-height-5 text-4 positive-ls-3 font-weight-medium text-color-primary mb-2">SERVICES</h2>
                            <h2 class="font-weight-bold text-color-dark line-height-1 mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="300" style="animation-delay: 300ms;">
                                RVL Movers Corporation
                            </h2>
                        </div>
                        <div class="custom-divider divider divider-primary divider-small my-3">
                            <hr class="my-0 appear-animation animated customLineProgressAnim appear-animation-visible" data-appear-animation="customLineProgressAnim" data-appear-animation-delay="700" style="animation-delay: 700ms;">
                        </div>
                        <p class="font-weight-light text-3-5 mb-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="450" style="animation-delay: 450ms;">
                            {{-- Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. --}}
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
                                            <img src="{{ asset('customer/web_img/trucks/CAR_CARRIER_SERVICES.png') }}" class="img-fluid rounded" alt="">
                                            <span class="thumb-info-title bottom-30 bg-transparent w-100 mw-100 p-0 text-center">
                                                <span class="thumb-info-swap-content-wrapper">
                                                    <span class="thumb-info-inner text-3-5 pb-2">
                                                        Car Carrier Delivery Services
                                                    </span>
                                                    <span class="thumb-info-inner text-2">
                                                        <p class="px-5 text-2 opacity-7 font-weight-medium text-light ls-0">
                                                            <h4 class="font-weight-bold text-light mb-3">Car Carrier Delivery Services</h4>
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
                                            <img src="{{ asset('customer/web_img/trucks/MOTOR_CARRIER_SERVICES.png') }}" class="img-fluid rounded" alt="">
                                            <span class="thumb-info-title bottom-30 bg-transparent w-100 mw-100 p-0 text-center">
                                                <span class="thumb-info-swap-content-wrapper">
                                                    <span class="thumb-info-inner text-3-5 pb-2">
                                                        Motorcycle Carrier Services
                                                    </span>
                                                    <span class="thumb-info-inner text-2">
                                                        <p class="px-5 text-2 opacity-7 font-weight-medium text-light ls-0">
                                                            <h4 class="font-weight-bold text-light mb-3">Motorcycle Carrier Services</h4>
                                                            <ul class="list list-icons list-primary font-weight-medium mt-3 text-start">
                                                                <li><i class="fas fa-check text-color-primary"></i> 37 Units</li>
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
                                            <img src="{{ asset('customer/web_img/trucks/CARGO_TRUCK_SERVICES.png') }}" class="img-fluid rounded" alt="">
                                            <span class="thumb-info-title bottom-30 bg-transparent w-100 mw-100 p-0 text-center">
                                                <span class="thumb-info-swap-content-wrapper">
                                                    <span class="thumb-info-inner text-3-5 pb-2">
                                                        Cargo Delivery Services
                                                    </span>
                                                    <span class="thumb-info-inner text-2">
                                                        <p class="px-5 text-2 opacity-7 font-weight-medium text-light ls-0">
                                                            <h4 class="font-weight-bold text-light mb-3"></h4>
                                                            <ul class="list list-icons list-primary font-weight-medium mt-3 text-start">
                                                                <li><i class="fas fa-check text-color-primary"></i> 26 Units</li>
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
                                            <img src="{{ asset('customer/web_img/trucks/BROKER_SERVICES.png') }}" class="img-fluid rounded" alt="">
                                            <span class="thumb-info-title bottom-30 bg-transparent w-100 mw-100 p-0 text-center">
                                                <span class="thumb-info-swap-content-wrapper">
                                                    <span class="thumb-info-inner text-3-5 pb-2">
                                                        Brokerage Services
                                                    </span>
                                                    <span class="thumb-info-inner text-2">
                                                        <p class="px-5 text-2 opacity-7 font-weight-medium text-light ls-0">
                                                            <h4 class="font-weight-bold text-light mb-3">
                                                                Brokerage Services
                                                            </h4>
                                                        </p>
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
        </section>
    </div>

    <section class="section m-0">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12 pb-sm-4 pb-lg-0 mb-5 mb-lg-0">
                    <div class="overflow-hidden">
                        <h2 class="custom-highlight-text-1 d-inline-block line-height-5 text-4 positive-ls-3 font-weight-medium text-color-primary mb-2">PRODUCTS</h2>
                        <h2 class="font-weight-bold text-color-dark line-height-1 mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="300" style="animation-delay: 300ms;">
                            AFFILIATED COMPANIES
                        </h2>
                    </div>
                    <div class="custom-divider divider divider-primary divider-small my-3">
                        <hr class="my-0 appear-animation animated customLineProgressAnim appear-animation-visible" data-appear-animation="customLineProgressAnim" data-appear-animation-delay="700" style="animation-delay: 700ms;">
                    </div>
                    <p class="font-weight-light text-3-5 mb-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="450" style="animation-delay: 450ms;">
                        {{-- Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. --}}
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
                                        <img src="{{ asset('customer/web_img/products/8MDL.png') }}" class="img-fluid rounded" alt="">
                                        <span class="thumb-info-title bottom-30 bg-transparent w-100 mw-100 p-0 text-center">
                                            <span class="thumb-info-swap-content-wrapper">
                                                <span class="thumb-info-inner text-3-5 pb-2">
                                                    8MDL Body Builder
                                                </span>
                                                <span class="thumb-info-inner text-2">
                                                    <p class="px-5 text-2 opacity-7 font-weight-medium text-light ls-0">
                                                        <h4 class="font-weight-bold text-light mb-3">8MDL Body Builder</h4>
                                                        Fabrication of car carrier trailers and other metal related products
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
                                        <img src="{{ asset('customer/web_img/products/3JUPITER.png') }}" class="img-fluid rounded" alt="">
                                        <span class="thumb-info-title bottom-30 bg-transparent w-100 mw-100 p-0 text-center">
                                            <span class="thumb-info-swap-content-wrapper">
                                                <span class="thumb-info-inner text-3-5 pb-2">
                                                    3 JUPITER PROPERTY DEVELOPMENT
                                                </span>
                                                <span class="thumb-info-inner text-2">
                                                    <p class="px-5 text-2 opacity-7 font-weight-medium text-light ls-0">
                                                        <h4 class="font-weight-bold text-light mb-3">3 JUPITER PROPERTY DEVELOPMENT</h4>
                                                        Property Development and Yard Rentals
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
                                        <img src="{{ asset('customer/web_img/products/RVL_Auto_Logistic.png') }}" class="img-fluid rounded" alt="">
                                        <span class="thumb-info-title bottom-30 bg-transparent w-100 mw-100 p-0 text-center">
                                            <span class="thumb-info-swap-content-wrapper">
                                                <span class="thumb-info-inner text-3-5 pb-2">
                                                    RVL AUTOLOGISTICS
                                                </span>
                                                <span class="thumb-info-inner text-2">
                                                    <p class="px-5 text-2 opacity-7 font-weight-medium text-light ls-0">
                                                        <h4 class="font-weight-bold text-light mb-3">6W CLOSED VAN TRUCKS</h4>
                                                        <ul class="list list-icons list-primary font-weight-medium mt-3 text-start">
                                                            <li><i class="fas fa-check text-color-primary"></i>PDI Facility</li>
                                                            <li><i class="fas fa-check text-color-primary"></i>Yard Management and Inventory</li>
                                                            <li><i class="fas fa-check text-color-primary"></i>Vehicle Preservation</li>
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
                                        <img src="{{ asset('customer/web_img/products/HINO_Dealership_Carmona.png') }}" class="img-fluid rounded" alt="">
                                        <span class="thumb-info-title bottom-30 bg-transparent w-100 mw-100 p-0 text-center">
                                            <span class="thumb-info-swap-content-wrapper">
                                                <span class="thumb-info-inner text-3-5 pb-2">
                                                    HINO DEALERSHIPS
                                                </span>
                                                <span class="thumb-info-inner text-2">
                                                    <p class="px-5 text-2 opacity-7 font-weight-medium text-light ls-0">
                                                        <h4 class="font-weight-bold text-light mb-3">
                                                            HINO DEALERSHIPS
                                                        </h4>
                                                        Batangas & Carmona
                                                    </p>
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
    </section>

    <section class="section section-height-3 bg-primary border-0 m-0 mb-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xl-7 text-center text-lg-start mb-4 mb-lg-0">
                    <h2 class="text-color-light font-weight-medium text-3-5 line-height-2 line-height-sm-1 ls-0 mb-2 mb-lg-2">#1 CAR CARRIER SERVICE IN PHILIPPINES</h2>
                    <h3 class="font-weight-bold text-color-light text-transform-none text-8 line-height-2 line-height-lg-1 mb-1">{{ env('APP_WEBSITE') }}</h3>
                    <p class="font-weight-medium text-color-light text-4 opacity-7 mb-0">Safe and Quality Trucking Services</p>
                </div>
                <div class="col-lg-6 col-xl-5">
                    <div class="d-flex flex-column flex-lg-row align-items-center justify-content-between">
                        <div class="feature-box align-items-center mb-3 mb-lg-0">
                            <div class="feature-box-icon bg-transparent">
                                <i class="icons icon-phone text-6 text-color-light"></i>
                            </div>
                            <div class="feature-box-info line-height-2 ps-1">
                                <span class="d-block text-1 font-weight-semibold text-color-light mb-1">CALL US NOW</span>
                                <strong class="text-4-5"><a href="javascript:;" class="text-color-light text-decoration-none">0998 584 5569</a></strong>
                            </div>
                        </div>
                        <a href="{{ route('contact_us') }}" class="btn btn-light btn-outline custom-btn-border-radius font-weight-bold text-color-light text-color-hover-dark bg-color-hover-light btn-px-5 btn-py-3">
                            REQUEST QUOTE
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="section section-footer section-no-background border-1 pt-0 mt-0">
        <div class="container-fluid">
            <div class="row pb-0">
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
    </section> --}}
</div>

@endsection
