

@extends('admin.main.layout.main')

@section('admin_content')

<div class="dashboard-container">

    <h1 class="dashboard-title">Welcome, {{ session('admin_username') }} <br> Dashboard Overview</h1>
    
    <div class="dashboard-cards">
        <div class="dashboard-card">
            <i class="fas fa-book"></i>
            <h3>Total Books</h3>
            <p>120</p>
        </div>
        <div class="dashboard-card">
            <i class="fas fa-shopping-cart"></i>
            <h3>Total Orders</h3>
            <p>58</p>
        </div>
        <div class="dashboard-card">
            <i class="fas fa-users"></i>
            <h3>Total Users</h3>
            <p>245</p>
        </div>
        <div class="dashboard-card">
            <i class="fas fa-star-half-alt"></i>
            <h3>Pending Reviews</h3>
            <p>12</p>
        </div>
    </div>
    
    <div class="progress-section">
        <h2 class="progress-title">Sales Progress</h2>
        <div class="progress">
            <div class="progress-bar" style="width: 75%; background-color: var(--accent-color);">75%</div>
        </div>
    </div>
    
    <div class="table-section">
        <h2 class="table-title">Recently Added Books</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Book</th>
                    <th>Author</th>
                    <th>Price</th>
                    <th>Date Added</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Simple way of piece life</td>
                    <td>Armor Ramsey</td>
                    <td>$40.00</td>
                    <td>2025-07-10</td>
                </tr>
                <tr>
                    <td>Great travel at desert</td>
                    <td>Sanchit Howdy</td>
                    <td>$38.00</td>
                    <td>2025-07-09</td>
                </tr>
                <tr>
                    <td>The lady beauty Scarlett</td>
                    <td>Arthur Doyle</td>
                    <td>$45.00</td>
                    <td>2025-07-08</td>
                </tr>
                <tr>
                    <td>Once upon a time</td>
                    <td>Klien Marry</td>
                    <td>$35.00</td>
                    <td>2025-07-07</td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <div class="d-flex flex-row">
        <div style="flex: 1; max-width: 50%; display: flex; flex-direction: column;">
            
     
            
            <div class="analytics-section">
                <h2 class="analytics-title">Performance Analytics</h2>
                <p><strong>Top Genre:</strong> Mystery</p>
                <p><strong>Avg Order Value:</strong> $42.70</p>
                <p><strong>Most Active User:</strong> Sarah Williams</p>
            </div>
            

        </div>
    </div>
</div>

@endsection
