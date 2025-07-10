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
      
        font-size: 24px;
        color: var(--dark-text-color);
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

    /* For price field inline layout */
    .inline-group {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .inline-group label {
        margin-bottom: 0;
        white-space: nowrap;
        font-size: 14px;
    }
</style>

<div class="add-product-container">
    <h2>Add New Product</h2>

    <form action="" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="productImage" class="form-label">Product Image :</label>
            <input type="file" name="image" id="productImage" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="productName" class="form-label">Product Name :</label>
            <input type="text" name="name" id="productName" class="form-control" placeholder="Enter product name" required>
        </div>

        <div class="form-group ">
            <label for="productPrice" class="form-label">Price ($):</label>
            <input type="number" name="price" id="productPrice" class="form-control" placeholder="Enter price" required style="width: 100%;">
        </div>

        <button type="submit" class="btn btn-submit">Add Product</button>
    </form>
</div>
@endsection