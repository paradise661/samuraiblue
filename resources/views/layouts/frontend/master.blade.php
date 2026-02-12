<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $settings['site_title'] ?? config('app.name', 'samuraiblue') }}</title>

    @yield('seo')

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <link href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    {{--
    <link href="css/style.css" rel="stylesheet" /> --}}
    <link href="{{ asset('frontend/assets/css/responsive.css') }}" rel="stylesheet" />

    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/favicon.svg') }}" type="image/x-icon" />
    {{--
    <link rel="icon" type="image/x-icon"
        href="{{ $settings['site_fav_icon'] ? asset($settings['site_fav_icon']) : 'Smurai Blue' }}" /> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.7.0/fonts/remixicon.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css" />



</head>

<body>
    @include('layouts.frontend.header')
    <main>
        @yield('content')
    </main>
    @include('layouts.frontend.footer')


    <script>
        AOS.init();
    </script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                includedLanguages: 'en,ne,ja',
                autoDisplay: false
            }, 'google_translate_element');
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        window.addEventListener("scroll", function () {
            const navbar = document.querySelector(".navbar");
            navbar.classList.toggle("scrolled", window.scrollY > 50);
        });
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="{{ asset('frontend/assets/js/jquery.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/gsap.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/gsap-scroll-to-plugin.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/gsap-scroll-smoother.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/gsap-scroll-trigger.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/gsap-split-text.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/split-type.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/parallaxie.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/wow.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bxslider.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/nice-select.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/knob.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/appear.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/mixitup.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/script.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.form.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/contact-form-script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

</body>

</html>

<script src="scrollScript.js"></script>