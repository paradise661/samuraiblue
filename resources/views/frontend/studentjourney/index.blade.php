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
    <section class="page-title" style="background-image: url({{ $studentjourney->banner_image ?? ' ' }});">
        <div class="auto-container">
            <div class="title-outer">
                <ul class="page-breadcrumb wow fadeInUp" data-wow-delay=".3s">
                    <li><a href="{{ route('frontend.home') }}">Home</a></li>
                    <li><a href="{{ route('frontend.home') }}">{{ $studentjourney->title ?? 'Student Journey' }}</a></li>
                </ul>
                <h1 class="title wow fadeInUp" data-wow-delay=".5s">{{ $studentjourney->title ?? 'Student Journey' }}</h1>
            </div>
        </div>
    </section>

    <!-- Service Section Start -->
    {{-- <section class="service-section-2 section-padding fix pt-0">
        <div class="auto-container">
            <div class="row">
                @foreach ($studentsteps as $key => $studentstep)
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="service-card-items-2">
                            <div class="service-icon">
                                <div class="icon">
                                    <img src="{{ $studentstep->image }}">
                                    <div class="service-triangle"></div>
                                </div>
                            </div>
                            <div class="content">
                                <h3><a
                                        href="{{ route('frontend.studentjourneysingle', $studentstep->slug) }}">{{ $studentstep->title }}</a>
                                </h3>
                                <div style="font-size: 17px;
    color: #6e6b6b;
    font-weight: 400;"
                                    class="line-clamp-5 text-justify">
                                    {{ $studentstep->short_description }}
                                </div>
                            </div>

                        </div>
                        <a class="stretched-link"
                            href="{{ route('frontend.studentjourneysingle', $studentstep->slug) }}"></a>

                    </div>
                @endforeach
            </div>
        </div>
    </section> --}}
    <section class="service-section-4 section-padding section-bg fix">
        <div class="container-fluid">
            <div class="row g-4">
                @foreach ($studentsteps as $key => $studentstep)
                    <div class="col-xxl-3 col-lg-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="service-card-items-4">
                            <div class="service-icon">
                                <div class="icon">
                                    {{-- <i class="flaticon-business-054-graph"></i> --}}
                                    <img src="{{ $studentstep->image }}">
                                </div>
                                <span class="number">
                                    0{{ $key + 1 }}

                                </span>
                            </div>
                            <div class="content">
                                <h3><a href="{{ route('frontend.studentjourneysingle', $studentstep->slug) }}">{{ $studentstep->title }}</a></h3>
                                <div style="font-size: 17px;
    color: #6e6b6b;
    font-weight: 400;"
                                    class="line-clamp-5 text-justify">
                                    {{ $studentstep->short_description }}
                                </div>
                            </div>
                        </div>
                          <a class="stretched-link"
                            href="{{ route('frontend.studentjourneysingle', $studentstep->slug) }}"></a>

                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
