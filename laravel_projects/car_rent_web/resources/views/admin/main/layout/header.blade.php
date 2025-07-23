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

                    <div class="col-md-2 pl-5">
                        <div class="main-logo">
                            <a href="index.php">
                                <img src="{{ asset('assets/images/main-logo.png') }}" alt="logo">
                            </a>
                        </div>
                    </div>

                    <div class="col-md-10 ">
                        <nav id="navbar">
                            <div class="main-menu stellarnav">
                                <ul class="menu-list">
                                    <li class="menu-item active"><a href="{{ route('admin_index') }}">Dashboard</a></li>
                                    <li class="menu-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Product</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="{{ route('add_product') }}">Add Product</a></li>
                                            <li><a class="dropdown-item" href="{{ route('manage_product') }}">Manage Product</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Category</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="{{ route('add_cat') }}">Add Category</a></li>
                                            <li><a class="dropdown-item" href="{{ route('manage_cat') }}">Manage Category</a></li>
                                        </ul>
                                    </li>
                                     <li class="menu-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">offer</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="{{ route('add_offer') }}">Add offer</a></li>
                                            <li><a class="dropdown-item" href="{{ route('manage_offer') }}">Manage offer</a></li>
                                        </ul>
                                    </li>

                                    <li class="menu-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Blog</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="{{ route('add_blog') }}">Add Blog</a></li>
                                            <li><a class="dropdown-item" href="{{ route('manage_blog') }}">Manage Blog</a></li>
                                        </ul>
                                    </li>
                                    
                                    <li class="menu-item"><a href="{{ route('manage_user') }}" class="nav-link">Users</a></li>
                                    {{-- ✅ Logout Button --}}
                                    <li class="menu-item logout-item">
                                        <form action="{{ route('admin_logout') }}" method="post" class="logout-form">
                                            @csrf
                                            <button type="submit" class="logout-btn">Logout</button>
                                        </form>
                                    </li>

                                </ul>


                            </div>
                        </nav>
                    </div>










                </div>

            </div>
        </header>

    </div><!--header-wrap-->