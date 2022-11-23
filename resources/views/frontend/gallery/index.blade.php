@extends('frontend.layouts.index')
@section('title', __('site.gallery-'))
@section('content')
    <!-- Inner Banner -->
    <div class="inner-banner">
        <div class="container">
            <div class="inner-title text-center">
                <h3>{{ __('site.gallery') }}</h3>
                <ul>
                    <li>
                        <a href="{{ route('front.home') }}">{{ __('site.home') }}</a>
                    </li>
                    <li>{{ __('site.gallery') }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- Employers Details Area -->
    <div class="employers-details-area pt-100 pb-70">
        <div class="container">
            <div class="row">


                <div class="col-lg-12">
                    <div class="employers-details-content">
                        <div class="employers-details-portfolio">
                            <h3>{{ __('site.gallery') }}</h3>
                            <div class="bar"></div>
                            <div class="row gallery-photo">

                                @foreach ($gallery as $item)
                                <div class="col-lg-4 col-6 col-md-3">
                                    <div class="employers-details-portfolio-img">
                                        <a href="{{ asset('dashboard/galleries/' . $item->image) }}">
                                            <img src="{{ asset('dashboard/galleries/' . $item->image) }}" alt="Images">
                                        </a>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>

                    <div class="col-lg-12 col-md-12 text-center">
                        {{ $blogs->links('vendor.pagination.custom')}}
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Employers Details Area End -->
@endsection
