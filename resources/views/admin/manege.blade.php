<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create CSE Fest Event</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('/images/09af702f-1565-40a7-84b4-ad4f460fa5b6.png') no-repeat center center fixed;
            background-size: cover;
        }
        .form-container {
            background-color: rgba(255, 255, 255, 0.95);
            padding: 30px;
            border-radius: 15px;
            margin-top: 50px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 form-container">
            <h2 class="text-center mb-4">Create CSE Fest 2024 Event</h2>
            
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form action="{{ route('manege.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Event Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Enter Event Title">
                    @error('title') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Event Description</label>
                    <textarea name="description" class="form-control" rows="5" placeholder="Write about the event..."></textarea>
                    @error('description') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Upload Event Poster</label>
                    <input type="file" name="poster" class="form-control">
                    @error('poster') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <button type="submit" class="btn btn-primary">Create Event</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
