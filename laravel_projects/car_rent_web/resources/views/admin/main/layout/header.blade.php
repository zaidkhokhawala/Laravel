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
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/admin.css') }}">


</head>

<body data-bs-spy="scroll" data-bs-target="#header" tabindex="0">

    <div id="header-wrap">

        <!--top-content-->

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

                    <div class="col-md-9 ">
                        <nav id="navbar">
                            <div class="main-menu stellarnav">
                                <ul class="menu-list">
                                    <li class="menu-item active"><a href="{{ route('index') }}">Dashboard</a></li>
                                    <li class="menu-item dropdown">
    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Product</a>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="{{ route('add_product') }}">Add Product</a></li>
        <li><a class="dropdown-item" href="{{ route('manage_product') }}">Manage Product</a></li>
    </ul>
</li>

                                    <li class="menu-item"><a href="{{ route('offer') }}" class="nav-link">Offer</a></li>
                                    <li class="menu-item"><a href="{{ route('blog') }}" class="nav-link">Blog</a></li>
                                    <li class="menu-item"><a href="{{ route('app_d') }}" class="nav-link">Download App</a></li>
                                    {{-- ✅ Logout Button --}}
                                    <li class="menu-item logout-item">
                                        <div action="" method="POST" class="logout-form">
                                            @csrf
                                            <button type="submit" class="logout-btn">Logout</button>
</div>
                                    </li>

                                </ul>


                            </div>
                        </nav>
                    </div>










                </div>

            </div>
        </header>

    </div><!--header-wrap-->