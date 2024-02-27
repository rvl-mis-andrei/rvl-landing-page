<footer id="footer">
    <div class="container">
        <div class="footer-ribbon">
            <span>Get in Touch</span>
        </div>
        <div class="row py-5 my-4">
            <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                <h4 class="font-weight-semibold text-color-light ls-0 mb-0">RVL Movers Corporation</h4>
                <h6 class="text-muted">Safe and Quality Trucking</h6>
                <span class="py-5 my-5">
                    <p class="text-3-5">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur fel. </p>
                </span>
            </div>
            <div class="col-md-6 col-lg-2 mb-4 mb-lg-0">
                <h5 class="text-3 mb-3">USEFUL LINKS</h5>
                <ul class="list-unstyled mb-0">
                    <li class="mb-2 ">
                        <a href="{{ route('about_us') }}">
                            <p class="text-3 text-color-light opacity-8 mb-0">
                                <i class="fas fa-angle-right text-color-primary"></i>
                                <strong class="ms-2 font-weight-semibold">ABOUT US</strong>
                            </p>
                        </a>
                    </li>
                    <li class="mb-2 ">
                        <a href="{{ route('services') }}">
                            <p class="text-3 text-color-light opacity-8 mb-0">
                                <i class="fas fa-angle-right text-color-primary"></i>
                                <strong class="ms-2 font-weight-semibold">OUR SERVICES</strong>
                            </p>
                        </a>
                    </li>
                    <li class="mb-2 ">
                        <a href="{{ route('careers') }}">
                            <p class="text-3 text-color-light opacity-8 mb-0">
                                <i class="fas fa-angle-right text-color-primary"></i>
                                <strong class="ms-2 font-weight-semibold">CAREERS</strong>
                            </p>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                <div class="contact-details">
                    <h5 class="text-3 mb-3">CONTACT US</h5>
                    <ul class="list list-icons list-icons-lg">
                        <li class="mb-1"><i class="far fa-dot-circle text-color-primary"></i><p class="m-0">Daystar Industrial Park Bgy. Pulong Sta Cruz, Balibago, Santa Rosa, 4026 Laguna, Philippines</p></li>
                        <li class="mb-1"><i class="fab fa-whatsapp text-color-primary"></i><p class="m-0"><a href="tel:8001234567">0998 598 4656</a></p></li>
                        <li class="mb-1">
                            <i class="far fa-envelope text-color-primary"></i>
                            <p class="m-0">
                                <a href="#">
                                    <span>recruitment@rvlmovers.com</span>
                                </a>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div id="map" class="google-map m-0"></div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container py-2">
            <div class="row py-4 ">
                {{-- justify-content-lg-start --}}
                <div class="col-12 d-flex align-items-center justify-content-center mb-2 mb-lg-0">
                    © {{ date('Y') }} &nbsp;
                    <a href="{{ route('home') }}" class="text-capitalize">
                        {{ env('APP_WEBSITE') }}. All Rights Reserved
                    </a>
                </div>
                {{-- <div class="col-lg-12 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0">
                    <p></p>
                </div>
                <div class="col-lg-4 d-flex align-items-center justify-content-center justify-content-lg-end">
                    <nav id="sub-menu">
                        <ul>
                            <li><i class="fas fa-angle-right"></i><a href="page-faq.html" class="ms-1 text-decoration-none"> FAQ's</a></li>
                            <li><i class="fas fa-angle-right"></i><a href="sitemap.html" class="ms-1 text-decoration-none"> Sitemap</a></li>
                            <li><i class="fas fa-angle-right"></i><a href="contact-us.html" class="ms-1 text-decoration-none"> Contact Us</a></li>
                        </ul>
                    </nav>
                </div> --}}
            </div>
        </div>
    </div>
</footer>
