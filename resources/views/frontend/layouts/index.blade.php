<!doctype html>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}" dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">

@include('frontend.layouts.head')

    <body>
        <!-- Pre Loader -->
        <div class="preloader">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="spinner"></div>
                </div>
            </div>
        </div>
        <!-- End Pre Loader -->

        @include('frontend.layouts.header')
        @yield('content')

        @include('frontend.layouts.footer')
        @include('frontend.layouts.script')



    </body>
</html>
