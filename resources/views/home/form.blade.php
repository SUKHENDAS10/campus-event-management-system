<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #dababaff;
            padding-top: 80px;
        }
        .form-container {
            max-width: 500px;
            margin: 50px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
@include('home.navbar1');
<div class="form-container">
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    <h2 class="text-center mb-4">Registration Form</h2>
    <form action="{{ route('register.submit') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="full_name" class="form-label">Full Name</label>
            <input type="text" name="full_name" id="full_name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="contact_no" class="form-label">Contact No</label>
            <input type="text" name="contact_no" id="contact_no" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <textarea name="address" id="address" class="form-control" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label for="id_number" class="form-label">ID Number</label>
            <input type="text" name="id_number" id="id_number" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary w-100">Register</button>
    </form>
</div>
@include('home.footer');
</body>
</html>
