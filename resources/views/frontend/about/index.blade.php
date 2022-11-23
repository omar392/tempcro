@extends('frontend.layouts.index')
@section('title', __('site.about-'))
@section('content')
        <!-- Inner Banner -->
        <div class="inner-banner">
            <div class="container">
                <div class="inner-title text-center">
                    <h3>{{ __('site.about') }}</h3>
                    <ul>
                        <li>
                            <a href="{{ route('front.home') }}">{{ __('site.home') }}</a>
                        </li>
                        <li>{{ __('site.about') }}</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- About Area -->
        <div class="about-area pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <div class="row">
                                <div class="col-6">
                                    <img src="{{ asset('dashboard/' . $cover->image_about) }}" style="width: 306px;height: 510px;" alt="Images">
                                </div>
                                <div class="col-6">
                                    <img src="{{ asset('dashboard/' . $cover->image_about_2) }}" style="width: 306px;height: 510px;" alt="Images">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="about-content pl-20">
                            <div class="section-title">
                                <h2>{{ __('site.about') }}</h2>
                                <div class="bar"></div>
                                <p>{!! $about->about !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Area End -->

        <!-- about Area -->
        <div class="services-area pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <h2>{{ __('site.read') }}</h2>
                    <div class="bar m-auto"></div>

                </div>

                <div class="row pt-45 justify-content-center">
                    <div class="col-lg-4 col-6">
                        <div class="services-card">
                            <i class="ri-flashlight-line services-bg1"></i>
                            <h3><a>{{ __('site.mission') }}</a></h3>
                            <p>{!! $about->mission !!}</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-6">
                        <div class="services-card">
                            <i class="ri-file-cloud-line services-bg2"></i>
                            <h3><a>{{ __('site.vision') }}</a></h3>
                            <p>{!! $about->vision !!}</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-6">
                        <div class="services-card">
                            <i class="ri-briefcase-2-line services-bg3"></i>
                            <h3><a>{{ __('site.goals') }}</a></h3>
                            <p>{!! $about->goals !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about Area End -->
@endsection
