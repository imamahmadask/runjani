<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="UTF-8">

    <!--Page Title-->
    <title>RUNJANI - Dong Ayok Lari</title>

    <!--Meta Keywords and Description-->
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />

    <!--Favicon-->
    <link rel="shortcut icon" href="{{ asset('frontend/images/favicon-runjani.png') }}" title="Favicon" />

    <!-- Main CSS Files -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">

    <!-- Namari Color CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/namari-color.css') }}">

    <!--Icon Fonts - Font Awesome Icons-->
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">

    <!-- Animate CSS-->
    <link href="{{ asset('frontend/css/animate.css') }}" rel="stylesheet" type="text/css">

    <!--Google Webfonts-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <style>
        #banner {
            background: url("../frontend/images/banner-images/banner-image-2.webp") no-repeat center top;
            background-size: cover;
        }
    </style>
</head>

<body>

    <!-- Preloader -->
    <div id="preloader">
        <div id="status" class="la-ball-triangle-path">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!--End of Preloader-->

    <div class="page-border" data-wow-duration="0.7s" data-wow-delay="0.2s">
        <div class="top-border wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;"></div>
        <div class="right-border wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">
        </div>
        <div class="bottom-border wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"></div>
        <div class="left-border wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;"></div>
    </div>

    <div id="wrapper">
        <header id="banner" class="scrollto clearfix" data-enllax-ratio=".5">
            @include('layouts.navbar')

            <!--Banner Content-->
            <div id="banner-content" class="row clearfix">
                <div class="col-38">
                    <div class="section-heading">
                        <h1>DONG AYOK LARI</h1>
                        <h2>
                            <p>
                                RUNJANI is a Lombok-based running community, passionate about both road and trail
                                running. Open to everyone of all ages and backgrounds, we aim to inspire and connect
                                through the love of running.
                            </p>
                            <p>
                                With our tagline <strong>"Dong Ayok Lari"</strong>—meaning "Come on, Let’s Run"—we
                                encourage people from all walks of life to embrace running as a way to stay active,
                                healthy, and united.
                            </p>
                        </h2>
                    </div>

                    <!--Call to Action-->
                    {{-- <a href="#" class="button">START CREATING TODAY</a> --}}
                    <!--End Call to Action-->

                </div>

            </div><!--End of Row-->
        </header>

        <!--Main Content Area-->
        <main id="content">
            @yield('content')
        </main>
        <!--End Main Content Area-->


        <!--Footer-->
        @include('layouts.footer')
        <!--End of Footer-->

    </div>

    <!-- Include JavaScript resources -->
    <script src="{{ asset('frontend/js/jquery.1.8.3.min.js') }}"></script>
    <script src="{{ asset('frontend/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/js/featherlight.min.js') }}"></script>
    <script src="{{ asset('frontend/js/featherlight.gallery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.enllax.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.stickyNavbar.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/js/images-loaded.min.js') }}"></script>
    <script src="{{ asset('frontend/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('frontend/js/site.js') }}"></script>
</body>

</html>
