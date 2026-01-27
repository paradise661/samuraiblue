@extends('layouts.frontend.master')

@section('seo')
    @include('frontend.seo', [
        'name' => $contact_page->seo_title ?? '',
        'title' => $contact_page->seo_title ?? $contact_page->title,
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
    <div class="container pt-4">
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card shadow contact-card">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2 gap-2">
                            <i class="ri-map-pin-line contact-icon ri-5x"></i>
                            <div>
                                <p class="contact-css mb-0">Office Location</p>
                                <p class="bodypart-css">{{ $settings['contact_location'] }}</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card shadow contact-card">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2 gap-2">
                            <i class="ri-mail-line contact-icon ri-5x"></i>
                            <div>
                                <p class="contact-css mb-0">Email Address</p>
                                <a href="mailto:{{ $settings['contact_email'] ?? 'mail@gmail.com' }}"
                                    class="bodypart-css">{{ $settings['contact_email'] }}</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card shadow contact-card">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2 gap-2">
                            <i class="ri-phone-line contact-icon ri-5x"></i>
                            <div>
                                <p class="contact-css mb-0">WhatsApp / Phone</p>
                                <p class="bodypart-css">{{ $settings['contact_phone'] }}</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class=" py-5 contact-page">
        <div class="container contact-main shadow p-4 py-3 ">
            <div class="row d-flex align-items-center justify-content-center ">
                <div class="col-md-12  ">
                    <div class="">
                        <form class=" px-4 " action="" method="post">
                            @csrf
                            @method('post')
                            <div class="heading-title-contact  center mt-1">
                                {{ $settings['contact_section_title'] ?? 'Get In Touch' }} </div>
                            <div class="form-group">
                                <label for="name">First Name <i class="ri-asterisk asterisk"></i></label>
                                <input id="name" type="text" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number <i class="ri-asterisk asterisk"></i></label>
                                <input id="phone" type="tel" name="phone" placeholder="" required>
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
                                <a href="{{ route('frontend.contact.submit') }}">
                                    <button class="custom-btn btn-8"><span>Contact Us <i
                                                class="ri-arrow-right-up-line"></i></span></button>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="map pt-5">
                <iframe
                    src="{{ $settings['contact_map'] ?? '' }}"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
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
