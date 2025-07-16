@extends('admin.main.layout.main')

@section('admin_content')
<style>
    .manage-product-container {
        max-width: 1000px;
        margin: 40px auto;
        padding: 25px;
        background-color: var(--light-color);
        border-radius: 12px;
        box-shadow: 3px 3px 12px rgba(0, 0, 0, 0.1);
    }

    .manage-product-container h2 {
        text-align: center;
        font-size: 28px;
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

    .table th,
    .table td {
        padding: 12px 15px;
        text-align: center;
        border-bottom: 1px solid #ddd;
    }

    .table tbody tr:hover {
        background: linear-gradient(145deg, rgb(126, 0, 0), rgb(0, 0, 0));
        color: white;
        transition: 0.3s ease;
    }

    .product-img {
        width: 60px;
        height: 45px;
        border-radius: 6px;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .product-img:hover {
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

<div class="manage-product-container">
    <h2>Manage Products</h2>

    <table class="table">
        <thead>
            <tr>
                <th>Sr No</th>
                <th>Image</th>
                <th>Category</th>
                <th>Name</th>
                <th>Price ($)</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php $sr = 1; @endphp
            @foreach ($product_data as $item)

            <tr>
                <td>{{ $sr++ }}</td>
                <td>
                    <img src="{{ asset('uploads/products/' . $item->image) }}" class="product-img" alt="Product Image">
                </td>
                <td>{{ $item->cat_id }}</td> {{-- You can change this to category name if you join tables --}}
                <td>{{ $item->name }}</td>
                <td>{{ $item->price }}</td>
                <td><a href="{{ route('products.edit', $item->id) }}" class="btn-action btn-edit">
                    Edit</a>

                    <a href="{{ route('products.destroy', $item->id) }}"
                        onclick="event.preventDefault(); if(confirm('Are you sure to delete this product?'))
                         document.getElementById('delete-form-{{ $item->id }}').submit();"
                        class="btn-action btn-delete">Delete</a>

                    <form id="delete-form-{{ $item->id }}" action="{{ route('products.destroy', $item->id) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>

                </td>
            </tr>
            @endforeach

            @if($product_data->isEmpty())
            <tr>
                <td colspan="6">No products available.</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection