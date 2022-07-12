<!doctype html>
<html lang="en">

<head>
    <title>Table 03</title>
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
                                        <a style="color: grey" class="mobile-hide search-bar-icon" href="#"><i
                                                class="fas fa-search @yield('active-class')"></i></a>
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
    @if ($notification = Session::get('updateSuccess'))
        <div class="alert alert-success alert-block">
            <strong>{{ $notification }}</strong>
        </div>
    @endif
    @if ($notification = Session::get('updateFailed'))
        <div class="alert alert-danger alert-block">
            <strong>{{ $notification }}</strong>
        </div>
    @endif
    @if ($notification = Session::get('deleteSuccess'))
        <div class="alert alert-success alert-block">
            <strong>{{ $notification }}</strong>
        </div>
    @endif
    @if ($notification = Session::get('deleteFailed'))
        <div class="alert alert-danger alert-block">
            <strong>{{ $notification }}</strong>
        </div>
    @endif
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">My services</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-center mb-4"></h4>
                    <div class="table-wrap">
                        <table class="table">
                            <thead class="thead-primary">
                                <tr>
                                    <th>No</th>
                                    <th>Services</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Material</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($vendor_data as $data)
                                    <tr>
                                        <th>Dummy Num</th>
                                        <td>{{ $data->services }}</td>
                                        <td>{{ $data->description }}</td>
                                        <td>Rp. {{ $data->lower_price }} - {{ $data->upper_price }}</td>
                                        <td>{{ $data->material }}</td>
                                        <td> <a href="/vendor/my-services/edit/{{ $data->id }}" type="button"
                                                class="btn btn-primary btn-md">Edit</a></td>
                                        <td>
                                            <form action="/vendor/my-services/delete/{{ $data->id }}"
                                                method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger btn-md"
                                                    onclick="return confirm('Are you sure want to delete <?php echo $data->services; ?>')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
