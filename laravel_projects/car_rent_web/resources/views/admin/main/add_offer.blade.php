@extends('admin.main.layout.main')

@section('admin_content')
<style>
    .add-offer-container {
        max-width: 600px;
        margin: 30px auto;
        padding: 20px;
        background-color: var(--light-color);
        border-radius: 12px;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
    }

    .add-offer-container h2 {
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

<div class="add-offer-container">
    <h2>Add New Offer</h2>

    <form action="" method="POST">
        @csrf

        <div class="form-group">
            <label for="offerName" class="form-label">Offer Name :</label>
            <input type="text" name="name" id="offerName" class="form-control" placeholder="Enter offer name" required>
        </div>

        <div class="form-group">
            <label for="oldPrice" class="form-label">Old Price ($):</label>
            <input type="number" name="old_price" id="oldPrice" class="form-control" placeholder="Enter old price" required>
        </div>

        <div class="form-group">
            <label for="offerPrice" class="form-label">Offer Price ($):</label>
            <input type="number" name="offer_price" id="offerPrice" class="form-control" placeholder="Enter offer price" required>
        </div>

        <button type="submit" class="btn btn-submit">Add Offer</button>
    </form>
</div>
@endsection
