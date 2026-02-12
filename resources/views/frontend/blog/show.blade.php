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
    @if ($blog_page)
        <section class="page-title" style="background-image: url({{ $blog_page->banner_image }});">
            <div class="auto-container">
                <div class="title-outer">
                    <ul class="page-breadcrumb wow fadeInUp" data-wow-delay=".3s">
                        <li><a href="{{ route('frontend.home') }}">Home</a></li>
                        <li><a href="{{ route('frontend.blog') }}">{{ $blog_page->title ?? '' }}</a></li>
                    </ul>
                    <h1 class="title wow fadeInUp" data-wow-delay=".5s">{{ $blogsingle->title ?? '' }}</h1>
                </div>
            </div>
        </section>
    @endif
    <section class="bg-white blog-detail-block">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="card border-0 ">
                        <img src="{{ $blogsingle->image }}" class="card-img-top  object-fit-cover" alt="Blog Image">
                        <div class="card-body p-4">
                            <h2 class="fw-bold mb-3">{{ $blogsingle->title }}</h2>
                            <div class="text-muted text-justify lh-lg">
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
