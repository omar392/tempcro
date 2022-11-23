@extends('frontend.layouts.index')
@section('content')


        <!-- Inner Banner -->
        <div class="inner-banner">
            <div class="container">
                <div class="inner-title text-center">
                    <h3>{{ __('site.404') }}</h3>
                    <ul>
                        <li>
                            <a href="{{ route('front.home') }}">{{ __('site.home') }}</a>
                        </li>
                        <li>{{ __('site.404') }}</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- Start 404 Error -->
		<div class="error-area ptb-100">
			<div class="d-table">
				<div class="d-table-cell">
					<div class="error-content">
						<h1>4 <span>0</span> 4</h1>
						<h3>{{ __('site.404') }}</h3>
						<p>{{ __('site.not') }}</p>
						<a href="{{ route('front.home') }}" class="default-btn">
							{{ __('site.home') }}
						</a>
					</div>
				</div>
			</div>
		</div>
        <!-- End 404 Error -->


@endsection
