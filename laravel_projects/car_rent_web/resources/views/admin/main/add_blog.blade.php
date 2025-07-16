@extends('admin.main.layout.main')

@section('admin_content')
<style>
    .add-blog-container {
        max-width: 650px;
        margin: 30px auto;
        padding: 20px;
        background-color: var(--light-color);
        border-radius: 12px;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
    }

    .add-blog-container h2 {
        text-align: center;
        font-size: 24px;
        color: var(--dark-text-color);
        margin-bottom: 20px;
    }

    .form-label {
        font-weight: 500;
        color: var(--dark-text-color);
        font-size: 14px;
        margin-bottom: 5px;
    }

    .form-control:focus {
        border-color: var(--accent-color);
        box-shadow: 0 0 4px var(--accent-color);
    }

    .btn-submit {
        background-color: var(--accent-color);
        border: none;
        color: white;
        margin-left: 173px;
        font-weight: 600;
        border-radius: 100px;
        width: 40%;
        transition: 0.3s ease-in-out;
        font-size: 15px;
    }

    .btn-submit:hover {
        background-color: #b38b6d;
    }

    .form-group {
        margin-bottom: 15px;
    }
</style>

<div class="add-blog-container">
    <h2>Add New Blog</h2>

    <form action="" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label class="form-label">Blog Image :</label>
            <input type="file" name="image" class="form-control" required>
        </div>

        <div class="form-group">
            <label class="form-label">Blog Title :</label>
            <input type="text" name="title" class="form-control" placeholder="Enter blog title" required>
        </div>

        <div class="form-group">
            <label class="form-label">Blog Content :</label>
            <textarea name="content" rows="5" class="form-control" placeholder="Enter blog content" required></textarea>
        </div>

        <button type="submit" class="btn btn-submit">Add Blog</button>
    </form>
</div>
@endsection
