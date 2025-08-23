<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-5">
    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif
    <div class="container bg-white p-4 rounded shadow">
        <h2>Edit User</h2>
        <form action="{{ route('table.update', $form->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label>Full Name</label>
                <input type="text" name="name" class="form-control" value="{{ $form->name }}">
            </div>
            <div class="mb-3">
                <label>Contact No</label>
                <input type="text" name="phone" class="form-control" value="{{ $form->phone }}">
            </div>
            <div class="mb-3">
                <label>Address</label>
                <input type="text" name="address" class="form-control" value="{{ $form->address }}">
            </div>
            <div class="mb-3">
                <label>ID Number</label>
                <input type="text" name="idnumber" class="form-control" value="{{ $form->idnumber }}">
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('table.show') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
</body>
</html>
