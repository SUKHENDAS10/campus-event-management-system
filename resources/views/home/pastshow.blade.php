<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Past Events</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Card Styling */
        .past-card {
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            border: none;
            border-radius: 10px;
            background-color: #fff;
            overflow: hidden;
        }

        .past-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .past-card .card-img-top {
            object-fit: cover;
            height: 200px;
            transition: transform 0.3s ease-in-out;
        }

        .past-card:hover .card-img-top {
            transform: scale(1.1);
        }

        .past-card .card-title {
            font-weight: 600;
            color: #333;
            transition: color 0.3s ease-in-out;
        }

        .past-card:hover .card-title {
            color: #007bff;
        }

        .past-card .card-text {
            color: #666;
            font-size: 0.9rem;
        }

        @media (max-width: 768px) {
            .past-card .card-img-top {
                height: 150px;
            }
        }
    </style>
</head>
<body>
    <div class="container my-5">
       <h2 class="text-center mb-4 text-white bg-dark">Upcoming Events</h2>
        <div class="row g-4">
            @forelse ($pasts as $past)
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="card past-card shadow-sm h-100">
                        @if ($past->image)
                            <img src="{{ asset('storage/' . $past->image) }}" class="card-img-top" alt="{{ $past->title }}">
                        @else
                            <img src="https://via.placeholder.com/300x200.png?text=No+Image" class="card-img-top" alt="No Image">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $past->title }}</h5>
                            <p class="card-text">{{ Str::limit($past->description, 80) }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center">No events found.</p>
            @endforelse
        </div>
        <h2 class="text-center mb-4 text-white bg-dark">Past Events</h2>
        <div class="row g-4">
            @forelse ($pasts as $past)
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="card past-card shadow-sm h-100">
                        @if ($past->image)
                            <img src="{{ asset('storage/' . $past->image) }}" class="card-img-top" alt="{{ $past->title }}">
                        @else
                            <img src="https://via.placeholder.com/300x200.png?text=No+Image" class="card-img-top" alt="No Image">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $past->title }}</h5>
                            <p class="card-text">{{ Str::limit($past->description, 80) }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center">No events found.</p>
            @endforelse
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
