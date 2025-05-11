<!DOCTYPE html>
<html lang="en">

<head>
    <title>Minishop - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body class="goto-here">
    <div class="py-1 bg-black">
        <div class="container">
            <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
                <div class="col-lg-12 d-block">
                    <div class="row d-flex">
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span
                                    class="icon-phone2"></span></div>
                            <span class="text">+ 1235 2355 98</span>
                        </div>
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span
                                    class="icon-paper-plane"></span></div>
                            <span class="text">youremail@email.com</span>
                        </div>
                        <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
                            <span class="text">3-5 Business days delivery &amp; Free Returns</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="/">Minishop</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="/" class="nav-link mt-1">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle mt-1" href="#" id="dropdown04" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Shop</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="cosmatic">COSMATICS</a>
                            <a class="dropdown-item" href="jewellery">JEWELLERY</a>
                            <a class="dropdown-item" href="topsale">TOP-SALE</a>
                            <a class="dropdown-item" href="topclient">TOP-CLIENT</a>
                        </div>
                    </li>
                    <li class="nav-item"><a href="about" class="nav-link mt-1">About</a></li>
                    <li class="nav-item"><a href="blog" class="nav-link mt-1">Blog</a></li>
                    <li class="nav-item"><a href="contact" class="nav-link mt-1">Contact</a></li>
                    @if (Route::has('login'))
                        @auth
                            {{-- <a href="{{ url('/dashboard') }}"
                                class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a> --}}
                        @else
                            <li class="nav-item mt-1">
                                <a href="{{ route('login') }}"
                                    class="nav-link font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                                    in</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item mt-1">
                                    <a href="{{ route('register') }}"
                                        class="nav-link ml-2 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                </li>
                            @endif
                        @endauth
                    @endif
                    <li class="nav-item cta cta-colored"><a href="cart.html" class="nav-link"><span
                                class="icon-shopping_cart"></span>[0]</a></li>

                </ul>
            </div>
        </div>
    </nav>
    @yield('space-between')
    <footer class="ftco-footer ftco-section">
        <div class="container">
            <div class="row">
                <div class="mouse">
                    <a href="#" class="mouse-icon">
                        <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
                    </a>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Minishop</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ftco-footer-widget mb-4 ml-md-5 text-center">
                        <h2 class="ftco-heading-2">Menu</h2>
                        <ul class="list-unstyled">
                            <li><a href="/" class="py-2 d-block">HOME</a></li>
                            <li><a href="about" class="py-2 d-block">ABOUT</a></li>
                            <li><a href="contact" class="py-2 d-block">CONTACT</a></li>
                            <li><a href="cosmatic" class="py-2 d-block">COSMATIC</a></li>
                            <li><a href="jewellery" class="py-2 d-block">JEWELLERY</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St.
                                        Mountain View, San Francisco, California, USA</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2
                                            392 3929 210</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span
                                            class="text">info@yourdomain.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i
                            class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com"
                            target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>

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

    <script src="{{ asset('js/scrollax.min.js') }}"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>

    <script src="{{ asset('js/google-map.js') }}"></script>

    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
