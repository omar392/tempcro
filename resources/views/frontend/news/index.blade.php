@extends('frontend.layouts.index')
@section('title', __('site.news-'))
@section('content')
        <!-- Inner Banner -->
        <div class="inner-banner">
            <div class="container">
                <div class="inner-title text-center">
                    <h3>{{ __('site.news') }}</h3>
                    <ul>
                        <li>
                            <a href="{{ route('front.home') }}">{{ __('site.home') }}</a>
                        </li>
                        <li>{{ __('site.news') }}</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- Blog Area -->
        <div class="blog-area pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <h2>{{ __('site.news') }}</h2>
                    <div class="bar m-auto"></div>
                </div>

                <div class="row pt-45 justify-content-center">


                    @foreach ($news as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card">
                            <div class="blog-img">
                                <a href="{{ route('front.news.details', [str_replace(' ', '-', $item->url)]) }}">
                                    <img src="{{ asset('dashboard/news/' . $item->image) }}" alt="Blog Images">
                                </a>
                            </div>
                            <div class="content">
                                <ul>
                                    <li>
                                    </li>
                                </ul>
                                <h3><a href="{{ route('front.news.details', [str_replace(' ', '-', $item->url)]) }}">{{ $item->title }}</a></h3>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <div class="col-lg-12 col-md-12 text-center">
                        {{ $blogs->links('vendor.pagination.custom')}}
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Area End -->
@endsection
