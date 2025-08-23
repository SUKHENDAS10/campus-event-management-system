<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('images/campus.jpg');
        }
        .login-container {
            max-width: 450px;
            margin: 80px auto;
            background: #ffffff;
            padding: 35px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
        }
        .form-label {
            font-weight: 500;
        }
        .btn-login {
            width: 100%;
            border-radius: 8px;
        }
        .forgot-link {
            font-size: 0.9rem;
        }
        .session-status {
            font-size: 0.95rem;
            color: green;
        }
    </style>
</head>
<body>
@include('home.navbar');
<div class="container">
    <div class="login-container">
        <h3 class="text-center mb-4">Login</h3>

        <!-- Session Status -->
        @if (session('status'))
            <div class="alert alert-success session-status mb-3">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                <x-input-error :messages="$errors->get('email')" class="text-danger mt-1" />
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input id="password" type="password" class="form-control" name="password" required>
                <x-input-error :messages="$errors->get('password')" class="text-danger mt-1" />
            </div>

            <!-- Remember Me -->
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
                <label class="form-check-label" for="remember_me">Remember me</label>
            </div>

            <!-- Forgot password link -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                @if (Route::has('password.request'))
                    <a class="forgot-link text-decoration-none" href="{{ route('password.request') }}">
                        Forgot your password?
                    </a>
                @endif
            </div>

            <button type="submit" class="btn btn-primary btn-login">Log in</button>
        </form>
    </div>
    
</div>

<!-- Bootstrap JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
