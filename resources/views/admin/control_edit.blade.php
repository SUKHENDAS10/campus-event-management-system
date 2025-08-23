<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Event</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2 class="mb-4">Edit Event</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('upload.edit', $event->id) }}" method="POST" enctype="multipart/form-data" class="card p-4 shadow">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Event Title</label>
            <input type="text" name="title" id="title" value="{{ old('title', $event->title) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Event Description</label>
            <textarea name="description" id="description" rows="3" class="form-control" required>{{ old('description', $event->description) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="venue" class="form-label">Venue</label>
            <input type="text" name="venue" id="venue" value="{{ old('venue', $event->venue) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">Event Date</label>
            <input type="date" name="date" id="date" value="{{ old('date', $event->date) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Current Image</label><br>
            @if($event->image)
                <img src="{{ asset($event->image) }}" alt="Event Image" width="100" class="rounded mb-2">
            @else
                <p>No image uploaded</p>
            @endif
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Change Image</label>
            <input type="file" name="image" id="image" class="form-control">
            <small class="text-muted">Leave blank if you don’t want to change the image</small>
        </div>

        <button type="submit" class="btn btn-success">Update Event</button>
        <a href="{{ url()->previous() }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
</body>
</html>
