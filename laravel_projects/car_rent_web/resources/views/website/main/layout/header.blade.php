<!DOCTYPE html>
<html lang="en">

<head>
    <title>BookSaw - Free Book Store HTML CSS Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/normalize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icomoon/icomoon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendor.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">


</head>

<body data-bs-spy="scroll" data-bs-target="#header" tabindex="0">

    <div id="header-wrap">

        <div class="top-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="social-links">
                            <ul>
                                <li>
                                    <a href="./assets/#"><i class="icon icon-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="./assets/#"><i class="icon icon-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="./assets/#"><i class="icon icon-youtube-play"></i></a>
                                </li>
                                <li>
                                    <a href="./assets/#"><i class="icon icon-behance-square"></i></a>
                                </li>
                            </ul>
                        </div><!--social-links-->
                    </div>
                    <div class="col-md-6">
                        <div class="right-element">
                            <a href="./assets/#" class="user-account for-buy"><i
                                    class="icon icon-user"></i><span>Account</span></a>
                            <a href="{{ route('cart') }}" class="cart for-buy"><i class="icon icon-clipboard"></i><span>Cart:(0
                                    $)</span></a>

                            <div class="action-menu">

                                <div class="search-bar">
                                    <a href="./assets/#" class="search-button search-toggle" data-selector="#header-wrap">
                                        <i class="icon icon-search"></i>
                                    </a>
                                    <form role="search" method="get" class="search-box">
                                        <input class="search-field text search-input" placeholder="Search"
                                            type="search">
                                    </form>
                                </div>
                            </div>

                        </div><!--top-right-->
                    </div>

                </div>
            </div>
        </div><!--top-content-->

        <header id="header">
            <div class="container-fluid ">
             <div class="row align-items-center justify-content-between d-flex">
    
    <div class="col-md-3 pl-5">
        <div class="main-logo">
            <a href="index.php">
                <img src="{{ asset('assets/images/main-logo.png') }}" alt="logo">
            </a>
        </div>
    </div>

    <div class="col-md-7 ">
        <nav id="navbar">
            <div class="main-menu stellarnav">
                <ul class="menu-list">
                    <li class="menu-item active"><a href="{{ route('index') }}">Home</a></li>
                    <li class="menu-item"><a href="{{ route('collection') }}" class="nav-link">Collection</a></li>
                    <li class="menu-item"><a href="{{ route('offer') }}" class="nav-link">Offer</a></li>
                    <li class="menu-item"><a href="{{ route('blog') }}" class="nav-link">Blog</a></li>
                    <li class="menu-item"><a href="{{ route('app_d') }}" class="nav-link">Download App</a></li>
                </ul>

                <div class="hamburger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </div>
        </nav>
    </div>

</div>

            </div>
        </header>

    </div><!--header-wrap-->