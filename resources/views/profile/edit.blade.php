@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card p-4 shadow rounded-4">
        <h3>Edit Profile</h3>
        <form action="{{ route('profile.update') }}" method="POST"  enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
        <label for="profile_image" class="form-label">Profile Image</label>
        <input type="file" name="profile_image" class="form-control">
    </div>

            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" value="{{ old('name', $user->name) }}" class="form-control">
            </div>
            <div class="mb-3">
                <label>Bio</label>
                <textarea name="bio" rows="4" class="form-control">{{ old('bio', $user->bio) }}</textarea>
            </div>
            <button type="submit" class="btn btn-success">Save Changes</button>
        </form>
    </div>
</div>
@endsection
