@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow p-4 rounded-4">
        <div class="row">
            <div class="col-md-4 text-center">
               <img src="{{ $user->profile_image ? asset($user->profile_image) : asset('images/default-profile.png') }}"
                class="img-fluid rounded-circle mb-3"
                width="150"
                alt="Profile Picture">
                <h3>{{ $user->name }}</h3>
                <p class="text-muted">{{ $user->email }}</p>
            </div>
            <div class="col-md-8">
                <h4 class="mb-3">Bio</h4>
                <p>{{ $user->bio ?? 'No bio provided.' }}</p>

                <a href="{{ route('profile.edit') }}" class="btn btn-primary mt-3">
                    <i class="bi bi-pencil-square me-1"></i> Edit Profile
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
