@section('seo')
    @include('frontend.seo', [
        'name' => $service_page->seo_title ?? '',
        'title' => $service_page->seo_title ?? $service_page->title,
        'description' => $service_page->meta_description ?? '',
        'keyword' => $service_page->meta_keywords ?? '',
        'schema' => $service_page->seo_schema ?? '',
        'created_at' => $service_page->created_at,
        'updated_at' => $service_page->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')
@section('content')
    <section class="position-relative" style="height: 420px;">
        <img src="./images/office-skyscrapers-business-district.jpg"
            class="w-100 h-100 object-fit-cover position-absolute top-0 start-0" alt="Blog Banner">
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
                            <a href="#" class="text-white text-decoration-none">Services</a>
                        </li>
                        <!-- <li class="breadcrumb-item active text-white" aria-current="page">
                                    find a job at sumarai blue
                                </li> -->
                    </ol>
                </nav>
                <h1 class="fw-bold display-5"> find a job at sumarai blue</h1>
            </div>
        </div>
    </section>
    <section class="features-section py-5">
        <div class="container">
            <div class="row g-4">
                 @foreach ($services as $item)
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card text-center">
                        <div class="icon-box">
                            <i class="{{$item->icon}}"></i>
                        </div>
                        <h5 class="feature-card-title">{{ $item->title }}</h5>
                        <p class="feature-card-desc">
                          {{$item->short_description}}
                        </p>
                    </div>
                </div>
                    @endforeach
                {{-- <div class="col-lg-3 col-md-6">
                    <div class="feature-card text-center">
                        <div class="icon-box">
                            <i class="ri-customer-service-2-line"></i>
                        </div>
                        <h5 class="feature-card-title">SSW Visa</h5>
                        <p class="feature-card-desc">
                            Our SSW visa services help skilled workers secure legal employment overseas by assisting with
                            eligibility checks, paperwork, and application processing tailored to your profession.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card text-center">
                        <div class="icon-box">
                            <i class="ri-home-office-line"></i>
                        </div>
                        <h5 class="feature-card-title">Rental Services</h5>
                        <p class="feature-card-desc">
                            We help you discover reliable rental homes and apartments that match your budget and location
                            preferences, ensuring comfort, safety, and hassle-free arrangements.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card text-center">
                        <div class="icon-box">
                            <i class="ri-search-line"></i>
                        </div>
                        <h5 class="feature-card-title">Job Search</h5>
                        <p class="feature-card-desc">
                            Our job search service matches your skills with verified employers, helping you find suitable
                            jobs faster through professional guidance, application support, and career advice.
                        </p>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
@endsection
