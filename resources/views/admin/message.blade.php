@extends('admin.admin')

@section('title', 'User Table')
@section('page-title', 'User Details')

@section('content')
<div class="container">
        <div class="table-container">
            <h2 class="mb-4">User Details</h2>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Send Mail</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $data)
                        <tr>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->subject }}</td>
                            <td>{{ $data->message }}</td>
                            <td>
                                <a class="btn btn-success" href="{{url('/admin/sendmail',$data->id)}}">send_mail</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
<style>
     body {
            background-color: #f4f6f9;
            font-family: 'Arial', sans-serif;
            padding: 20px;
        }
        .table-container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .table thead th {
            background-color: #1abc9c;
            color: white;
            border: none;
        }
        .table tbody tr {
            transition: all 0.3s ease;
        }
        .table tbody tr:hover {
            background-color: #ecf0f1;
        }
    </style>
