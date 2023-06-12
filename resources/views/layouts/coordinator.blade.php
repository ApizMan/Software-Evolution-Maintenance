<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
                    <button type="button" class="btn btn-danger" style=" float: right;"><i class="fa fa-power-off"><a
                                href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                style="color: white;">&nbsp;Logout</a></i></button>
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

                        @if (Auth::guard()->user())
                            <div class="wrap-logo-top left-section">
                                <a href="{{ url('/') }}" class="link-to-home"
                                    style="font-size:14px; font-weight: 800;"><img
                                        src="{{ asset('assets/images/logo-PETAKOM.png') }}" alt="mercado"
                                        style="height: 60px; width: 60px;"> PETAKOM MART
                                </a>
                            </div>
                        @else
                            <div class="wrap-logo-top left-section">
                                <a href="{{ url('/hub') }}" class="link-to-home"
                                    style="font-size:14px; font-weight: 800;"><img
                                        src="{{ asset('assets/images/logo-PETAKOM.png') }}" alt="mercado"
                                        style="height: 60px; width: 60px;"> PETAKOM MART
                                </a>
                            </div>
                        @endif


                        @livewire('header-search-component')

                        <div class="wrap-icon right-section">
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

                    @if (Auth::guard()->user())
                    <div class="primary-nav-section">
                        <div class="container">
                            <ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu">
                                <li class="menu-item home-icon">
                                    <a href="{{ url('/') }}" class="link-term mercado-item-title"><i
                                            class="fa fa-home" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    @else
                    <div class="primary-nav-section">
                        <div class="container">
                            <ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu">
                                <li class="menu-item home-icon">
                                    <a href="{{ url('/hub') }}" class="link-term mercado-item-title"><i
                                            class="fa fa-home" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </header>

    {{ $slot }}


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
