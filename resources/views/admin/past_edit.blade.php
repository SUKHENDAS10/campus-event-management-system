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

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('past.update', $event->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" value="{{ old('title', $event->title) }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control" id="description" rows="4" required>{{ old('description', $event->description) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            @if($event->image)
                <div class="mb-2">
                    <img src="{{ asset($event->image) }}" alt="Event Image" style="width:100px; height:100px; object-fit:cover;">
                </div>
            @endif
            <input type="file" name="image" class="form-control" id="image">
        </div>

        <button type="submit" class="btn btn-success">Update Event</button>
        <a href="{{ route('past.show') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
</body>
</html>
