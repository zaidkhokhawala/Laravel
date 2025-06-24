

@extends('website.auth.auth_layout.auth_main')

@section('auth_content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow border-0 rounded-4">
                <div class="card-body p-4">
                    <h3 class="text-center mb-4">Register</h3>

                   

                    {{-- Register Form --}}
                    <form method="POST" action="{{route('register.form')}}">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter your name">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter email">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter password">
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>

                        <p class="text-center mt-3">
                            Already registered?
                            <a href="{{route('login')}}">Login here</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection