@extends('admin.admin')

@section('title', 'User Table')
@section('page-title', 'Feedback Results')

@section('content')
<div class="container mt-5">
        

        @if ($feedbacks->isEmpty())
            <p class="text-center">No feedback submitted yet.</p>
        @else
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Satisfaction</th>
                        <th>Comments</th>
                        <th>Submitted At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($feedbacks as $feedback)
                        <tr>
                            <td>
                                @if ($feedback->satisfaction == 1) 😞
                                @elseif ($feedback->satisfaction == 2) 🙁
                                @elseif ($feedback->satisfaction == 3) 😐
                                @elseif ($feedback->satisfaction == 4) 🙂
                                @else 😄
                                @endif
                            </td>
                            <td>{{ $feedback->comments ?? 'No comments' }}</td>
                            <td>{{ $feedback->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
        <div class="text-center mt-4">
            <a href="{{ route('feedback.show') }}" class="btn btn-primary">Back to Feedback</a>
        </div>
    </div>
@endsection
