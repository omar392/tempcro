@extends('frontend.layouts.index')
@section('title', __('site.emp-'))
@section('content')
    <!-- Inner Banner -->
    <div class="inner-banner">
        <div class="container">
            <div class="inner-title text-center">
                <h3> {{ __('site.emp') }}</h3>
                <ul>
                    <li>
                        <a href="{{ route('front.home') }}">{{ __('site.home') }}</a>
                    </li>
                    <li> {{ __('site.emp') }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->
    <!-- Contact Area -->
    <div class="contact-area pt-100 pb-70">
        <div class="container">
            <div class="contact-form">
                <h1>{{ __('site.submit') }}</h1>
                <form id="employmentInfo" action="{{ route('contact.save') }}" method="POST" novalidate="novalidate">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>{{ __('site.name') }}</label>
                                <input type="text" name="name" id="name" placeholder="{{ __('site.name') }}"
                                    class="form-control">
                                <span class="text-danger error-text name_err"></span>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>{{ __('site.phone') }}</label>
                                <input type="text" name="phone" id="phone" class="form-control"
                                    placeholder="{{ __('site.phone') }}">
                                <span class="text-danger error-text phone_err"></span>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>{{ __('site.age') }}</label>
                                <input type="text" name="age" id="age" class="form-control"
                                    placeholder="{{ __('site.age') }}">
                                <span class="text-danger error-text age_err"></span>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>{{ __('site.date') }}</label>
                                <input type="date" name="date" id="date" class="form-control"
                                    placeholder="{{ __('site.date') }}">
                                <span class="text-danger error-text date_err"></span>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>{{ __('site.passport_id') }}</label>
                                <input type="text" name="passport_id" id="passport_id" class="form-control"
                                    placeholder="{{ __('site.passport_id') }}">
                                <span class="text-danger error-text passport_id_err"></span>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>{{ __('site.national_id') }}</label>
                                <input type="text" name="national_id" id="national_id" class="form-control"
                                    placeholder="{{ __('site.national_id') }}">
                                <span class="text-danger error-text national_id_err"></span>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>{{ __('site.place_of_residence') }}</label>
                                <input type="text" name="place_of_residence" id="place_of_residence" class="form-control"
                                    placeholder="{{ __('site.place_of_residence') }}">
                                <span class="text-danger error-text place_of_residence_err"></span>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <h1>NEXT OF KIN'S INFORMATION</h1>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>{{ __('site.name') }}</label>
                                <input type="text" name="alt_name" id="alt_name" class="form-control"
                                    placeholder="{{ __('site.name') }}">
                                <span class="text-danger error-text alt_name_err"></span>
                            </div>
                        </div>


                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>{{ __('site.phone') }}</label>
                                <input type="text" name="alt_phone" id="alt_phone" class="form-control"
                                    placeholder="{{ __('site.phone') }}">
                                <span class="text-danger error-text alt_phone_err"></span>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">

                                {!! NoCaptcha::renderJs() !!}
                                {!! NoCaptcha::display() !!}
                                <span class="text-danger error-text g-recaptcha-response_err"></span>
                            </div>
                        </div>


                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="default-btn border-radius-5 btn-submitt">
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
