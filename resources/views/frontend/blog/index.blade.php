@section('seo')
    @include('frontend.seo', [
        'name' => $blog_page->seo_title ?? '',
        'title' => $blog_page->seo_title ?? ($blog_page->title ?? ''),
        'description' => $blog_page->meta_description ?? '',
        'keyword' => $blog_page->meta_keywords ?? '',
        'schema' => $blog_page->seo_schema ?? '',
        'created_at' => $blog_page->created_at ?? now(),
        'updated_at' => $blog_page->updated_at ?? now(),
    ])
@endsection
@extends('layouts.frontend.master')
@section('content')
    @if ($blog_page)
         <section class="page-title" style="background-image: url({{$blog_page->banner_image}});">
      <div class="auto-container">
		<div class="title-outer">
			<ul class="page-breadcrumb wow fadeInUp" data-wow-delay=".3s">
				<li><a href="{{ route('frontend.home') }}">Home</a></li>
				<li>{{ $blog_page->title ?? '' }}</li>
			</ul>
			<h1 class="title wow fadeInUp" data-wow-delay=".5s">{{ $blog_page->title ?? '' }}</h1>
		</div>
      </div>
    </section>
    @endif
    <section class="news-secton section-padding fix">
            <div class="auto-container">

                <div class="row">
                    @if (isset($blog) && $blog->count())
                        @foreach ($blog as $item)
                            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                                <div class="news-box-items">
                                    <div class="news-image">
                                        <img src="{{ $item->image }}" alt="img" />
                                        {{-- <img src="images/home-1/news/news-01.jpg" alt="img" /> --}}
                                        {{-- <span class="post-box">
                                           {{$item->created_at ?? 'now'}}
                                        </span> --}}
                                    </div>
                                    <div class="news-content">
                                        <h3>
                                            <a href="{{ route('frontend.blogsingle', $item->slug) }}">{{ $item->title ?? '' }}</a>
                                        </h3>
                                        <a href="{{ route('frontend.blogsingle', $item->slug) }}" class="link-btn">
                                            Learn More
                                            <span class="icon"><i class="lnr-icon-arrow-right"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    {{-- <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="news-box-items">
                            <div class="news-image">
                                <img src="{{ asset('frontend/assets/images/home-1/banner-2.jpeg') }}" alt="img" />
                                <span class="post-box">
                                    <span class="date">25</span>
                                    <span class="month">March</span>
                                </span>
                            </div>
                            <div class="news-content">

                                <h3>
                                    <a href="news-details.html">Government & public debate on foreign student
                                        support</a>
                                </h3>
                                <a href="news-details.html" class="link-btn">
                                    Learn More
                                    <span class="icon">
                                        <i class="lnr-icon-arrow-right"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="news-box-items">
                            <div class="news-image">
                                <img src="{{ asset('frontend/assets/images/home-1/banner-1.jpg') }}" alt="img" />
                                <span class="post-box">
                                    <span class="date">30</span>
                                    <span class="month">March</span>
                                </span>
                            </div>
                            <div class="news-content">

                                <h3>
                                    <a href="news-details.html">Policy responses to international student </a>
                                </h3>
                                <a href="news-details.html" class="link-btn">
                                    Learn More
                                    <span class="icon">
                                        <i class="lnr-icon-arrow-right"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
@endsection
