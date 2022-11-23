@extends('frontend.layouts.index')
@section('content')
        <!-- Inner Banner -->
        <div class="inner-banner">
            <div class="container">
                <div class="inner-title text-center">
                    <h3>{{ $service->title }}</h3>
                    <ul>
                        <li>
                            <a href="{{ route('front.home') }}">{{ __('site.home') }}</a>
                        </li>
                        <li>{{  $service->title }}</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- Blog Details Area -->
        <div class="blog-details-area pt-100 pb-70">
            <div class="container">
                <div class="blog-details-content">
                    <div class="content">
                        <h2>{{ $service->title }}</h2>

                    </div>
                </div>

                <div class="blog-preview-img">
                    <img src="{{ asset('dashboard/services/' . $service->image) }}" alt="Blog Images">
                </div>

                <div class="blog-details-content">

                    <div class="blog-articel">
                        <h3>{{ $service->title }}</h3>
                        <div class="bar"></div>
                        <p>{!! $service->description !!}</p>
                    </div>
                    <div class="article-share-area">
                        <div class="row align-items-center">
                            <div class="col-lg-9 col-sm-9">
                                <div class="article-social-icon">
                                    <ul class="social-icon">
                                        <li class="title">{{ __('site.follow') }}</li>
                                        <li>
                                            <a href="{{ $setting->facebook }}" target="_blank">
                                                <i class="ri-snapchat-fill"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ $setting->instagram }}" target="_blank">
                                                <i class="ri-instagram-fill"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ $setting->twitter }}" target="_blank">
                                                <i class="ri-twitter-fill"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ $setting->linkedin }}" target="_blank">
                                                <i class="ri-linkedin-fill"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Blog Details Area End -->
@endsection
