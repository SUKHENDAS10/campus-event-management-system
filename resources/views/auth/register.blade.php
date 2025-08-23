<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('images/campus.jpg');
        }
        .register-container {
            max-width: 500px;
            margin: 60px auto;
            padding: 40px;
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        .form-label {
            font-weight: 500;
        }
        .btn-primary {
            width: 100%;
            border-radius: 8px;
        }
        .login-link {
            text-align: center;
            margin-top: 15px;
        }
    </style>
</head>
<body>
@include('home.navbar');
<div class="container">
    <div class="register-container">
        <h3 class="text-center mb-4">Create Account</h3>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                <x-input-error :messages="$errors->get('name')" class="text-danger mt-1" />
            </div>

            <!-- Fullname -->
            <div class="mb-3">
                <label for="fullname" class="form-label">Fullname</label>
                <input id="fullname" type="text" class="form-control" name="fullname" value="{{ old('fullname') }}" required>
                <x-input-error :messages="$errors->get('fullname')" class="text-danger mt-1" />
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                <x-input-error :messages="$errors->get('email')" class="text-danger mt-1" />
            </div>

            <!-- Phone -->
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" required>
                <x-input-error :messages="$errors->get('phone')" class="text-danger mt-1" />
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input id="password" type="password" class="form-control" name="password" required>
                <x-input-error :messages="$errors->get('password')" class="text-danger mt-1" />
            </div>

            <!-- Confirm Password -->
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
                <x-input-error :messages="$errors->get('password_confirmation')" class="text-danger mt-1" />
            </div>

            <button type="submit" class="btn btn-primary">Register</button>

            <div class="login-link mt-3">
                <a href="{{ route('login') }}">Already registered? Login</a>
            </div>
        </form>
    </div>
</div>

<!-- Bootstrap JS (Optional, for interactivity) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
