
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

    <style>
        .sidenav {
            height: 50%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 128px;
            left: 0;
            background: rgba(23, 26, 29, 0.8);
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #5697d0;
        }

        .sidenav .closebtn {
            position: absolute;
            top:1px;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
        }
    </style>

</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-between">
        <img src="https://www.job.sy/photos/1356985558.png" alt="" class="img-fluid" style="width: 40px">
        <p>.</p>
        <h1 class="logo"><a href="{{ url('home')}}">Syria<strong style="color: #428bca;margin: 1px"> Trust </strong>for Development</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        {{--        <a href="index.html" class="logo"><img src="https://www.job.sy/photos/1356985558.png" alt="" class="img-fluid"></a>--}}

        <nav id="navbar" class="navbar">
            <ul>

                <li><a class="nav-link scrollto" style="cursor:pointer;" onclick="openNav()">&#9776; </a></li>
                <li><a class="nav-link scrollto active" href="{{ url('home')}}">{{__('messages.Home')}}</a></li>
                <li class="dropdown"><a href="#"><span>{{__('messages.who_we_are')}}</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">{{__('messages.about_us')}}</a></li>
                        <li><a href="#">{{__('messages.guiding_principles')}}</a></li>
                        <li><a href="#">{{__('messages.we_are_trust')}}</a></li>
                        <li><a href="#">{{__('messages.ways_to_work')}}</a></li>

                    </ul>

                </li>


                <li class="dropdown"><a href="#"><span>{{__('messages.our_impact')}}</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li class="dropdown"><a href="#"><span>{{__('messages.areas_of_focus')}}</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">{{__('messages.Strong and Engaged Communities')}}</a></li>
                                <li><a href="#">{{__('messages.Economic Enterprise')}}</a></li>
                                <li><a href="#">{{__('messages.Learning and Life Skills')}}</a></li>
                                <li><a href="#">{{__('messages.Cultural Identity')}}</a></li>
                                <li><a href="#">{{__('messages.Life Changing Humanitarian Relief')}}</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#"><span>Affiliate and Programmes</span> <i class="bi bi-chevron-right"></i></a>
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









                <li class="dropdown"><a href="#"><span> {{__('messages.media_library')}}</span> <i class="bi bi-chevron-down"></i></a>
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
                                        {{--                                        <li><a href="{{url('admin')}}">Control Panel</a></li>--}}
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











<div id="mySidenav" class="sidenav">

  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="{{url('slide')}}">Slide Mangement</a>
    <a href="{{url('news')}}">News Mangement</a>
    <a href="{{url('contact')}}">Contacts Mangement</a>

</div>


{{--<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>--}}

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
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
</script>

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