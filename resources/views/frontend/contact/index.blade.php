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
    <!-- Start main-content -->
    <section class="page-title" style="background-image: url({{ $contact_page->banner_image ?? '' }});">
        <div class="auto-container">
            <div class="title-outer">
                <ul class="page-breadcrumb wow fadeInUp" data-wow-delay=".3s">
                    <li><a href="{{ route('frontend.home') }}">{{ $settings['home'] ?? '' }}</a></li>
                    <li><a href="{{ route('frontend.home') }}">{{ $contact_page->title ?? 'Contact Us' }}</a></li>
                </ul>
                <h1 class="title wow fadeInUp" data-wow-delay=".5s">{{ $contact_page->title ?? 'Contact Us' }}</h1>
            </div>
        </div>
    </section>

    <!-- Page Contact area start here -->
    <section class="contact-details fix section-padding">
        <div class="auto-container">
            {{-- <div class="row g-5">
                <div class="col-md-6 col-lg-4 wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="contact-details-block">
                        <div class="inner-box">
                            <div class="icon">
                                <i class="lnr-icon-map-marker"></i>
                            </div>
                            <h4 class="title">{{ $settings['address'] ?? '' }}</h4>
                            <p class="text">{{ $settings['contact_location'] ?? 'Kathmandu,Nepal' }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="contact-details-block">
                        <div class="inner-box">
                            <div class="icon">
                                <i class="lnr-icon-phone-handset"></i>
                            </div>
                            <h4 class="title">{{ $settings['phone'] ?? '' }}</h4>
                            <p class="text">{{ $settings['contact_phone'] ?? '+977 9803997680' }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="contact-details-block">
                        <div class="inner-box">
                            <div class="icon">
                                <i class="lnr-icon-envelope"></i>
                            </div>
                            <h4 class="title">{{ $settings['email-title'] ?? '' }}</h4>
                            <p class="text">{{ $settings['contact_email'] ?? 'info@samuraiblue.com' }}</p>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="mt-100">
                <div class="row g-5 align-items-start">

                    <!-- LEFT COLUMN: Contact boxes (stacked) -->
                    <div class="col-lg-5">
                        <div class="contact-details-block mb-4">
                            <div class="inner-box">
                                <div class="icon">
                                    <i class="lnr-icon-map-marker"></i>
                                </div>
                                <div>
                                    <h4 class="title">{{ $settings['address'] ?? '' }}</h4>
                                    <p class="text">{{ $settings['contact_location'] ?? '' }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="contact-details-block mb-4">
                            <div class="inner-box">
                                <div class="icon">
                                    <i class="lnr-icon-phone-handset"></i>
                                </div>
                                <div>

                                    <h4 class="title">{{ $settings['phone'] ?? '' }}</h4>
                                    <p class="text">{{ $settings['contact_phone'] ?? '' }}</p>
                                </div>
                            </div>

                        </div>

                        <div class="contact-details-block">
                            <div class="inner-box">
                                <div class="icon">
                                    <i class="lnr-icon-envelope"></i>
                                </div>
                                <div>
                                    <h4 class="title">{{ $settings['email-title'] ?? '' }}</h4>
                                    <p class="text">{{ $settings['contact_email'] ?? 'info@samuraiblue.com' }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- RIGHT COLUMN: Contact Form -->
                    {{-- <div class="col-lg-7"> --}}
                    <div class="col-lg-6 content-column">
                        <div class="inner-column right-column">
                            <div class="sec-title mb-30">
                                <h2 class="title wow splt-txt" data-splitting>{{ $settings['contact_title'] }}</h2>
                                <p class="text wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                                    {{ $settings['contact_description'] }}</p>
                            </div>
                            <form id="contactForm" action="{{ route('frontend.contact.submit') }}" method="POST">
                                @csrf

                                <div class="type-feild">
                                    <i class="fa-light fa-user"></i>
                                    <input type="text" name="name"
                                        placeholder="{{ $settings['your-name'] ?? '' }}*" />
                                    <span class="text-danger error-text name_error"></span>
                                </div>

                                <div class="type-feild">
                                    <i class="fa-light fa-envelope"></i>
                                    <input type="text" name="email"
                                        placeholder="{{ $settings['email-title'] ?? '' }}*" />
                                    <span class="text-danger error-text email_error"></span>
                                </div>

                                <div class="type-feild">
                                    <i class="fa-light fa-pen-to-square"></i>
                                    <textarea name="message" placeholder="{{ $settings['message'] ?? '' }}"></textarea>
                                    <span class="text-danger error-text message_error"></span>
                                </div>

                                <button type="submit" class="theme-btn btn-style-one rounded-0">
                                    {{ $settings['submit'] ?? '' }}
                                </button>
                            </form>

                            <div id="contact-success" class="alert alert-success d-none mt-3"></div>

                        </div>
                    </div>
                    {{-- </div> --}}

                </div>
            </div>
        </div>

    </section>
     <div class="google-map full-width-map mt-100">
            <iframe src="{{ $settings['site_location_url'] }}" style="border:0; width:100%; height:450px;" allowfullscreen
                loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    <!-- Page Contact area end here -->


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
