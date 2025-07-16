@extends('admin.main.layout.main')

@section('admin_content')
<style>
    .edit-cat-container {
        max-width: 600px;
        margin: 30px auto;
        padding: 20px;
        background-color: var(--light-color);
        border-radius: 12px;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
    }

    .edit-cat-container h2 {
        text-align: center;
        font-size: 26px;
        color: var(--dark-text-color);
        margin-bottom: 25px;
        text-shadow: 1px 1px 2px #ccc;
    }

    .form-label {
        font-weight: 500;
        color: var(--dark-text-color);
        font-size: 14px;
        margin-bottom: 5px;
        display: block;
    }

    .form-control {
        padding: 10px;
        border-radius: 8px;
        border: 1px solid #ccc;
        font-size: 14px;
        width: 100%;
    }

    .form-control:focus {
        border-color: var(--accent-color);
        box-shadow: 0 0 4px var(--accent-color);
    }

    .btn-submit {
        background-color: var(--accent-color);
        border: none;
        color: white;
        margin-top: 10px;
        font-weight: 600;
        border-radius: 100px;
        width: 50%;
        padding: 10px;
        display: block;
        margin-left: auto;
        margin-right: auto;
        transition: 0.3s ease-in-out;
        font-size: 15px;
    }

    .btn-submit:hover {
        background-color: #b38b6d;
    }
</style>

<div class="edit-cat-container">
    <h2>Edit Category</h2>

    <form action="{{ route('category.update', $category->id) }}" method="POST">
        @csrf
        @method('POST') {{-- or use PUT if your route is RESTful --}}

        <div class="form-group">
            <label class="form-label">Category Name:</label>
            <input type="text" name="cat_name" value="{{ $category->cat_name }}" class="form-control" required>
        </div>

        <button type="submit" class="btn-submit">Update Category</button>
    </form>
</div>
@endsection
