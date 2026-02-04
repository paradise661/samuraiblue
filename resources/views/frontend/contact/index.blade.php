@extends('layouts.frontend.master')

@section('seo')
    @include('frontend.seo', [
        'name' => $contact_page->seo_title ?? '',
        'title' => $contact_page->seo_title ?? ($contact_page->title ?? ''),
        'description' => $contact_page->meta_description ?? '',
        'keyword' => $contact_page->meta_keywords ?? '',
        'schema' => $contact_page->seo_schema ?? '',
        'created_at' => $contact_page->created_at,
        'updated_at' => $contact_page->updated_at,
    ])
@endsection
@section('content')
    @if ($contact_page)
        <section class="position-relative" style="height: 420px;">
            <img src="{{ $contact_page->banner_image }}" class="w-100 h-100 object-fit-cover position-absolute top-0 start-0"
                alt="contact Banner">
            <div class="position-absolute top-0 start-0 w-100 h-100"
                style="background: linear-gradient(to right, rgba(0,0,0,0.7), rgba(0,0,0,0.3));"></div>
            <div class="container h-100 position-relative d-flex align-items-center">
                <div class="text-white">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb text-white-50 mb-3">
                            <li class="breadcrumb-item">
                                <a href="#" class="text-white text-decoration-none">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#"
                                    class="text-white text-decoration-none">{{ $contact_page->title ?? 'Contact Us' }}</a>
                            </li>
                        </ol>
                    </nav>
                    <h1 class="fw-bold display-5"> {{ $contact_page->title ?? 'Contact Us' }}</h1>
                </div>
            </div>
        </section>
    @endif
    {{-- <div class="container py-5">
        <div class="row text-center">

            <div class="col-lg-4 mb-5">
                <div class="contact-item">
                    <i class="ri-map-pin-line"></i>
                    <h6>Office Location</h6>
                    <p>{{ $settings['contact_location'] ?? 'Bharatpur, Nepal' }}</p>
                </div>
            </div>

            <div class="col-lg-4 mb-5">
                <div class="contact-item">
                    <i class="ri-mail-line"></i>
                    <h6>Email Address</h6>
                    <a href="mailto:{{ $settings['contact_email'] ?? 'mail@gmail.com' }}">
                        {{ $settings['contact_email'] ?? 'mail@gmail.com' }}
                    </a>
                </div>
            </div>

            <div class="col-lg-4 mb-5">
                <div class="contact-item">
                    <i class="ri-phone-line"></i>
                    <h6>Phone Number</h6>
                    <p>{{ $settings['contact_phone'] ?? '+977-XXXXXXXX' }}</p>
                </div>
            </div>

        </div>
    </div> --}}
    <section class="py-5 contact-page">

        <div class="container">

            <!-- Title -->
            <div class="text-center mb-4">
                <h2>Contact Us</h2>
            </div>

            <!-- Map + Form -->
            <div class="contact-main p-4 py-3">
                <div class="row align-items-center">

                  
                    <div class="container py-5">
                        <div class="row text-center">

                            <div class="col-lg-4 mb-4">
                                <div class="contact-item">
                                    <i class="ri-map-pin-line"></i>
                                    <h6>Office Location</h6>
                                    <p>{{ $settings['contact_location'] ?? 'Bharatpur, Nepal' }}</p>
                                </div>
                            </div>

                            <div class="col-lg-4 mb-4">
                                <div class="contact-item">
                                    <i class="ri-mail-line"></i>
                                    <h6>Email Address</h6>
                                    <a href="mailto:{{ $settings['contact_email'] ?? 'mail@gmail.com' }}">
                                        {{ $settings['contact_email'] ?? 'mail@gmail.com' }}
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-4 mb-4">
                                <div class="contact-item">
                                    <i class="ri-phone-line"></i>
                                    <h6>Phone Number</h6>
                                    <p>{{ $settings['contact_phone'] ?? '+977-XXXXXXXX' }}</p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Form (RIGHT) -->
                    <div class="col-lg-6">
                        <form class="px-4" action="{{ route('frontend.contact.submit') }}" method="post">
                            @csrf
                            @method('post')

                            <div class="heading-title-contact center mt-1">
                                {{ $settings['contact_section_title'] ?? 'Get In Touch' }}
                            </div>

                            <div class="form-group">
                                <label for="name">First Name <i class="ri-asterisk asterisk"></i></label>
                                <input id="name" type="text" name="name" required>
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone Number <i class="ri-asterisk asterisk"></i></label>
                                <input id="phone" type="tel" name="phone" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Email <i class="ri-asterisk asterisk"></i></label>
                                <input id="email" type="email" name="email" required>
                            </div>

                            <div class="form-group">
                                <label for="message">Message <i class="ri-asterisk asterisk"></i></label>
                                <textarea id="message" name="message" rows="5" required></textarea>
                            </div>

                            <div class="form-group center">
                                <button class="custom-btn btn-8">
                                    <span>Contact Us <i class="ri-arrow-right-up-line"></i></span>
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            <!-- Contact Info (BOTTOM) -->

            <div class="map">
                <iframe src="{{ $settings['contact_map'] ?? '' }}" width="100%" height="450" style="border:0;"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>

        </div>
    </section>

    @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Toastify({
                    text: "{{ session('success') }}",
                    duration: 3000,
                    gravity: "top", // top or bottom
                    position: "right", // left, center or right
                    backgroundColor: "#4BB543", // green success color
                    stopOnFocus: true,
                }).showToast();
            });
        </script>
    @endif
@endsection
