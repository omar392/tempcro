        <!-- Employers CV Area -->
        <div class="employers-cv-area">
            <div class="container">
                <div class="employers-cv-bg">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <div class="employers-cv-content">
                                <h2>{{ __('site.contact') }}</h2>
                                <div class="bar"></div>
                                <p>{{ __('site.contactdetails') }}</p>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="employers-cv-btn">
                                <a href="mailto:{{ $setting->sub_mail }}">{{ __('site.subscripe') }} {{ __('site.email') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Employers CV Area -->
        <!-- Footer Area -->
        <footer class="footer-area">
            <div class="container">
                <div class="footer-top pt-100 pb-70">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6 col-md-6">
                            <div class="footer-widget">
                                <div class="footer-logo">
                                    <a href="{{ route('front.home') }}">
                                        <img src="{{ asset('dashboard/' . $setting->image) }}" class="footer-logo1"
                                            alt="Footer Logo">
                                        <img src="{{ asset('dashboard/' . $setting->image) }}" class="footer-logo2"
                                            alt="Footer Logo">
                                    </a>
                                </div>

                                <ul class="footer-contact-list">
                                    <li>
                                        <i class="ri-map-pin-line"></i>
                                        <div class="content">
                                            <a>
                                                {{ $setting->address }}
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="ri-mail-line"></i>
                                        <div class="content">
                                            <a href="mailto:{{ $setting->email }}">
                                                {{ $setting->email }}
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="ri-phone-line"></i>
                                        <div class="content">
                                            <a href="tel:{{ $setting->phone }}">
                                                {{ $setting->phone }}
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 col-md-6">
                            <div class="footer-widget">
                                <h3>{{ __('site.quick') }}</h3>
                                <ul class="footer-list">
                                    <li>
                                        <a href="{{ route('front.home') }}">
                                            {{ __('site.home') }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('front.about') }}">
                                            {{ __('site.about') }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('front.jobs') }}">
                                            {{ __('site.jobs') }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('front.employmment') }}">
                                            {{ __('site.emp') }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('front.faqs') }}">
                                            {{ __('site.faq') }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('front.contact') }}">
                                            {{ __('site.contact') }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('front.gallery') }}" >
                                            {{ __('site.gallery') }}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 col-md-4">
                            <div class="footer-widget ps-5">
                                <h3>{{ __('site.services') }}</h3>
                                <ul class="footer-list">

                                    @foreach ($services as $item)
                                        <li>
                                            <a
                                                href="{{ route('front.services.details', [str_replace(' ', '-', $item->url)]) }}">
                                                {{ $item->title }}
                                            </a>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <div class="copyright-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-7">
                            <div class="copy-right-text">
                                <p>
                                    All Rights Reserved <i class="bx bx-copyright"></i>{{ now()->year }}
                                    <a href="{{ route('front.home') }}" target="_blank"> Joud Tech</a>
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-5">
                            <div class="copy-right-social-link">
                                <ul class="social-link">
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
        </footer>
        <!-- Footer Area End -->
