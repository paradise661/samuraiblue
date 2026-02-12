<!-- Footer Section Start -->
<footer class="footer-section-1 fix footer-bg bg-cover" style="background-image: url(images/home-1/footer-shape.png)">
    <span class="circle-shape"></span>
    <span class="circle-shape-2"></span>
    <div class="auto-container">
        <div class="footer-widget-wrapper">
            <div class="row justify-content-between">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="footer-widget-items mt-30">
                        <div class="widget-title mb-25">
                            <a href="{{ route('frontend.home') }}" class="footer-logo">
                                <img src="{{ $settings['site_footer_logo'] }}" alt="img" />
                            </a>
                        </div>
                        <div class="footer-content">
                            <p>{{ $settings['site_information'] }}</p>
                            <div class="social-icon">
                                @foreach ($socials as $social)
                                    <a href="{{ $social->link }}"><i class="{{ $social->icon }}"></i></a>
                                @endforeach
                                {{-- <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="footer-widget-items mt-30">
                        <div class="widget-title mb-25">
                            <h3 class="font-size-24 text-white font-weight-500">Company</h3>
                        </div>
                        <ul class="user-links">
                            <li><a href="{{ route('frontend.home') }}">Home</a></li>
                            <li><a href="{{ route('frontend.about') }}">About us</a></li>
                            <li><a href="{{ route('frontend.testimonial') }}">Testimonials</a></li>
                            <li><a href="{{ route('frontend.contact') }}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".6s">
                    <div class="footer-widget-items mt-30">
                        <div class="widget-title mb-25">
                            <h3 class="font-size-24 text-white font-weight-500">Services</h3>
                        </div>
                        <ul class="user-links">
                            @foreach ($footer_services as $service)
                                <li><a
                                        href="{{ route('frontend.servicesingle', $service->slug) }}">{{ $service->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".8s">
                    <div class="footer-widget-items mt-30">
                        <div class="widget-title mb-25">
                            <h3 class="font-size-24 text-white font-weight-500">Contact Us</h3>
                        </div>
                        <ul class="contact-list">
                            <li>
                                <i class="lnr-icon-phone-handset"></i>
                                <p><a href="tel:{{ $settings['site_phone'] }}">{{ $settings['site_phone'] }}</a></p>
                            </li>
                            <li>
                                <i class="lnr-icon-envelope"></i>
                                <p><a href="mailto:{{ $settings['site_mail'] }}">{{ $settings['site_mail'] }}</a></p>
                            </li>
                            <li>
                                <i class="lnr-icon-map-marker"></i>
                                <p>{{ $settings['site_location'] }}</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="auto-container">
            <p class="wow fadeInUp" data-wow-delay=".3s">Copyright © 2026 . All Rights Reserved</p>
        </div>
    </div>
</footer>