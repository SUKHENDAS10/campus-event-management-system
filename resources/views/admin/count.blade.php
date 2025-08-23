<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        .card-custom {
            border-left: 5px solid #28a745;
            border-radius: 10px;
            transition: 0.3s;
        }

        .card-custom:hover {
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
            transform: translateY(-5px);
        }
    </style>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2 class="mb-4">Dashboard</h2>
        <div class="row">
            <div class="col-md-3">
                <div class="card card-custom shadow-sm">
                    <div class="card-body text-center">
                        <i class="fas fa-calendar-alt fa-2x text-success"></i>
                        <h5 class="mt-2">TOTAL EVENTS</h5>
                        <p class="display-4">{{ $totalEvents }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
