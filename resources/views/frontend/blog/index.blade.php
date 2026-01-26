@section('seo')
    @include('frontend.seo', [
        'name' => $blog_page->seo_title ?? '',
        'title' => $blog_page->seo_title ?? $blog_page->title,
        'description' => $blog_page->meta_description ?? '',
        'keyword' => $blog_page->meta_keywords ?? '',
        'schema' => $blog_page->seo_schema ?? '',
        'created_at' => $blog_page->created_at,
        'updated_at' => $blog_page->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')
@section('content')
    <section class="position-relative" style="height: 420px;">
        <img src="{{$blog_page->image}}"
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
                            <a href="#" class="text-white text-decoration-none">Blog</a>
                        </li>
                        <!-- <li class="breadcrumb-item active text-white" aria-current="page">
                                                    find a job at sumarai blue
                                                </li> -->
                    </ol>
                </nav>
                <h1 class="fw-bold display-5">{{ $blog_page->title }}</h1>
            </div>
        </div>
    </section>
    <section class="blog-section my-4 py-4">
        <div class="container">
            <div class="blog-block">
                <div class="row g-4">
                    @foreach ($blog as $item)
                        <div class="col-lg-4 col-md-6">
                            <a href="{{ route('frontend.blogsingle', $item->slug) }}"
                                class="d-flex stretched-card-link align-items-center mb-3 text-decoration-none text-dark">

                                <div class="blog-card">
                                    <div class="blog-image">
                                        <img src="{{ $item->image }}" alt="Blog image">
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-meta">
                                            <span>{{ $item->short_description }}</span>
                                            <span> {{ $item->created_at->format('d M Y') }}</span>
                                        </div>
                                        <h5 class="blog-title">
                                            {{ $item->title }}
                                        </h5>
                                        <div class="blog-desc line-clamp-3">
                                            {!! $item->description !!} </div>
                                        <div class="blog-read">READ
                                            MORE</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
