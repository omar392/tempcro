@extends('frontend.layouts.index')
@section('content')
        <!-- Banner Area -->
        <div class="banner-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="banner-content">
                            <h1 class="animate__animated animate__fadeInLeft" data-animate-delay="000ms" data-animate-duration="1000ms">{{ $setting->title }}</h1>
                            <p class="animate__animated animate__fadeInLeft" data-animate-delay="100ms" data-animate-duration="1000ms">{!! $setting->description !!}</p>

                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="banner-img">
                            <img src="{{ asset('dashboard/' . $cover->image_about_3) }}" alt="Banner Images" class="animate fadeInUp" data-animate-delay="000ms" data-animate-duration="1000ms">

                            <div class="banner-img-shape">
                                <div class="shape1 animate__animated animate__fadeInUp" data-animate-delay="100ms" data-animate-duration="1000ms" data-speed="0.08" data-revert="true">
                                    <img src="{{ asset('frontend/assets/images/30-30.png') }}" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="banner-shape">
                <div class="shape-in-one">
                    <img src="{{ asset('frontend/assets/images/home-one/shape1.png') }}" alt="Images">
                </div>
                <div class="shape-in-two">
                    <img src="{{ asset('frontend/assets/images/home-one/shape2.png') }}" alt="Images">
                </div>
            </div>
        </div>
        <!-- Banner Area End -->

        <!-- about Area -->
        <div class="services-area pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <h2>{{ __('site.read') }}</h2>
                    <div class="bar m-auto"></div>
                    <p class="m-auto">{!! $about->about !!}</p>
                </div>

                <div class="row pt-45 justify-content-center">
                    <div class="col-lg-4 col-6">
                        <div class="services-card">
                            <i class="ri-flashlight-line services-bg1"></i>
                            <h3><a href="{{ route('front.about') }}">{{ __('site.mission') }}</a></h3>
                            <p>{!! $about->mission !!}</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-6">
                        <div class="services-card">
                            <i class="ri-file-cloud-line services-bg2"></i>
                            <h3><a href="{{ route('front.about') }}">{{ __('site.vision') }}</a></h3>
                            <p>{!! $about->vision !!}</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-6">
                        <div class="services-card">
                            <i class="ri-briefcase-2-line services-bg3"></i>
                            <h3><a href="{{ route('front.about') }}">{{ __('site.goals') }}</a></h3>
                            <p>{!! $about->goals !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about Area End -->

        <!-- Services Area -->
        <div class="browse-jobs-area pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <h2>{{ __('site.services') }}</h2>
                    <div class="bar m-auto"></div>
                </div>

                <div class="row pt-45 justify-content-center">


                    @foreach ($services as $item)
                    <div class="col-lg-4 col-sm-6">
                        <div class="browse-jobs-card">
                            <div class="icon">
                                <i class="ri-stack-line"></i>
                            </div>
                            <h5><a href="{{ route('front.services.details', [str_replace(' ', '-', $item->url)]) }}" style="color: #111">{{ $item->title }}</a></h5>
                            <a href="{{ route('front.services.details', [str_replace(' ', '-', $item->url)]) }}" class="more-btn"><i class="ri-arrow-right-s-line"></i></a>
                        </div>
                    </div>
                    @endforeach

                    <div class="col-lg-12 text-center">
                        <div class="browse-btn">
                            <a href="{{ route('front.services') }}"> {{ __('site.more') }}<i class="ri-arrow-right-s-line"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Browse Jobs Area End -->



        <!-- Freelancers Area -->
        <div class="freelancers-area pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="section-title">
                            <h2>{{ __('site.jobs') }}</h2>
                            <div class="bar"></div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="browse-btn float-end">
                            <a href="{{ route('front.jobs') }}"> {{ __('site.more') }}<i class="ri-arrow-right-s-line"></i></a>
                        </div>
                    </div>
                </div>

                <div class="row pt-45 justify-content-center">
                    @foreach ($jobs as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card">
                            <div class="blog-img">
                                <a href="{{ route('front.blog.details', [str_replace(' ', '-', $item->url)]) }}">
                                    <img src="{{ asset('dashboard/employments/' . $item->image) }}" alt="Blog Images">
                                </a>
                            </div>
                            <div class="content">
                                <ul>
                                    <li>
                                        <i class="ri-time-line"></i> {{ $item->created_at->format('d F Y') }}
                                    </li>
                                </ul>
                                <h3><a href="{{ route('front.job.details', [str_replace(' ', '-', $item->url)]) }}">{{ $item->title }}</a></h3>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Freelancers Area End -->

        <!-- Recent Job Area -->
        <div class="recent-job-area ptb-100">
            <div class="container">

        <!-- Counter Area -->
        <div class="counter-area pb-70" dir="ltr">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-6 col-md-4">
                        <div class="counter-card">
                            <h3><span class="odometer" data-count="{{ $counter->input0 }}">{{ $counter->input0 }}</span></h3>
                            <div class="bar m-auto"></div>
                            <p>{{ __('site.input0') }}</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-6 col-md-4">
                        <div class="counter-card">
                            <h3><span class="odometer" data-count="{{$counter->input2}}">{{$counter->input2}}</span></h3>
                            <div class="bar m-auto"></div>
                            <p>{{ __('site.jobs') }}</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-6 col-md-4">
                        <div class="counter-card">
                            <h3><span class="odometer" data-count="{{ $counter->input3 }}">{{ $counter->input3 }}</span></h3>
                            <div class="bar m-auto"></div>
                            <p>{{ __('site.input3') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter Area End -->
            </div>
        </div>
        <!-- Recent Job Area End -->

        <!-- partners Area -->
        <div class="company-area ptb-100">
            <div class="container">
                    <div class="section-title text-center">
                    <h2>{{ __('site.partners') }}</h2>
                    <div class="bar m-auto"></div>
                </div>

                <div class="company-slider owl-carousel owl-theme  pt-45">
                    @foreach ($partners as $item)
                  <div class="company-item">
                            <img src="{{ asset('dashboard/partners/' . $item->image) }}"  style="width: 250px;height: 75px;" alt="Images">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- partners Area End -->

@endsection
