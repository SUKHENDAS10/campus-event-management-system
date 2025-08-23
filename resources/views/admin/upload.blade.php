@extends('admin.admin')

@section('title', 'Event Create')
@section('page-title', 'Event Create')

@section('content')
 <div class="container ">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h3>Create Events</h3>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <form action="{{ route('upload.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Event Title</label>
                    <input type="text" name="title" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Event Description</label>
                    <textarea name="description" class="form-control" rows="4" required></textarea>
                </div>

                <!-- New Date Input -->
                <div class="mb-3">
                    <label for="date" class="form-label">Event Date</label>
                    <input type="date" name="date" class="form-control" required>
                </div>

                <!-- New Venue Input -->
                <div class="mb-3">
                    <label for="venue" class="form-label">Event Venue</label>
                    <input type="text" name="venue" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Event Image</label>
                    <input type="file" name="image" class="form-control">
                </div>

                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
