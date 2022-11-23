@extends('frontend.layouts.index')
@section('title', __('site.faqs-'))
@section('content')
    <!-- Inner Banner -->
    <div class="inner-banner">
        <div class="container">
            <div class="inner-title text-center">
                <h3> {{ __('site.faq') }}</h3>
                <ul>
                    <li>
                        <a href="{{ route('front.home') }}">{{ __('site.home') }}</a>
                    </li>
                    <li> {{ __('site.faq') }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- FAQ Area -->
    <div class="faq-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <h2>{{ __('site.faq') }}</h2>
                <div class="bar m-auto"></div>
            </div>
            <div class="row pt-45">
                <div class="col-lg-6">
                    <div class="faq-accordion">
                        <ul class="accordion">

                            @foreach ($faqs as $item)
                                @if ($loop->iteration % 2 != 0)
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="ri-arrow-down-s-line"></i>
                                            {{ $item->ask }}
                                        </a>
                                        <div class="accordion-content">
                                            <p>
                                                {{ $item->answer }}
                                            </p>
                                        </div>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="faq-accordion">
                        <ul class="accordion">
                            @foreach ($faqs as $item)
                                @if ($loop->iteration % 2 == 0)
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="ri-arrow-down-s-line"></i>
                                            {{ $item->ask }}
                                        </a>
                                        <div class="accordion-content">
                                            <p>
                                                {{ $item->answer }}
                                            </p>
                                        </div>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 text-center">
                    {{ $blogs->links('vendor.pagination.custom') }}
                </div>
            </div>
        </div>
    </div>
    <!-- FAQ Area End -->
@endsection
