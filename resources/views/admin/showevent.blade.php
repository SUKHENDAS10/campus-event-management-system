@extends('admin.admin')

@section('title', 'User Table')
@section('page-title', 'User Details')

@section('content')
 <div class="container bg-white p-4 rounded shadow">
        <h2 class="mb-4">Submitted Events</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Event Name</th>
                    <th>Date</th>
                    <th>Venue</th>
                    <th>Volunteer List</th>
                    <th>Sponsor List</th>
                    <th>Other Details</th>
                    <th>Status</th> <!-- নতুন কলাম -->
                    <th>Chaning Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($events as $event)
                <tr>
                    <td>{{ $event->event_name }}</td>
                    <td>{{ $event->event_date }}</td>
                    <td>{{ $event->venue }}</td>
                    <td>
                        @if($event->volunteer_list)
                            <a href="{{ asset('storage/' . $event->volunteer_list) }}" target="_blank">View PDF</a>
                        @else
                            N/A
                        @endif
                    </td>
                    <td>
                        @if($event->sponsor_list)
                            <a href="{{ asset('storage/' . $event->sponsor_list) }}" target="_blank">View PDF</a>
                        @else
                            N/A
                        @endif
                    </td>
                    <td>{{ $event->other_details }}</td>
                    <td>
                        @if($event->status == 'approved')
                            <span class="badge bg-success">Approved</span>
                        @elseif($event->status == 'accepted')
                            <span class="badge bg-primary">Accepted</span>
                        @elseif($event->status == 'rejected')
                            <span class="badge bg-danger">Rejected</span>
                        @else
                            <span class="badge bg-secondary">{{ ucfirst($event->status ?? 'Pending') }}</span>
                        @endif
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{url('approve',$event->id)}}">Approved</a>
                        <a class="btn btn-success" href="{{url('accept',$event->id)}}">Accepted</a>
                        <a class="btn btn-danger" href="{{url('reject',$event->id)}}">Rejected</a>
                    </td>   
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
