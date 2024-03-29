<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

    <!-- title -->
    <title>@yield('title')</title>

    @if ('active')
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
    @else
        <!-- favicon -->
        <link rel="shortcut icon" type="image/png" href="favicon.ico">
        <!-- google font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
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
    @endif

</head>

<body>

    <!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->

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
                                <!-- Jika sudah login -->
                                @if (Auth::check())
                                    @if (Auth::user()->levels == 'user')
                                        <li class="@yield('active-class-home')"><a href="/user/dashboard">Home</a></li>
                                        <li class="@yield('active-class-about')"><a href="/main/about">About</a></li>
                                        <li class="@yield('active-class-news')"><a href="/main/news">News</a>
                                        </li>
                                        <li class="@yield('active-class-contact')"><a href="/main/contact">Contact</a></li>
                                        <li class="@yield('active-class-shop')"><a href="/main/shop">Shop</a>
                                            <ul class="sub-menu">
                                                <li><a href="/vendor-list">Our Vendor</a></li>
                                                <li><a href="/main/checkout">Our Event Organizer</a></li>
                                                <li><a href="/main/single-product">Our Sponsorship Agency</a>
                                                </li>
                                                <li><a href="/main/cart">Cart</a></li>
                                            </ul>
                                        </li>
                                        <li class="@yield('active-class-join')"><a href="/user/join">Join Us</a>
                                            <ul class="sub-menu">
                                                <li><a href="/user/join-vendor">Join Vendor</a></li>
                                                <li><a href="/user/join-event-organizer">Join Event Organizer</a></li>
                                            </ul>
                                        </li>
                                        <!-- Jika Login sebagai vendor -->
                                    @elseif(Auth::user()->levels == 'vendor')
                                        <li class="@yield('active-class-vendor-messages')"><a href="/vendor/messages">Messages</a></li>
                                        <li class="@yield('active-class-add-services')"><a href="/vendor/add-services">Add Services</a>
                                        <li class="@yield('active-class-my-services')"><a href="/vendor/my-services">My Services</a>
                                        </li>
                                    @endif
                                    <!-- Jika Belum Login -->
                                @else
                                    <li class="@yield('active-class-home')"><a href="/">Home</a></li>
                                    <li class="@yield('active-class-about')"><a href="/main/about">About</a></li>
                                    <li class="@yield('active-class-news')"><a href="/main/news">News</a>
                                    </li>
                                    <li class="@yield('active-class-contact')"><a href="/main/contact">Contact</a></li>
                                    <li class="@yield('active-class-shop')"><a href="/main/shop">Shop</a>
                                        <ul class="sub-menu">
                                            <li><a href="/login">Login to see our partners</a></li>
                                        </ul>
                                    </li>
                                @endif
                                <li>
                                    <div class="header-icons">
                                        <a class="shopping-cart" href="cart.html"><i
                                                class="fas fa-shopping-cart @yield('active-class')"></i></a>
                                        <a class="mobile-hide search-bar-icon" href="#"><i
                                                class="fas fa-search @yield('active-class')"></i></a>
                                        @if (Auth::check())
                                            <a class="mobile-hide" href="/logout"><i
                                                    class="fas fa-sign-out-alt"></i></a>
                                        @else
                                            <a href="{{ url('/login') }}" class="mobile-hide">Login</a>
                                        @endif
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

    <!-- search area -->
    <div class="search-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="close-btn"><i class="fas fa-window-close"></i></span>
                    <div class="search-bar">
                        <div class="search-bar-tablecell">
                            <h3>Search For:</h3>
                            <input type="text" placeholder="Keywords">
                            <button type="submit">Search <i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end search area -->
    @yield('content')

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

    <!-- jquery -->
    <script src="/js/jquery-1.11.3.min.js"></script>
    <!-- bootstrap -->
    <script src="/bootstrap/js/bootstrap.min.js"></script>
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
    <!-- search js -->
    <script>
        $(document).ready(function(e) {
            $('.search-panel .dropdown-menu').find('a').click(function(e) {
                e.preventDefault();
                var param = $(this).attr("href").replace("#", "");
                var concept = $(this).text();
                $('.search-panel span#search_concept').text(concept);
                $('.input-group #search_param').val(param);
            });
        });
        var a = document.getElementByTagName('a').item(0);
        $(a).on('keyup', function(evt) {
            console.log(evt);
            if (evt.keycode === 13) {

                alert('search?');
            }
        });
    </script>
</body>

</html>
