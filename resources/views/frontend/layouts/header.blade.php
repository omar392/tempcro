        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <div class="mobile-responsive-nav">
                <div class="container-fluid">
                    <div class="mobile-responsive-menu">
                        <div class="logo">
                            <a href="{{ route('front.home') }}">
                                <img src="{{ asset('dashboard/' . $setting->image) }}" class="logo-one" alt="logo">
                                <img src="{{ asset('dashboard/' . $setting->image) }}" class="logo-two" alt="Logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Menu For Desktop Device -->
            <div class="desktop-nav desktop-nav-one nav-area">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-md navbar-light ">
                        <a class="navbar-brand" href="{{ route('front.home') }}">
                            <img src="{{ asset('dashboard/' . $setting->image) }}" class="logo-one" alt="Logo">
                            <img src="{{ asset('dashboard/' . $setting->image) }}" class="logo-two" alt="Logo">
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            @if (app()->getLocale() == 'ar')
                            <ul class="navbar-nav" style="margin-left: 253px;">
                            @endif
                            @if (app()->getLocale() == 'en')
                            <ul class="navbar-nav">
                            @endif
                                <li class="nav-item">
                                    <a href="{{ route('front.home') }}"
                                        class="nav-link {{ URL::route('front.home') === URL::current() ? 'active' : '' }}">
                                        {{ __('site.home') }}
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('front.about') }}"
                                        class="nav-link {{ URL::route('front.about') === URL::current() ? 'active' : '' }}">
                                        {{ __('site.about') }}
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('front.services') }}"
                                        class="nav-link {{ URL::route('front.services') === URL::current() ? 'active' : '' }}">
                                        {{ __('site.services') }}
                                        <i class="ri-arrow-down-s-line"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        @foreach ($services as $item)
                                            <li class="nav-item">
                                                <a href="{{ route('front.services.details', [str_replace(' ', '-', $item->url)]) }}"
                                                    class="nav-link">
                                                    {{ $item->title }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#"
                                        class="nav-link {{ URL::route('front.blog') === URL::current() ? 'active' : '' }} {{ URL::route('front.gallery') === URL::current() ? 'active' : '' }} {{ URL::route('front.faqs') === URL::current() ? 'active' : '' }} {{ URL::route('front.news') === URL::current() ? 'active' : '' }}">
                                        {{ __('site.pages') }}
                                        <i class="ri-arrow-down-s-line"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{ route('front.blog') }}"
                                                class="nav-link {{ URL::route('front.blog') === URL::current() ? 'active' : '' }}">
                                                {{ __('site.blog') }}
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('front.faqs') }}"
                                                class="nav-link {{ URL::route('front.faqs') === URL::current() ? 'active' : '' }}">
                                                {{ __('site.faq') }}
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('front.news') }}"
                                                class="nav-link {{ URL::route('front.news') === URL::current() ? 'active' : '' }}">
                                                {{ __('site.news') }}
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('front.gallery') }}"
                                                class="nav-link {{ URL::route('front.gallery') === URL::current() ? 'active' : '' }}">
                                                {{ __('site.gallery') }}
                                            </a>
                                        </li>
                                    </ul>
                                </li>


                                <li class="nav-item">
                                    <a href="{{ route('front.contact') }}"
                                        class="nav-link {{ URL::route('front.contact') === URL::current() ? 'active' : '' }}">
                                        {{ __('site.contact') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                        @if ($localeCode == LaravelLocalization::getCurrentLocale())
                                        @elseif($url = LaravelLocalization::getLocalizedURL($localeCode))
                                            <a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                                class="flag-bar">
                                                @if (app()->getLocale() == 'ar')
                                                    <span><b>English</b></span>
                                                @else
                                                    <span><b>العربية</b></span>
                                                @endif
                                            </a>
                                        @endif
                                    @endforeach
                                </li>
                            </ul>
                            <div class="others-options d-flex align-items-center">
                                <div class="optional-item">
                                    <a href="{{ route('front.jobs') }}" class="default-btn border-radius-5">{{ __('site.jobs') }} <i
                                            class="ri-briefcase-2-line"></i></a>
                                </div>
                                <div class="optional-item">
                                    <a href="{{ route('front.employmment') }}" class="default-btn border-radius-5">{{ __('site.emp') }} <i
                                            class="ri-user-3-line"></i></a>
                                </div>
                            </div>

                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->
