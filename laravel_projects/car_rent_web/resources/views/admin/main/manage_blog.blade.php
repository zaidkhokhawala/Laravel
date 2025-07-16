@extends('admin.main.layout.main')

@section('admin_content')
<style>
    .manage-blog-container {
        max-width: 1000px;
        margin: 40px auto;
        padding: 25px;
        background-color: var(--light-color);
        border-radius: 12px;
        box-shadow: 3px 3px 12px rgba(0, 0, 0, 0.1);
    }

    .manage-blog-container h2 {
        text-align: center;
        font-size: 26px;
        color: var(--dark-text-color);
        margin-bottom: 25px;
        text-shadow: 1px 1px 3px #ccc;
    }

    .table {
        width: 100%;
        border-collapse: collapse;
        background-color: #f7f7f7;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.1);
    }

    .table thead {
        background-color: var(--accent-color);
        color: white;
    }

    .table th, .table td {
        padding: 12px 15px;
        text-align: center;
        border-bottom: 1px solid #ddd;
    }

    .table tbody tr:hover {
        background: linear-gradient(145deg, rgb(126, 0, 0), rgb(0, 0, 0));
        color: white;
        transition: 0.3s ease;
    }

    .blog-img {
        width: 60px;
        height: 45px;
        border-radius: 6px;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .blog-img:hover {
        transform: scale(2);
    }

    .btn-action {
        font-size: 13px;
        padding: 4px 10px;
        border-radius: 5px;
        margin: 0 2px;
    }

    .btn-edit {
        background-color: #ffc107;
        color: white;
        border: none;
    }

    .btn-delete {
        background-color: #dc3545;
        color: white;
        border: none;
    }

    .btn-edit:hover,
    .btn-delete:hover {
        opacity: 0.85;
    }
</style>

<div class="manage-blog-container">
    <h2>Manage Blogs</h2>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Title</th>
                <th>Content</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            {{-- Sample rows --}}
            <tr>
                <td>1</td>
                <td><img src="{{ asset('assets/images/blog1.jpg') }}" class="blog-img" alt="Blog Image"></td>
                <td>Reading Tips</td>
                <td>Lorem ipsum dolor sit amet, consectetur...</td>
                <td>
                    <a href="#" class="btn-action btn-edit">Edit</a>
                    <a href="#" class="btn-action btn-delete">Delete</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td><img src="{{ asset('assets/images/blog2.jpg') }}" class="blog-img" alt="Blog Image"></td>
                <td>Top 5 Books of 2025</td>
                <td>Discover amazing titles to add to your list...</td>
                <td>
                    <a href="#" class="btn-action btn-edit">Edit</a>
                    <a href="#" class="btn-action btn-delete">Delete</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
