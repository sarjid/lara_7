<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Excon</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/style.css">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> <img src="{{ asset('fontend') }}/img/logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="ti-menu"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('about.page') }}">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="services.html">services</a>
                                </li> 
                                <li class="nav-item">
                                    <a class="nav-link" href="blog.html">Blog</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Pages
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="project.html">project</a>
                                        <a class="dropdown-item" href="project_details.html">project details</a>
                                        <a class="dropdown-item" href="single-blog.html">Single blog</a>
                                        <a class="dropdown-item" href="elements.html">Elements</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact</a>
                                </li>
                                <li class="d-none d-lg-block">
                                    <a class="btn_1" href="#">Get a Quote</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

        @yield('fontend_content')

    <!-- footer part start-->
    <footer class="footer-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <div class="single-footer-widget footer_1">
                        <a href="index.html"> <img src="img/footer_logo.png" alt=""> </a>
                        <p>So seed seed green that winged cattle in Gahesd thing made fly you're no divided deep move lan Gathering thing us land years living on floor me the cavaty do buty fresh</p>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-md-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Best Services</h4>
                        <div class="contact_info">
                            <ul>
                                <li>
                                    <a href="#">General Contracting</a>
                                </li>
                                <li>
                                    <a href="#">Mechanical Engineering</a>
                                </li>
                                <li>
                                    <a href="#">Civil Engineering</a>
                                </li>
                                <li>
                                    <a href="#">Bridge Construction</a>
                                </li>
                                <li>
                                    <a href="#">Electrical Engineering</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-md-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Our Gallery</h4>
                        <div class="footer_img">
                            <a href="#"><img src="img/footer_img/footer_1.png" alt=""></a>
                            <a href="#"><img src="img/footer_img/footer_2.png" alt=""></a>
                            <a href="#"><img src="img/footer_img/footer_3.png" alt=""></a>
                            <a href="#"><img src="img/footer_img/footer_4.png" alt=""></a>
                            <a href="#"><img src="img/footer_img/footer_5.png" alt=""></a>
                            <a href="#"><img src="img/footer_img/footer_6.png" alt=""></a>
                            <a href="#"><img src="img/footer_img/footer_7.png" alt=""></a>
                            <a href="#"><img src="img/footer_img/footer_8.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-md-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Contact info</h4>
                        <div class="contact_info"> 
                            <p>4361 Morningview Lane Artland , Street
                                    Latimer, IA 50452 / 23654</p>
                            <p><span> Address :</span> Hath of it fly signs bear be one blessed after </p>
                            <p><span> Phone :</span> +2 36 265 (8060)</p>
                            <p><span> Email : </span>info@colorlib.com </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright_part_text text-center">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="{{ asset('fontend') }}/js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="{{ asset('fontend') }}/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('fontend') }}/js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="{{ asset('fontend') }}/js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="{{ asset('fontend') }}/js/swiper.min.js"></script>
    <!-- isotope js -->
    <script src="{{ asset('fontend') }}/js/isotope.pkgd.min.js"></script>
    <!-- particles js -->
    <script src="{{ asset('fontend') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('fontend') }}/js/jquery.nice-select.min.js"></script>
    <!-- swiper js -->
    <script src="{{ asset('fontend') }}/js/slick.min.js"></script>
    <script src="{{ asset('fontend') }}/js/jquery.counterup.min.js"></script>
    <script src="{{ asset('fontend') }}/js/waypoints.min.js"></script>
    <!-- custom js -->
    <script src="{{ asset('fontend') }}/js/custom.js"></script>
</body>

</html>