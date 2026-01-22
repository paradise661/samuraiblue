@section('seo')
    @include('frontend.seo', [
        'name' => $blogsingle->seo_title ?? '',
        'title' => $blogsingle->seo_title ?? $blogsingle->title,
        'description' => $blogsingle->meta_description ?? '',
        'keyword' => $blogsingle->meta_keywords ?? '',
        'schema' => $blogsingle->seo_schema ?? '',
        'created_at' => $blogsingle->created_at,
        'updated_at' => $blogsingle->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')
@section('content')
    <section class="position-relative" style="height: 420px;">
            <img src="./images/banner-1.jpg" class="w-100 h-100 object-fit-cover position-absolute top-0 start-0" alt="Blog Banner">
            <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to right, rgba(0,0,0,0.7), rgba(0,0,0,0.3));"></div>
            <div class="container h-100 position-relative d-flex align-items-center">
                <div class="text-white">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb text-white-50 mb-3">
                            <li class="breadcrumb-item">
                                <a href="#" class="text-white text-decoration-none">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#" class="text-white text-decoration-none">Blogs</a>
                            </li>
                            <li class="breadcrumb-item active text-white" aria-current="page">
                                find a job at sumarai blue
                            </li>
                        </ol>
                    </nav>
                    <h1 class="fw-bold display-5"> find a job at sumarai blue</h1>
                </div>
            </div>
        </section>
        <section class="py-5 bg-white">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-8">
                        <div class="card border-0">
                            <img src="./images/blog.jpeg" class="card-img-top" alt="Blog Image">
                            <div class="card-body p-4">
                                <h2 class="fw-bold mb-3"> How to Find the Right Job in a Competitive Market</h2>
                                <div class="text-muted lh-lg">
                                    Finding the right job in today’s competitive market can feel overwhelming,
                                    especially with thousands of opportunities available online. The key is not
                                    applying everywhere, but applying smartly. Start by clearly identifying your
                                    skills, interests, and long-term career goals. Tailor your resume for each
                                    role, highlighting achievements rather than responsibilities. Employers look
                                    for impact, not job descriptions copied from the internet. Networking also
                                    plays a crucial role. Engaging with industry professionals, attending
                                    virtual events, and maintaining an updated LinkedIn profile can open doors
                                    to opportunities that are never publicly advertised. Finally, stay consistent.
                                    Job searching is a process, not a one-day task. Small, focused efforts every
                                    day lead to meaningful results.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <h4 class="fw-semibold mb-4">Popular Blogs</h4>
                            <a href="#" class="d-flex align-items-center mb-3 text-decoration-none text-dark">
                                <img
                                    src="./images/why-us-img.jpg"
                                    class="rounded"
                                    style="width: 70px; height: 70px; object-fit: cover;"
                                    alt=""
                                >
                                <div class="ms-3">
                                    <h6 class="mb-0 fw-medium hover-text-primary">
                                        This is blog title
                                    </h6>
                                </div>
                            </a>
                            <a href="#" class="d-flex align-items-center mb-3 text-decoration-none text-dark">
                                <img
                                    src="./images/why-us-img.jpg"
                                    class="rounded"
                                    style="width: 70px; height: 70px; object-fit: cover;"
                                    alt=""
                                >
                                <div class="ms-3">
                                    <h6 class="mb-0 fw-medium hover-text-primary">
                                        This is blog title
                                    </h6>
                                </div>
                            </a>
                            <a href="#" class="d-flex align-items-center text-decoration-none text-dark">
                                <img
                                    src="./images/why-us-img.jpg"
                                    class="rounded"
                                    style="width: 70px; height: 70px; object-fit: cover;"
                                    alt=""
                                >
                                <div class="ms-3">
                                    <h6 class="mb-0 fw-medium hover-text-primary">
                                        This is blog title
                                    </h6>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
