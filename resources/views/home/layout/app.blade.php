<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">

    @stack('links')
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html">{{ config('settings.website_name') }}<span></span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> {{ __('Menu') }}
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item  {{ Request::segment(1) === null ? 'active' : '' }}"><a href="{{ route('home.index') }}" class="nav-link">{{ __('Home') }}</a></li>
                    <li class="nav-item {{ Request::segment(1) === 'about' ? 'active' : '' }}"><a href="{{ route('home.about') }}" class="nav-link">{{ __('About') }}</a></li>
                    <li class="nav-item {{ Request::segment(1) === 'services' ? 'active' : '' }}"><a href="{{ route('home.services') }}" class="nav-link">{{ __('services') }}</a></li>
                    <li class="nav-item {{ Request::segment(1) === 'pricing' ? 'active' : '' }}"><a href="{{ route('home.pricing') }}" class="nav-link">{{ __('pricing') }}</a></li>
                    <li class="nav-item {{ Request::segment(1) === 'cars' ? 'active' : '' }}"><a href="{{ route('home.cars') }}" class="nav-link">{{ __('cars') }}</a></li>
                    <li class="nav-item {{ Request::segment(1) === 'blog' ? 'active' : '' }}"><a href="{{ route('home.blog') }}" class="nav-link">{{ __('blog') }}</a></li>
                    <li class="nav-item {{ Request::segment(1) === 'contact' ? 'active' : '' }}"><a href="{{ route('home.contact') }}" class="nav-link">{{ __('Contact') }}</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->


    @yield('content')

    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2"><a href="#" class="logo">{{ config('settings.website_name') }}<span></span></a></h2>
                        <p>{{ __(config('settings.description')) }}</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="{{ config('settings.twitter_url')  }}"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="{{ config('settings.facebook_url')  }}"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="{{ config('settings.instagram_name')  }}"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">{{ __('Information') }}</h2>
                        <ul class="list-unstyled">
                            <li><a href="{{ route('home.about') }}" class="py-2 d-block">{{ __('About') }}</a></li>
                            <li><a href="{{ route('home.services') }}" class="py-2 d-block">{{ __('services') }}</a></li>
                            <li><a href="#" class="py-2 d-block">{{ __('Term and Conditions') }}</a></li>
                            <li><a href="#" class="py-2 d-block">{{ __('Best Price Guarantee') }}</a></li>
                            <li><a href="#" class="py-2 d-block">{{ __('Privacy &amp; Cookies Policy') }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">{{ __('Customer Support') }}</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">{{ __('FAQ') }}</a></li>
                            <li><a href="#" class="py-2 d-block">{{ __('Payment Option') }}</a></li>
                            <li><a href="#" class="py-2 d-block">{{ __('Booking Tips') }}</a></li>
                            <li><a href="#" class="py-2 d-block">{{ __('How it works') }}</a></li>
                            <li><a href="#" class="py-2 d-block">{{ __('Contact Us') }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">{{ __('Have a Questions?') }}</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">{{ __(config('settings.address')) }}</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">{{ config('settings.webiste_phone') }}</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">{{ config('settings.webiste_email') }}</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p>
                        <!-- Link back to Colorlib cant be removed. Template is licensed under CC BY 3.0. -->
                        {{ __('Copyright') }} &copy;<script>
                            document.write(new Date().getFullYear());

                        </script> {{ __('All rights reserved | This template is made with') }} <i class="icon-heart text-danger" aria-hidden="true"></i> {{ __('by') }} <a href="https://colorlib.com" target="_blank">hussein sim</a>
                        <!-- Link back to Colorlib cant be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('js/jquery.timepicker.min.js') }}"></script>
    <script src="{{ asset('js/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('js/google-map.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    @stack('scripts')
</body>
</html>
