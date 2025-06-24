<!DOCTYPE html>
<html>

<head>
    <title>Todo List</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">




    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <!-- Navbar Start -->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container d-flex justify-content-between align-items-center">

            <!-- Left: Welcome Zaid -->
            <div class="text-white fw-semibold">
                Welcome {{ session('admin_name') }}
            </div>
            <div class="text-white fw-bold fs-5">
                <a href="index">form</a>
            </div>

            <!-- Center: TODO List -->
            <div class="text-white fw-bold fs-5">
                <h2 class="text-center ">My TODO List</h2>
            </div>
            <div class="text-white fw-bold fs-5">
                <a href="table">Table</a>
            </div>
            <div>
                <a href="{{ route('logout') }}" onclick="return confirm('Are you sure you want to logout?')" class=" btn btn-sm btn-success"> logout</a>
            </div>


        </div>
    </nav>
    <!-- Navbar End -->

    <div class="container mt-5">