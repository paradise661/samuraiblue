@section('seo')
    @include('frontend.seo', [
        'name' => $service_page->seo_title ?? '',
        'title' => $service_page->seo_title ?? $service_page->title ?? '',
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
            <img src="{{$service_page->banner_image}}" class="w-100 h-100 object-fit-cover position-absolute top-0 start-0" alt="Blog Banner">
            <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to right, rgba(0,0,0,0.7), rgba(0,0,0,0.3));"></div>
            <div class="container h-100 position-relative d-flex align-items-center">
                <div class="text-white">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb text-white-50 mb-3">
                            <li class="breadcrumb-item">
                                <a href="#" class="text-white text-decoration-none">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#" class="text-white text-decoration-none">services</a>
                            </li>
                            <li class="breadcrumb-item active text-white" aria-current="page">
                                find a job at sumarai blue
                            </li>
                        </ol>
                    </nav>
                    <h1 class="fw-bold display-5"> SSW Visa</h1>
                </div>
            </div>
        </section>
        <section class="service-detail">
            <div class="container">
                <div class="service-detail-content">
                    <h2 class="section-heading-title">SSW Visa</h2>
                    <img class="service-detail-img" src="./images/ssw.jpg" alt="">
                    <p class="service-detail-description">
                         As a general rule, foreign national who intend to entry into Japan must
                         acquire a "visa" at the embassy of Japan (an organization of the Ministry
                         of Foreign Affairs, the headquarters for Japanese Government representatives
                         serving) in a foreign country, but this does not mean that you are guaranteed
                         entry into Japan if obtaining a visa. When you arrive in Japan, you need to
                         undergo the necessary examination by the Immigration Services Agency of Japan
                         at the airport and aquire a "Status of Residence" according to the activity you
                         are trying to conduct in Japan. if you want to work here you have to understand
                          the work ethics carefully as well. In light of this, acquisition of "visa" and
                         "Status of Residence" are separate procedures that fall under the jurisdiction
                         of different organizations. The SSW introduced on this page is a type of newly
                         established "Status of Residence".The SSW has two types, "Specified Skilled Worker"
                         - (i) and (ii) The SSW (Specified Skilled Worker) visa is a Japanese residency
                         status for foreign nationals to work in sectors facing labor shortages, like
                         caregiving, construction, and food service, requiring Japanese language/skill
                         tests for Type I (up to 5 years, limited family) and more advanced skills for
                         Type II (longer stay, family allowed). Introduced in 2019, it's a pathway for
                         skilled workers to contribute to Japan's economy, with support available for
                         daily life and job matching.
                    </p>
                </div>
                <div class="section-heading mt-4 pt-4">
                    <h2 class="section-heading-title">Find out the suitable job for you!</h2>
                    <!-- <p class="section-heading-para">Find out the suitable job for you!</p> -->
                </div>
                <div class="service-detail-card-block my-4 py-4">
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6">
                            <div class="service-detail-card">
                                <img src="images/why-us-img.jpg" alt="Cleaning Staff">
                                <div class="card-overlay">
                                    <span class="badge">Part-time</span>
                                    <h5>Cleaning Staff</h5>
                                    <p>Office, hotel and facility cleaning work.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="service-detail-card">
                                <img src="images/blog.jpeg" alt="Kitchen Assistant">
                                <div class="card-overlay">
                                    <span class="badge">Shift Work</span>
                                    <h5>Kitchen Assistant</h5>
                                    <p>Food prep, dishwashing and kitchen support.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="service-detail-card">
                                <img src="images/office-skyscrapers-business-district.jpg" alt="Warehouse Assistant">
                                <div class="card-overlay">
                                    <span class="badge">SSW Eligible</span>
                                    <h5>Warehouse Assistant</h5>
                                    <p>Packing, sorting and goods handling tasks.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
