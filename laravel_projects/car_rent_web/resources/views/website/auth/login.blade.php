@extends('website.auth.auth_layout.auth_main')

@section('auth_content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow border-0 rounded-4">
                <div class="card-body p-4">
                    <h3 class="text-center mb-4">login</h3>



                    {{-- Register Form --}}
                    <form method="POST" action="{{route('login.check')}}">
                        @csrf



                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter email">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter password">
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">log in</button>
                        </div>
                        <p class="text-center mt-3">
                            Not registered?
                            <a href="{{ route('register') }}">Register here</a>
                        </p>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection