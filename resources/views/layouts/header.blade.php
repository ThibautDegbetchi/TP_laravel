<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>e-Loc laravel 10</title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600,700%7CPoppins:400,400i,500,600&display=swap" rel="stylesheet">

    <!-- build:css assets/css/app.min.css -->
    <!--== Leaflet Min CSS ==-->
    <link href="assets/css/leaflet.min.css" rel="stylesheet" />
    <!--== Nice Select Min CSS ==-->
    <link href="assets/css/nice-select.min.css" rel="stylesheet" />
    <!--== Slick Slider Min CSS ==-->
    <link href="assets/css/slick.min.css" rel="stylesheet" />
    <!--== Magnific Popup Min CSS ==-->
    <link href="assets/css/magnific-popup.min.css" rel="stylesheet" />
    <!--== Slicknav Min CSS ==-->
    <link href="assets/css/slicknav.min.css" rel="stylesheet" />
    <!--== Animate Min CSS ==-->
    <link href="assets/css/animate.min.css" rel="stylesheet" />
    <!--== Ionicons Min CSS ==-->
    <link href="assets/css/ionicons.min.css" rel="stylesheet" />
    <!--== Font-Awesome Min CSS ==-->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--== Bootstrap Min CSS ==-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--== Main Style CSS ==-->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!--== Helper Min CSS ==-->
    <link href="assets/css/helper.min.css" rel="stylesheet" />
    <!-- endbuild -->

    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<header class="header-area">
    <div class="container container-wide">
        <div class="row align-items-center">
            <div class="col-sm-4 col-lg-2">
                <div class="site-logo text-center text-sm-left">
                    <a href="../dashboard"><img src="assets/img/logo.jpeg" alt="Logo" /></a>
                </div>
            </div>

            <div class="col-lg-7 d-none d-lg-block">
                <div class="site-navigation">
                    <ul class="main-menu nav">
                        <li class="has-submenu"><a href="/">Accueil</a>
                            <!--<ul class="sub-menu">
                                <li><a href="index.html">Home 1</a></li>
                                <li><a href="index-2.html">Home 2</a></li>
                                <li><a href="index-boxed.html">Home Box Layout</a></li>
                            </ul>-->
                        </li>
                        <li><a href="../a-propos">A propos</a></li>
                        <li class="has-submenu"><a href="../nos-produits">Disponibles</a>
                            <!--<ul class="sub-menu">
                                <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                <li><a href="single-product.html">Single Product</a></li>
                            </ul>-->
                        </li><!--
                        <li class="has-submenu"><a href="blog.html">blog</a>
                            <ul class="sub-menu">
                                <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                <li><a href="blog.html">Blog Right Sidebar</a></li>
                                <li><a href="blog-details.html">Single Blog</a></li>
                                <li><a href="blog-details-sidebar.html">Single Blog Sidebar</a></li>
                            </ul>
                        </li>-->
                        <!--<li><a href="../gallery">Gallerie</a></li>---->
                        <!--<li class="has-submenu"><a href="index.html">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                            </ul>
                        </li>-->
                        <li><a href="../nous-contacter">Contact</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-8 col-lg-3">
                <div class="site-action d-flex justify-content-center justify-content-sm-end align-items-center">

                    @if(!isset(Auth::user()->name))
                        <ul class="login-reg-nav nav">
                            <li><a href="../auth/login">CONNEXION</a></li>
                            <li><a href="../auth/register">S'INSCRIRE</a></li>
                        </ul>
                    @else
                        <div class="mini-cart-wrap">
                            <a href="cart.html" class="btn-mini-cart">{{Auth::user()->name}}</a>
                            <div class="mini-cart-content">
                                <div class="mini-cart-product">
                                    <div class="mini-product">
                                        <a href="../ajouter" >{{ __('Ajouter voiture') }}</a>
                                    </div>

                                    <div class="mini-product">
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <x-dropdown-link :href="route('logout')"
                                                             onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </x-dropdown-link>
                                        </form>
                                    </div>

                                    <div class="mini-product">

                                    </div>
                                </div>
                                <div class="mini-cart-product">

                                </div>
                            </div>
                        </div>
                    @endif

                    <!-- Settings Dropdown -->



                    <div class="responsive-menu d-lg-none">
                        <button class="btn-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
