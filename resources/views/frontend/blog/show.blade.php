@section('seo')
    @include('frontend.seo', [
        'name' => $blogsingle->seo_title ?? '',
        'title' => $blogsingle->seo_title ?? ($blogsingle->title ?? ''),
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
        <img src="{{ $blog_page->image }}" class="w-100 h-100 object-fit-cover position-absolute top-0 start-0"
            alt="Blog Banner">
        <div class="position-absolute top-0 start-0 w-100 h-100"
            style="background: linear-gradient(to right, rgba(0,0,0,0.7), rgba(0,0,0,0.3));"></div>
        <div class="container h-100 position-relative d-flex align-items-center">
            <div class="text-white">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-white-50 mb-3">
                        <li class="breadcrumb-item">
                            <a href="{{ route('frontend.home') }}" class="text-white text-decoration-none">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#" class="text-white text-decoration-none">Blogs</a>
                        </li>
                        <li class="breadcrumb-item active text-white" aria-current="page">
                            {{ $blogsingle->title ?? '' }}
                        </li>
                    </ol>
                </nav>
                <h1 class="fw-bold display-5">{{ $blog_page->title }}</h1>
            </div>
        </div>
    </section>
    <section class="py-5 bg-white blog-detail-block">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="card border-0 ">
                        <img src="{{ $blogsingle->image }}" class="card-img-top  object-fit-cover" alt="Blog Image">
                        <div class="card-body p-4">
                            <h2 class="fw-bold mb-3">{{ $blogsingle->title }}</h2>
                            <div class="text-muted lh-lg">
                                {!! $blogsingle->description !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0 shadow-sm sticky-sidebar">
                        <div class="card-body">
                            <h4 class="fw-semibold mb-4">Popular Blogs</h4>
                            @foreach ($blogs as $blog)
                                <a href="{{ route('frontend.blogsingle', $blog->slug) }}"
                                    class="d-flex stretched-card-link align-items-center mb-3 text-decoration-none text-dark">
                                    <img src="{{ $blog->image }}" class="rounded"
                                        style="width: 70px; height: 70px; object-fit: cover;" alt="{{ $blog->title }}">
                                    <div class="ms-3">
                                        <h6 class="mb-0 fw-medium hover-text-primary">
                                            {{ $blog->title }}
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
