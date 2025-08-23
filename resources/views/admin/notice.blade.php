@extends('admin.admin')

@section('title', 'User Table')
@section('page-title', 'Create Notification')

@section('content')
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header text-center">
                    <h3>Create Notification</h3>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form action="{{ route('notice.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Notification Title</label>
                            <input type="text" id="title" name="title" class="form-control" placeholder="Enter notification title..." required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Notification Message</label>
                            <textarea id="message" name="message" class="form-control" rows="4" placeholder="Write your message here..." required></textarea>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Send Notification</button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
