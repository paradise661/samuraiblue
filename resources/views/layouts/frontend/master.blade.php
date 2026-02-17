<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $settings['site_title'] ?? config('app.name', 'Samurai Blue Co. | Best consultancy for Japan ') }}</title>

    @yield('seo')

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <link href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    {{--
    <link href="css/style.css" rel="stylesheet" /> --}}
    <link href="{{ asset('frontend/assets/css/responsive.css') }}" rel="stylesheet" />

    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/favicon.svg') }}" type="image/x-icon" />

    <link rel="icon" type="image/x-icon"
        href="{{ $settings['site_fav_icon'] ? asset($settings['site_fav_icon']) : 'Smurai Blue' }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.7.0/fonts/remixicon.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css" />



</head>

<body>
    @include('layouts.frontend.header')
    <main>
        @yield('content')
        <div class="modal fade" id="testimonialModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Testimonial</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="d-flex align-items-center mb-3">
                        <img id="testimonialModalImage" src="" alt="" class="rounded-circle me-3"
                            style="width:70px;height:70px;object-fit:cover;">
                        <div>
                            <h6 id="testimonialModalName" class="mb-0"></h6>
                            <small id="testimonialModalPosition" class="text-muted"></small>
                        </div>
                    </div>

                    <div id="testimonialModalContent"></div>
                </div>

            </div>
        </div>
    </div>

    </main>
    @include('layouts.frontend.footer')
    <div class="gtranslate_wrapper"></div>
    <script>
        window.gtranslateSettings = {
            "default_language": "en",
            "languages": ["en", "ja"],
            "wrapper_selector": ".gtranslate_wrapper",
            "flag_style": "3d",
            "alt_flags": {
                "en": "usa"
            }
        }
    </script>
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
    <script src="https://cdn.gtranslate.net/widgets/latest/float.js"></script>
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
<script>
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".clamp-text").forEach(function (el) {
        const btn = el.nextElementSibling;

        // Detect overflow
        if (el.scrollHeight > el.clientHeight) {
            btn.classList.remove("d-none");
        }

        btn.addEventListener("click", function () {
            el.classList.toggle("expanded");

            btn.textContent = el.classList.contains("expanded")
                ? "Read Less <"
                : "Read More >";
        });
    });
});
</script>
<script>
$(document).ready(function () {
    $('#contactFormHome').on('submit', function (e) {
        e.preventDefault();

        let form = this;
        let formData = new FormData(form);

        $('.error-text').text('');
        $('#form-success').addClass('d-none').text('');

        $.ajax({
            url: $(form).attr('action'),
            method: "POST",
            data: formData,
            contentType: false,
            processData: false,

            success: function (response) {
                if (response.status) {
                    $('#form-success')
                        .removeClass('d-none')
                        .text(response.message);

                    form.reset();
                }
            },

            error: function (xhr) {
                if (xhr.status === 422) {
                    $.each(xhr.responseJSON.errors, function (key, value) {
                        $('.' + key + '_error').text(value[0]);
                    });
                }
            }
        });
    });
});
</script>
<script>
$(document).ready(function () {
    $('#contactForm').on('submit', function (e) {
        e.preventDefault();

        let form = this;
        let formData = new FormData(form);

        $('.error-text').text('');
        $('#contact-success').addClass('d-none').text('');

        $.ajax({
            url: $(form).attr('action'),
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,

            success: function (response) {
                if (response.status) {
                    $('#contact-success')
                        .removeClass('d-none')
                        .text(response.message);

                    form.reset();
                }
            },

            error: function (xhr) {
                if (xhr.status === 422) {
                    $.each(xhr.responseJSON.errors, function (key, value) {
                        $('.' + key + '_error').text(value[0]);
                    });
                }
            }
        });
    });
});
</script>

<script>
(function () {

    function initTestimonials(scope = document) {
        scope.querySelectorAll('.testimonial-card-item').forEach(card => {
            if (card.dataset.processed) return;
            card.dataset.processed = 'true';

            const text = card.querySelector('.testimonial-text');
            const btn  = card.querySelector('[data-readmore]');

            if (!text || !btn) return;

            if (text.scrollHeight > text.clientHeight) {
                btn.classList.remove('d-none');
            }
        });
    }

    document.addEventListener('DOMContentLoaded', () => {
        initTestimonials();
    });

    // EVENT DELEGATION (critical)
    document.addEventListener('click', function (e) {
        const btn = e.target.closest('[data-readmore]');
        if (!btn) return;

        const card = btn.closest('.testimonial-card-item');
        if (!card) return;

        document.getElementById('testimonialModalName').textContent =
            card.dataset.name;

        document.getElementById('testimonialModalPosition').textContent =
            card.dataset.position;

        document.getElementById('testimonialModalImage').src =
            card.dataset.image;

        document.getElementById('testimonialModalContent').innerHTML =
            card.querySelector('.testimonial-text').dataset.full;

        const modal = bootstrap.Modal.getOrCreateInstance(
            document.getElementById('testimonialModal')
        );
        modal.show();
    });

})();
</script>


</body>

</html>

<script src="scrollScript.js"></script>
