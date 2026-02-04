@section('seo')
    @include('frontend.seo', [
    'name' => $team_page->seo_title ?? '',
    'title' => $team_page->seo_title ?? $team_page->title ?? '',
    'description' => $team_page->meta_description ?? '',
    'keyword' => $team_page->meta_keywords ?? '',
    'schema' => $team_page->seo_schema ?? '',
    'created_at' => $team_page->created_at,
    'updated_at' => $team_page->updated_at,
])
@endsection
@extends('layouts.frontend.master')
@section('content')
    @if ($team_page)
      <section class="position-relative" style="height: 420px;">
            <img src="{{ $team_page->banner_image ?? '' }}" class="w-100 h-100 object-fit-cover position-absolute top-0 start-0"
                alt="Blog Banner">
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
                                <a href="#" class="text-white text-decoration-none">team</a>
                            </li>
                        </ol>
                    </nav>
                    <h1 class="fw-bold display-5">{{ $team_page->title ?? ''}}</h1>
                </div>
            </div>
        </section>
    @endif

  <section class="team-section pb-5">
        <div class="container">
            <div class="section-heading py-4">
                <h2 class="section-heading-title">{{ $settings['teams_title'] }}</h2>
                <p class="section-heading-para">{{ $settings['teams_subtitle'] }}</p>
            </div>
            <div class="row g-4">
                @foreach ($teams as $team)
                    <div class="col-lg-4 col-md-6">
                        <div class="team-card">
                            <img src="{{ $team->image }}" alt="team image">
                            <div class="team-info py-4">
                                <h5>{{ $team->name }}</h5>
                                <p>{{ $team->position }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
