<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/logoPetakomkecil.ico') }}">
    <link
        href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flexslider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chosen.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-01.css') }}">
    @livewireStyles

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=Promise%2CObject.entries%2CObject.assign"></script>


    <style>
        .modal-header {
            padding: 9px 15px;
            border-bottom: 1px solid #eee;
            background-color: #3fbddd;
            -webkit-border-top-left-radius: 5px;
            -webkit-border-top-right-radius: 5px;
            -moz-border-radius-topleft: 5px;
            -moz-border-radius-topright: 5px;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        .banner-countdown {
            position: relative;
            left: 2px;
            width: 80%;
            height: 40%;
            margin: 0 auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            border-radius: 10px;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            text-align: left;
            padding: 8px;
        }

        .avatar {
            vertical-align: middle;
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }

        .column-avatar {
            border-collapse: collapse;
            width: 20%;
        }
    </style>


    <!-- Modal Profile-->
    <div class="modal faded" id="profileModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="profileModalLabel"></h1>
                    <button type="button" class="btn btn-primary" style="background-color: #1068eb;">View Schedule
                        Duty</button>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        style="color: white;"><button type="button" class="btn btn-danger" style=" float: right;"><i
                                class="fa fa-power-off">&nbsp;Logout</i></button></a>
                    <form id="logout-form" method="POST" action="{{ route('logout') }}">
                        @csrf
                    </form>
                </div>
                <div class="modal-body">
                    <!-- Profile with Image  -->
                    <div class="modal-body">
                        <div class="banner-countdown">
                            <table>
                                <tr>
                                    <th class="column-avatar"><img
                                            src="https://img.freepik.com/free-photo/young-bearded-man-with-striped-shirt_273609-5677.jpg"
                                            alt="Avatar" class="avatar"></th>
                                    <th>
                                        <h5><b>Mr. Hassan Magdy</b></h5>
                                    </th>
                                </tr>
                                <tr>
                                    <td class="column-avatar"></td>
                                    <td>
                                        <p>Cashier <br><br>
                                            Email: hassan@gmail.com <br>
                                            No Phone: 018-4643504 <br>
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <!-- Profile Details  -->
                    <div class="modal-body">
                        <div class="banner-countdown">
                            <h5><b>Profile Details</b></h5>
                            <p>Faculty: FKOM <br>
                                Course: BCS <br>
                            </p>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</head>

<body class="home-page home-01 ">

    <!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>


    <!--header-->
    <header id="header" class="header header-style-1">
        <div class="container-fluid">
            <div class="row">
                <div class="topbar-menu-area">
                    <div class="container">
                        <div class="topbar-menu left-menu">
                            <ul>
                                <li class="menu-item">
                                    <a title="Hotline: (+123) 456 789" href="#"><span
                                            class="icon label-before fa fa-mobile"></span>Hotline: (+123) 456 789</a>
                                </li>
                            </ul>
                        </div>
                        <div class="topbar-menu right-menu">
                            <ul>
                                <li class="menu-item lang-menu menu-item-has-children parent">
                                    <a title="English" href="#"><span class="img label-before"><img
                                                src="{{ asset('assets/images/lang-en.png') }}"
                                                alt="lang-en"></span>English<i class="fa fa-angle-down"
                                            aria-hidden="true"></i></a>
                                    <ul class="submenu lang">
                                        <li class="menu-item"><a title="hungary" href="#"><span
                                                    class="img label-before"><img
                                                        src="{{ asset('assets/images/lang-hun.png') }}"
                                                        alt="lang-hun"></span>Hungary</a></li>
                                        <li class="menu-item"><a title="german" href="#"><span
                                                    class="img label-before"><img
                                                        src="{{ asset('assets/images/lang-ger.png') }}"
                                                        alt="lang-ger"></span>German</a></li>
                                        <li class="menu-item"><a title="french" href="#"><span
                                                    class="img label-before"><img
                                                        src="{{ asset('assets/images/lang-fra.png') }}"
                                                        alt="lang-fre"></span>French</a></li>
                                        <li class="menu-item"><a title="canada" href="#"><span
                                                    class="img label-before"><img
                                                        src="{{ asset('assets/images/lang-can.png') }}"
                                                        alt="lang-can"></span>Canada</a></li>
                                    </ul>
                                </li>



                                @if (Auth::guard('staff')->user())
                                    @auth
                                        <li class="menu-item menu-item-has-children parent">
                                            <a title="My Account" href="#Profile" data-toggle="modal"
                                                data-target="#profileModal">My Cashier Account
                                                ({{ Auth::user()->name }})
                                        </li>
                                    @else
                                        <li class="menu-item menu-item-has-children parent">
                                            <a title="My Account" href="/hub">My Admin Account
                                                ({{ Auth::guard('staff')->user()->firstname }})
                                        </li>
                                    @endauth
                                @else
                                    @auth
                                        <li class="menu-item menu-item-has-children parent">
                                            <a title="My Account" href="#Profile" data-toggle="modal"
                                                data-target="#profileModal">My Cashier Account
                                                ({{ Auth::user()->name }})
                                        </li>
                                    @else
                                        <li class="menu-item"><a title="Register or Login"
                                                href="{{ route('login') }}">Login</a></li>
                                        @if (Auth::guard('staff')->user())
                                            <li class="menu-item"><a title="Register or Login" href="/hub">View as
                                                    Admin</a></li>
                                        @else
                                            <li class="menu-item"><a title="Register or Login" href="/hub">Log as
                                                    Admin</a></li>
                                        @endif
                                        {{-- <li class="menu-item"><a title="Register or Login"
                                                            href="{{ route('register') }}">Register</a></li> --}}
                                    @endauth
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="container">



                    <div class="mid-section main-info-area">


                        <div class="wrap-logo-top left-section">
                            <a href="{{ url('/') }}" class="link-to-home"
                                style="font-size:14px; font-weight: 800;"><img
                                    src="{{ asset('assets/images/logo-PETAKOM.png') }}" alt="mercado"
                                    style="height: 60px; width: 60px;"> PETAKOM MART
                            </a>
                        </div>

                        @livewire('header-search-component')

                        <div class="wrap-icon right-section">
                            @auth
                                <div class="wrap-icon-section wishlist">
                                    <a href="#Profile" class="link-direction" data-toggle="modal"
                                        data-target="#profileModal">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <div class="left-info">
                                            <span class="index">Hello, User</span> {{-- Username --}}
                                            <span class="title">Profile</span>
                                        </div>
                                    </a>
                                </div>
                            @else
                                <div class="wrap-icon-section wishlist">
                                    <a href="#" class="link-direction">
                                        <i class="" aria-hidden="true"></i>
                                        <div class="left-info">
                                            <span class=""></span>
                                            <span class="title"></span>
                                        </div>
                                    </a>
                                </div>
                            @endauth
                            <div class="wrap-icon-section minicart">
                                <a href="{{ url('/cart') }}" class="link-direction">
                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                    <div class="left-info">
                                        @auth
                                            @if (Cart::count() > 0)
                                                <span class="index">{{ Cart::count() }} Item</span>
                                            @endif
                                        @else
                                            @if (Cart::count() > 0)
                                                <span class="index">Login to know</span>
                                            @else
                                                <span class="index">0 Item</span>
                                            @endif
                                        @endauth
                                        <span class="title">CART</span>
                                    </div>
                                </a>
                            </div>
                            <div class="wrap-icon-section show-up-after-1024">
                                <a href="#" class="mobile-navigation">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="nav-section header-sticky">
                    <div class="header-nav-section">
                        <div class="container">
                            <ul class="nav menu-nav clone-main-menu" id="mercado_haead_menu"
                                data-menuname="Sale Info">
                                <li class="menu-item"><a class="link-term"></a></li>
                                <li class="menu-item"><a href="/#section1" class="link-term">Weekly Featured</a><span
                                        class="nav-label hot-label">hot</span></li>
                                <li class="menu-item"><a href="/#section2" class="link-term">Hot Sale items</a><span
                                        class="nav-label hot-label">hot</span></li>
                                <li class="menu-item"><a href="/#section3" class="link-term">Top new items</a><span
                                        class="nav-label hot-label">hot</span></li>
                                <li class="menu-item"><a href="/#section4" class="link-term">Categories</a><span
                                        class="nav-label hot-label">hot</span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="primary-nav-section">
                        <div class="container">
                            <ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu">
                                <li class="menu-item home-icon">
                                    <a href="{{ url('/') }}" class="link-term mercado-item-title"><i
                                            class="fa fa-home" aria-hidden="true"></i></a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{ url('/about-us') }}" class="link-term mercado-item-title">About
                                        Us</a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{ url('/shop') }}" class="link-term mercado-item-title">Shop</a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{ url('/cart') }}" class="link-term mercado-item-title">Cart</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    {{ $slot }}

    @yield('content')

    <footer id="footer">
        <div class="wrap-footer-content footer-style-1">

            <div class="wrap-function-info">
                <div class="container">
                    <ul>
                        <li class="fc-info-item">
                            <i class="fa fa-truck" aria-hidden="true"></i>
                            <div class="wrap-left-info">
                                <h4 class="fc-name">Free Shipping</h4>
                                <p class="fc-desc">Free On Oder Over $99</p>
                            </div>

                        </li>
                        <li class="fc-info-item">
                            <i class="fa fa-recycle" aria-hidden="true"></i>
                            <div class="wrap-left-info">
                                <h4 class="fc-name">Guarantee</h4>
                                <p class="fc-desc">30 Days Money Back</p>
                            </div>

                        </li>
                        <li class="fc-info-item">
                            <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
                            <div class="wrap-left-info">
                                <h4 class="fc-name">Safe Payment</h4>
                                <p class="fc-desc">Safe your online payment</p>
                            </div>

                        </li>
                        <li class="fc-info-item">
                            <i class="fa fa-life-ring" aria-hidden="true"></i>
                            <div class="wrap-left-info">
                                <h4 class="fc-name">Online Suport</h4>
                                <p class="fc-desc">We Have Support 24/7</p>
                            </div>

                        </li>
                    </ul>
                </div>
            </div>
            <!--End function info-->

            <div class="main-footer-content">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                            <div class="wrap-footer-item">
                                <h3 class="item-header">Contact Details</h3>
                                <div class="item-content">
                                    <div class="wrap-contact-detail">
                                        <ul>
                                            <li>
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                <p class="contact-txt">45 Grand Central Terminal New York,NY 1017
                                                    United State USA</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                                <p class="contact-txt">(+123) 456 789 - (+123) 666 888</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                                <p class="contact-txt">Contact@yourcompany.com</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

                            <div class="wrap-footer-item">
                                <h3 class="item-header">Hot Line</h3>
                                <div class="item-content">
                                    <div class="wrap-hotline-footer">
                                        <span class="desc">Call Us toll Free</span>
                                        <b class="phone-number">(+123) 456 789 - (+123) 666 888</b>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                            <div class="wrap-footer-item">
                                <h3 class="item-header">We Using Safe Payments:</h3>
                                <div class="item-content">
                                    <div class="wrap-list-item wrap-gallery">
                                        <img src="{{ asset('assets/images/payment.png') }}"
                                            style="max-width: 260px;">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
                <br><br>

            </div>

            <div class="coppy-right-box">
                <div class="container">
                    <div class="coppy-right-item item-left">
                        <p class="coppy-right-text">Copyright © 2021 PETAKOM Mart. All rights reserved</p>
                    </div>
                    <div class="coppy-right-item item-right">
                        <div class="wrap-nav horizontal-nav">
                            <ul>
                                <li class="menu-item"><a href="{{ url('/about-us') }}" class="link-term">About
                                        us</a></li>
                                <li class="menu-item"><a href="{{ url('/privacy-policy') }}"
                                        class="link-term">Privacy Policy</a></li>
                                <li class="menu-item"><a href="{{ url('/terms-conditions') }}"
                                        class="link-term">Terms & Conditions</a></li>
                                <li class="menu-item"><a href="{{ url('/return-policy') }}" class="link-term">Return
                                        Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.flexslider.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/chosen.jquery.min.js') }}"></script> --}}
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('assets/js/functions.js') }}"></script>
    @livewireScripts



</body>

</html>
