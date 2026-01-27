<footer class="footer">
    <div class="container">
        <div class="row py-5">
            <div class="col-12 col-md-3 mb-4">
                <img src="{{ $settings['site_footer_logo'] ?? ' ' }}" alt="Company Logo" class="footer-logo mb-3">
                <p class="footer-text">
                    {{ $settings['site_information'] ?? ' ' }}
                </p>
            </div>
            <div class="col-12 col-md-3 mb-4">
                <h5 class="footer-title">Quick Links</h5>
                <ul class="footer-links">
                    <li>
                        <a href="{{ route('frontend.home') }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('frontend.about') }}">About Us</a>
                    </li>
                    <li>
                        <a href="{{ route('frontend.service') }}">Services</a>
                    </li>
                    <li>
                        <a href="{{ route('frontend.about') }}">Mission & Vision</a>
                    </li>
                    <li>
                        <a href="{{ route('frontend.contact') }}">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-md-3 mb-4">
                <h5 class="footer-title">Services</h5>
                <ul class="footer-links">
                    @foreach ($footer_services as $services)
                        <li>
                            <a href="{{ route('frontend.servicesingle', $services->slug) }}">{{ $services->title }}</a>
                        </li>
                    @endforeach
                    {{-- <li>
                        <a href="#"> <a class="dropdown-item" href="#">SSW visa</a>
                        </a>
                    </li>
                    <li>
                        <a href="#">Rental Service</a>
                    </li>
                    <li>
                        <a href="#">Jobs</a>
                    </li>--}}
                    <li>
                        <a href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-md-3 mb-4">
                <h5 class="footer-title">Contact Us</h5>
                <p class="footer-text mb-1">
                    <i class="header-icon ri-map-pin-2-fill"></i>
                    {{ $settings['contact_location'] ?? 'location' }}
                </p>
                <p class="footer-text mb-1">
                    <i class="header-icon ri-phone-fill"></i>
                    {{ $settings['contact_phone'] ?? '' }}
                </p>
                <p class="footer-text">
                    <i class="header-icon ri-mail-fill"></i>
                    {{ $settings['contact_email'] ?? 'email' }}
                </p>
            </div>
        </div>
        <div class="row border-top pt-3">
            <div class="col text-center">
                <p class="copyright">
                    &copy; {{ date('Y') }}
                    {!! $settings['site_copyright'] ?? '' !!}
                </p>
            </div>
        </div>
    </div>
</footer>
