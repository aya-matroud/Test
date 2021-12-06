
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Hidayah Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Hidayah - v4.7.0
    * Template URL: https://bootstrapmade.com/hidayah-free-simple-html-template-for-corporate/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-between">
        <img src="https://www.job.sy/photos/1356985558.png" alt="" class="img-fluid" style="width: 40px">
        <p>.</p>
        <h1 class="logo"><a href="{{ url('home')}}">Syria <strong style="color: #428bca;margin: 1px">Trust </strong>for Development</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
{{--        <a href="index.html" class="logo"><img src="https://www.job.sy/photos/1356985558.png" alt="" class="img-fluid"></a>--}}

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="{{ url('home')}}">
                        <i class="bx bxs-home"></i>
{{--                        Home--}}
{{--                        {{__('messages.Home')}}--}}
                    </a></li>
                <li class="dropdown"><a href="#"><span>
{{--                            Who we are--}}
                            {{__('messages.who_we_are')}}
                        </span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                                <li><a href="#">
{{--                                        About Us--}}
                                        {{__('messages.about_us')}}
                                    </a></li>
                                <li><a href="#">
{{--                                        Our Guiding Principles--}}
                                        {{__('messages.guiding_principles')}}
                                    </a></li>
                                <li><a href="#">
{{--                                        We are One Trust--}}
                                        {{__('messages.we_are_trust')}}
                                    </a></li>
                                <li><a href="#">
{{--                                        Ways of Working--}}
                                        {{__('messages.ways_to_work')}}
                                    </a></li>

                            </ul>

                </li>


                <li class="dropdown"><a href="#"><span>
{{--                            our Impact--}}
                            {{__('messages.our_impact')}}
                        </span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li class="dropdown"><a href="#"><span>
{{--                                    Areas of Focus--}}
                                    {{__('messages.areas_of_focus')}}
                                </span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">
{{--                                        Strong and Engaged Communities1--}}
                                        {{__('messages.Strong and Engaged Communities')}}
                                    </a></li>
                                <li><a href="#">
{{--                                        Economic Enterprise--}}
                                        {{__('messages.Economic Enterprise')}}
                                    </a></li>
                                <li><a href="#">
{{--                                        Learning and Life Skills--}}
                                        {{__('messages.Learning and Life Skills')}}
                                    </a></li>
                                <li><a href="#">{{__('messages.Cultural Identity')}}</a></li>
                                <li><a href="#">{{__('messages.Life Changing Humanitarian Relief')}}</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#"><span>{{__('messages.affiliate_and_programmes')}}</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">{{__('messages.Aamal')}}</a></li>
                                <li><a href="#">{{__('messages.Deyari')}}</a></li>
                                <li><a href="#">{{__('messages.Manara University')}}</a></li>
                                <li><a href="#">{{__('messages.Massar')}}</a></li>
                                <li><a href="#">{{__('messages.Syrian Handicrafts')}}</a></li>
                                <li><a href="#">{{__('messages.Wataneyeh')}}</a></li>
                                <li><a href="#">{{__('messages.Early Recovery Response')}}</a></li>
                                <li><a href="#">{{__('messages.Jarih Al-Watan')}}</a></li>
                                <li><a href="#">{{__('messages.Legal First Responders')}}</a></li>
                                <li><a href="#">{{__('messages.Manarat')}}</a></li>
                                <li><a href="#">{{__('messages.Mashrouie')}}</a></li>
                                <li><a href="#">{{__('messages.Shabab')}}</a></li>
                                <li><a href="#">{{__('messages.Volunteer Clubs')}}</a></li>
                                <li><a href="#">{{__('messages.Living Heritage')}}</a></li>

                            </ul>
                        </li>
                    </ul>
                </li>


{{--                <li class="nav-item dropdown dropdown-mega position-static">--}}
{{--                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">our Impact</a>--}}
{{--                    <div class="dropdown-menu shadow">--}}
{{--                        <div class="mega-content px-4">--}}
{{--                            <div class="container-fluid">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-12 col-md-6 col-md-3 py-4">--}}
{{--                                        <h5>Areas of Focus</h5>--}}
{{--                                        <div class="list-group">--}}
{{--                                            <a class="list-group-item" href="#" style="color: black">Strong and Engaged Communities</a>--}}
{{--                                            <a class="list-group-item" href="#" style="color: black">Economic Enterprise</a>--}}
{{--                                            <a class="list-group-item" href="#" style="color: black">Learning and Life Skills</a>--}}
{{--                                            <a class="list-group-item" href="#" style="color: black">Cultural Identity</a>--}}
{{--                                            <a class="list-group-item" href="#" style="color: black">Life Changing Humanitarian Relief</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-12 col-md-6 col-md-3 py-4">--}}
{{--                                        <h5>Affiliate and Programmes</h5>--}}
{{--                                        <div class="list-group">--}}
{{--                                            <a class="list-group-item" href="#" style="color: black">Aamal</a>--}}
{{--                                            <a class="list-group-item" href="#" style="color: black">Deyari</a>--}}
{{--                                            <a class="list-group-item" href="#" style="color: black">Manara University</a>--}}
{{--                                            <a class="list-group-item" href="#" style="color: black">Massar</a>--}}
{{--                                            <a class="list-group-item" href="#" style="color: black">Syrian Handicrafts</a>--}}
{{--                                            <a class="list-group-item" href="#" style="color: black">Wataneyeh</a>--}}
{{--                                            <a class="list-group-item" href="#" style="color: black">Early Recovery Response</a>--}}

{{--                                            <a class="list-group-item" href="#" style="color: black">Jarih Al-Watan</a>--}}
{{--                                            <a class="list-group-item" href="#" style="color: black">Legal First Responders</a>--}}
{{--                                            <a class="list-group-item" href="#" style="color: black">Manarat</a>--}}
{{--                                            <a class="list-group-item" href="#" style="color: black">Mashrouie</a>--}}
{{--                                            <a class="list-group-item" href="#" style="color: black">Shabab</a>--}}
{{--                                            <a class="list-group-item" href="#" style="color: black">Volunteer Clubs</a>--}}
{{--                                            <a class="list-group-item" href="#" style="color: black">Living Heritage</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </li>--}}









                <li class="dropdown"><a href="#"><span>
{{--                            Media Library--}}
                            {{__('messages.media_library')}}
                        </span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">{{__('messages.photos')}}</a></li>
                        <li><a href="#">{{__('messages.videos')}}</a></li>
                        <li><a href="#">{{__('messages.Success Stories')}}</a></li>
                        <li><a href="#">{{__('messages.reports')}} </a></li>

                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="{{ url('allnews')}}">{{__('messages.news')}}</a></li>
                <li><a class="nav-link scrollto" href="#team">{{__('messages.work_with_us')}}</a></li>
                <li class="dropdown"><a href="#"><span>{{__('messages.ways_to_give')}}</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">{{__('messages.Donate')}}</a></li>
                        <li><a href="#">{{__('messages.Volunteer with us')}}</a></li>


                    </ul>

                </li>
                <li><a class="nav-link scrollto" href="{{url('contacts')}}">{{__('messages.contact_us')}}</a></li>
                <li class="dropdown"><a href="#"><span></span> <i class="bx bx-user-circle"></i></a>
                    <ul>
                        @if (Route::has('login'))

                            <div class="top-right links">
                                @auth
                                    @if( \Illuminate\Support\Facades\Auth::user()->role == 'admin')

                                        <li><a href="{{url('admin/dashboard')}}">Control Panel</a></li>
                                        <li><a href="{{url('home')}}">home</a></li>
                                   @else
                                        <li><a href="{{url('home')}}">home</a></li>
                                    @endif

                                    <li> <a>{{ Auth::user()->name }}</a></li>
                                    <li><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    </li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                                @else
                                    <li><a href="{{url('login')}}">Log in</a></li>

                                    @if (Route::has('register'))
                                        <li><a href="{{url('register')}}">Register</a></li>
                                    @endif
                                @endauth
                            </div>

                              @endif





{{--                        <li><a href="{{url('login')}}">Log in</a></li>--}}
{{--                        <li><a href="{{url('register')}}">Register</a></li>--}}


                    </ul>


                </li>

                <li class="dropdown"><a href="#"><span></span> <i class="bi bi-translate"></i></a>
                    <ul>
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li><a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                {{ $properties['native'] }}
                            </a></li>


                        @endforeach
                    </ul>

                </li>



            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
<br>
<br>
<br>

{{--<br>--}}
{{--<br>--}}
{{--<br>--}}
{{--<br>--}}
{{--<br>--}}

@yield('content')


<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-newsletter">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h4>Our Newsletter</h4>
                    <p>Join our newsletter and never miss out on new news and event</p>
                </div>
                <div class="col-lg-6">
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe" placeholder="Email">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-top">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="row">




                        <div class="col-lg-3 col-md-6 footer-links">
                            <h4>Useful Links</h4>
                            <ul>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">About Us</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Contact Us</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Work with us</a></li>

                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6 footer-contact">
                            <img src="https://www.job.sy/photos/1356985558.png" style="width: 85px">


                        </div>

                        <div class="col-lg-3 col-md-6 footer-info">

                            <h3>About Us</h3>
                            <p>You can follow us on the following social media sites.</p>


                            <div class="social-links mt-3">


                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>

                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>




                        <div class="col-lg-3 col-md-6 footer-links">
                            <h4>Contact Us</h4>
                            <ul>
                                <p><i class="bx bxl-periscope"></i>دمشق , باب شرقي , جادة محمد زهير شمس الدين</p>
                                <p>
                                <p><i class="bx bx-phone"></i>(+963)-11-4731300 </p>
                                <p>
                                <p><i class="bx bx-envelope"></i>info@syriatrust.sy</p>
                                <p>
                            </ul>
                        </div>






                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            All copyrights reserved - Syria Trust for Development  <strong><span>2021</span></strong>
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/hidayah-free-simple-html-template-for-corporate/ -->
            Designed by <a href="https://bootstrapmade.com/">Aya Matroud</a>
        </div>
    </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('assets/vendor/purecounter/purecounter.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
<script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>