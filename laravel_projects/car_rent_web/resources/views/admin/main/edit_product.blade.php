@extends('admin.main.layout.main')

@section('admin_content')
<style>
    .add-product-container {
        max-width: 600px;
        margin: 30px auto;
        padding: 20px;
        background-color: var(--light-color);
        border-radius: 12px;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
    }

    .add-product-container h2 {
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

    .current-image {
        margin-top: 10px;
        border-radius: 6px;
        box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.1);
    }
</style>

<div class="add-product-container">
    <h2>Edit Product</h2>

    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label class="form-label">Product Name:</label>
            <input type="text" name="name" value="{{ $product->name }}" class="form-control" required>
        </div>
        

        <div class="form-group">
            <label class="form-label">Price:</label>
            <input type="number" name="price" value="{{ $product->price }}"  class="form-control" required style="width: 30%;">
        </div>

        <div class="form-group">
            <label class="form-label">Category ID:</label>
            <input type="number" name="cat_id" value="{{ $product->cat_id }}" class="form-control" required>
        </div>

        <div class="form-group">
            <label class="form-label">Current Image:</label><br>
            <img src="{{ asset('uploads/products/' . $product->image) }}" width="100" height="80" class="current-image">
        </div>

        <div class="form-group">
            <label class="form-label">New Image (optional):</label>
            <input type="file" name="image" class="form-control">
        </div>

        <button type="submit" class="btn-submit">Update Product</button>
    </form>
</div>
@endsection