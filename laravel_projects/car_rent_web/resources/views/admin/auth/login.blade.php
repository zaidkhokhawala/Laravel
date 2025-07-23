
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Add your theme CSS here --}}
    <style>
        :root {
            --accent-color: #C5A992;
            --secondary-color: #C5A992;
            --dark-color: #2f2f2f;
            --light-color: #F3F2EC;
            --body-text-color: #757575;
            --light-text-color: #afafaf;
            --dark-text-color: #837b7bff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--light-color);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-box {
            background-color: #fff;
            padding: 40px 30px;
            border-radius: 12px;
            box-shadow: 0 5px 20px var(--dark-text-color);
            max-width: 500px;
            width: 100%;
        }

        .login-box h1 {
            text-align: center;
            margin-bottom: 30px;
            color: var(--dark-color);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            color: var(--dark-text-color);
            margin-bottom: 8px;
            font-weight: 600;
        }

        .form-group input {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid var(--light-text-color);
            border-radius: 8px;
            background-color: var(--light-color);
            font-size: 14px;
            color: var(--dark-color);
            transition: border-color 0.3s;
        }

        .form-group input:focus {
            border-color: var(--accent-color);
            outline: none;
        }

        .login-btn {
            margin-left: 110px;
            width: 50%;
            padding: 12px;
            background-color: var(--accent-color);
            border: solid 2px ;
            border-color: #2f2f2f;
            border-radius: 80px;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-btn:hover {
            background-color: #b8987f;
        }

        .error-message {
            color: red;
            font-size: 13px;
            margin-top: 5px;
        }
    </style>
</head>
<body>
@include('sweetalert::alert')
    <div class="login-box">
        <h1>Admin Login</h1>
<form method="POST" action="{{ route('admin.login.check') }}">

            @csrf

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" name="email" id="email" placeholder="Enter your email" >
                @error('email')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">   
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter your password" >
                @error('password')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="login-btn">Login</button>
        </form>
    </div>

</body>
</html>
