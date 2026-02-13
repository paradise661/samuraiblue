@extends('layouts.frontend.master')
@section('seo')
    @include('frontend.seo', [
        'name' => $studentjourney->seo_title ?? '',
        'title' => $studentjourney->seo_title ?? ($studentjourney->title ?? ''),
        'description' => $studentjourney->meta_description ?? '',
        'keyword' => $studentjourney->meta_keywords ?? '',
        'schema' => $studentjourney->seo_schema ?? '',
        'created_at' => $studentjourney->created_at ?? now(),
        'updated_at' => $studentjourney->updated_at ?? now(),
    ])
@endsection
@section('content')
    <!-- Start main-content -->
    <section class="page-title" style="background-image: url(images/inner/page-title-bg.jpg);">
        <div class="auto-container">
            <div class="title-outer">
                <ul class="page-breadcrumb wow fadeInUp" data-wow-delay=".3s">
                    <li><a href="{{ route('frontend.home') }}">Home</a></li>
                    <li><a
                            href="{{ route('frontend.studentjourney') }}">{{ $studentjourney->title ?? 'Student Journey' }}</a>
                    </li>
                    <li>{{ $studentjourneysingle->title }}</li>
                </ul>
                <h1 class="title wow fadeInUp" data-wow-delay=".5s">{{ $studentjourneysingle->title }}</h1>
            </div>
        </div>
    </section>
    <section class="bg-white blog-detail-block">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="card border-0 ">
                        {{-- <img src="{{ $studentjourneysingle->image }}" class="card-img-top  object-fit-cover" alt="Blog Image"> --}}
                        <div class="card-body p-4">
                            <h2 class="fw-bold mb-3">{{ $studentjourneysingle->title }}</h2>
                            <div class="text-muted text-justify lh-lg">
                                {!! $studentjourneysingle->description !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0 shadow-sm sticky-sidebar">
                        <div class="card-body">
                            <h4 class="fw-semibold mb-4">Other Processes</h4>
                            @foreach ($studentsteps as $item)
                                <a href="{{ route('frontend.studentjourneysingle', $item->slug) }}"
                                    class="d-flex stretched-card-link align-items-center mb-3 text-decoration-none text-dark">
                                    <img src="{{ $item->image }}" class="rounded"
                                        style="width: 70px; height: 70px; object-fit: cover;" alt="{{ $item->title }}">
                                    <div class="ms-3">
                                        <h6 class="mb-0 fw-medium hover-text-primary">
                                            {{ $item->title }}
                                        </h6>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
