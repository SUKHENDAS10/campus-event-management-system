@extends('admin.admin')

@section('title', 'User Table')
@section('page-title', 'Events Details')

@section('content')
<div class="container">
   
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered shadow">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Title</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($events as $key => $event)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>
                        @if($event->image)
    <img src="{{ asset($event->image) }}" class="circle-img" alt="Event Image">
@else
    N/A
@endif

                </td>
                <td>{{ $event->title }}</td>
                <td>{{ $event->description }}</td>
                <td>
                    <a href="{{ route('past.edit', $event->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('past.destroy', $event->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
<style>
        .circle-img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 50%;
        }
    </style>
