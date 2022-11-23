@extends('frontend.layouts.index')
@section('title', __('site.services-'))
@section('content')
        <!-- Inner Banner -->
        <div class="inner-banner">
            <div class="container">
                <div class="inner-title text-center">
                    <h3>{{ __('site.services') }}</h3>
                    <ul>
                        <li>
                            <a href="{{ route('front.home') }}">{{ __('site.home') }}</a>
                        </li>
                        <li>{{ __('site.services') }}</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- Blog Area -->
        <div class="blog-area pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <h2>{{ __('site.blog') }}</h2>
                    <div class="bar m-auto"></div>
                </div>

                <div class="row pt-45 justify-content-center">


                    @foreach ($services as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card">
                            <div class="blog-img">
                                <a href="{{ route('front.services.details', [str_replace(' ', '-', $item->url)]) }}">
                                    <img src="{{ asset('dashboard/services/' . $item->image) }}" alt="Blog Images">
                                </a>
                            </div>
                            <div class="content">
                                <ul>
                                    <li>
                                    </li>
                                </ul>
                                <h3><a href="{{ route('front.services.details', [str_replace(' ', '-', $item->url)]) }}">{{ $item->title }}</a></h3>
                            </div>
                        </div>
                    </div>
                    @endforeach



                </div>
            </div>
        </div>
        <!-- Blog Area End -->
@endsection
