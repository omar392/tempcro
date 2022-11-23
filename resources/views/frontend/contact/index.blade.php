@extends('frontend.layouts.index')
@section('title', __('site.contact-'))
@section('content')
    <!-- Inner Banner -->
    <div class="inner-banner">
        <div class="container">
            <div class="inner-title text-center">
                <h3>{{ __('site.contact') }}</h3>
                <ul>
                    <li>
                        <a href="index.html">{{ __('site.home') }}</a>
                    </li>
                    <li>{{ __('site.contact') }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- Contact Info Area -->
    <div class="contact-info-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <h2>{{ __('site.contactinfo') }}</h2>
                <div class="bar m-auto"></div>
            </div>

            <div class="row pt-45">
                <div class="col-lg-3 col-6">
                    <div class="contact-info-item">
                        <i class="ri-map-pin-5-line contact-info-bg"></i>
                        <h3>{{ __('site.address') }}</h3>
                        <p>{{ $setting->address }}</p>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="contact-info-item">
                        <i class="ri-phone-line contact-info-bg2"></i>
                        <h3>{{ __('site.callus') }}</h3>
                        <p><a href="tel:{{ $setting->phone }}"> {{ $setting->phone }}</a></p>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="contact-info-item">
                        <i class="ri-question-answer-line contact-info-bg3"></i>
                        <h3>{{ __('site.email') }}</h3>
                        <p><a href="mailto:{{ $setting->email }}"> {{ $setting->email }}</a></p>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="contact-info-item">
                        <i class="ri-whatsapp-line contact-info-bg4"></i>
                        <h3>{{ __('site.whatsapp') }}</h3>
                        <p>{{ $setting->whatsapp }}</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Contact Info Area End -->

    <!-- Map Area -->
    <div class="map-area">
        <div class="container-fluid m-0 p-0">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3152.4185050900933!2d144.95486341584441!3d-37.80366524123965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d33b5df9565%3A0xd916103dfa818579!2s328%20Queensberry%20St%2C%20North%20Melbourne%20VIC%203051%2C%20Australia!5e0!3m2!1sen!2sbd!4v1629612962554!5m2!1sen!2sbd"></iframe>
        </div>
    </div>
    <!-- Map Area End -->

    <!-- Contact Area -->
    <div class="contact-area pt-100 pb-70">
        <div class="container">
            <div class="contact-form">
                <h3>{{ __('site.contact') }}</h3>
                <form  id="contactInfo" action="{{ route('contact.save') }}" method="POST" novalidate="novalidate">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>{{ __('site.name') }}</label>
                                <input type="text" name="name" id="name" placeholder="{{ __('site.name') }}" class="form-control">
                                <span class="text-danger error-text name_err"></span>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>{{ __('site.email') }}</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="{{ __('site.email') }}">
                                <span class="text-danger error-text email_err"></span>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>{{ __('site.phone') }}</label>
                                <input type="text" name="phone" id="phone" class="form-control" placeholder="{{ __('site.phone') }}">
                                <span class="text-danger error-text phone_err"></span>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>{{ __('site.subject') }}</label>
                                <input type="text" name="subject" id="subject" class="form-control" placeholder="{{ __('site.subject') }}">
                                <span class="text-danger error-text subject_err"></span>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>{{ __('site.message') }}</label>
                                <textarea name="message" class="form-control" id="message" cols="30" rows="5" placeholder="{{ __('site.message') }}"></textarea>
                                <span class="text-danger error-text message_err"></span>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">

                                {!! NoCaptcha::renderJs() !!}
                                {!! NoCaptcha::display() !!}
                                <span class="text-danger error-text g-recaptcha-response_err"></span>
                            </div>
                        </div>


                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="default-btn border-radius-5 btn-submit">
                                {{ __('site.send') }} <i class="ri-chat-4-line"></i>
                            </button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Contact Area End -->
@endsection
