<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Arial', sans-serif;
            padding: 20px;
        }
        .table-container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .table thead th {
            background-color: #1abc9c;
            color: white;
            border: none;
        }
        .table tbody tr {
            transition: all 0.3s ease;
        }
        .table tbody tr:hover {
            background-color: #ecf0f1;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="table-container">
            <h2 class="mb-4">User Details</h2>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if($forms->isEmpty())
                <div class="alert alert-warning">No user data found.</div>
            @else
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Full Name</th>
                            <th>Contact No</th>
                            <th>Address</th>
                            <th>ID Number</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($forms as $form)
                            <tr>
                                <td>{{ $form->name }}</td>
                                <td>{{ $form->phone }}</td>
                                <td>{{ $form->address }}</td>
                                <td>{{ $form->idnumber }}</td>
                                <td>
                                    <a href="{{ route('table.edit', $form->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
