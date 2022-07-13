<!doctype html>
<html lang="en">

<head>
    <title>{{ $vendor->services }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="/tables/css/style.css">

    <!-- fontawesome -->
    <link rel="stylesheet" href="/css/all.min.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <!-- animate css -->
    <link rel="stylesheet" href="/css/animate.css">
    <!-- mean menu css -->
    <link rel="stylesheet" href="/css/meanmenu.min.css">
    <!-- main style -->
    <link rel="stylesheet" href="/css/main.css">
    <!-- responsive -->
    <link rel="stylesheet" href="/css/responsive.css">

</head>

<body>
    <!-- header -->
    <div class="top-header-area" id="sticker">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 text-center">
                    <div class="main-menu-wrap">
                        <!-- logo -->
                        <div class="site-logo">
                            <a href="index.html">
                            </a>
                        </div>
                        <!-- logo -->

                        <!-- menu start -->
                        <nav class="main-menu">
                            <ul>
                                <li class="@yield('active-class-home')"><a style="color: grey" href="/">Home</a>
                                </li>
                                <li class="@yield('active-class-vendor-messages')"><a style="color: grey"
                                        href="/vendor/messages">Messages</a></li>
                                <li class="@yield('active-class-add-services')"><a style="color: grey" href="/vendor/add-services">Add
                                        Services</a>
                                <li class="@yield('active-class-my-services')"><a style="color: grey" href="/vendor/my-services">My
                                        Services</a>
                                </li>
                                <li>
                                    <div class="header-icons">
                                        <a style="color: grey" class="shopping-cart" href="cart.html"><i
                                                class="fas fa-shopping-cart @yield('active-class')"></i></a>
                                        <a style="color: grey" class="mobile-hide" href="/logout"><i
                                                class="fas fa-sign-out-alt"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                        <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                        <div class="mobile-menu"></div>
                        <!-- menu end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header -->
    <section class="ftco-section">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h2 class="d-flex justify-content-center heading-section">{{ $vendor->services }}</h2>
                    <h2 class="d-flex justify-content-center heading-section">By</h2>
                    <h2 class="d-flex justify-content-center heading-section">{{ $vendor_name }}</h2>
                </div>
                <div class="card-body">
                    <h3>Description</h3>
                    <h6>{{ $vendor->description }}</h6>
                    <hr>
                    <h3>Price</h3>
                    <h6>{{ $vendor->lower_price }} - {{ $vendor->upper_price }}</h6>
                    <hr>
                    <h3>Material</h3>
                    <h6>{{ $vendor->material }}</h6>
                    <hr>
                    <h3>Contact</h3>
                    <a href="mailto:{{ $vendor->email }}">Contact</a>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box about-widget">
                        <h2 class="widget-title">About us</h2>
                        <p>Ut enim ad minim veniam perspiciatis unde omnis iste natus error sit voluptatem accusantium
                            doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box get-in-touch">
                        <h2 class="widget-title">Get in Touch</h2>
                        <ul>
                            <li>34/8, East Hukupara, Gifirtok, Sadan.</li>
                            <li>support@fruitkha.com</li>
                            <li>+00 111 222 3333</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box pages">
                        <h2 class="widget-title">Pages</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="services.html">Shop</a></li>
                            <li><a href="news.html">News</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box subscribe">
                        <h2 class="widget-title">Subscribe</h2>
                        <p>Subscribe to our mailing list to get the latest updates.</p>
                        <form action="index.html">
                            <input type="email" placeholder="Email">
                            <button type="submit"><i class="fas fa-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end footer -->

    <!-- copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <p>Copyrights &copy; 2019 - <a href="https://imransdesign.com/">Imran Hossain</a>, All Rights
                        Reserved.<br>
                        Distributed By - <a href="https://themewagon.com/">Themewagon</a>
                    </p>
                </div>
                <div class="col-lg-6 text-right col-md-12">
                    <div class="social-icons">
                        <ul>
                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end copyright -->

    <script src="/tables/js/jquery.min.js"></script>
    <script src="/tables/js/popper.js"></script>
    <script src="/tables/js/bootstrap.min.js"></script>
    <script src="/tables/js/main.js"></script>
    <!-- count down -->
    <script src="/js/jquery.countdown.js"></script>
    <!-- isotope -->
    <script src="/js/jquery.isotope-3.0.6.min.js"></script>
    <!-- waypoints -->
    <script src="/js/waypoints.js"></script>
    <!-- owl carousel -->
    <script src="/js/owl.carousel.min.js"></script>
    <!-- magnific popup -->
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <!-- mean menu -->
    <script src="/js/jquery.meanmenu.min.js"></script>
    <!-- sticker js -->
    <script src="/js/sticker.js"></script>
    <!-- main js -->
    <script src="/js/main.js"></script>
</body>

</html>
