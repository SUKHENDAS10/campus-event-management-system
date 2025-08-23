@extends('admin.admin')

@section('title', 'User Table')
@section('page-title', 'User Details')

@section('content')
<div class="table-container bg-white p-3 rounded shadow">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Contact No</th>
                <th>Address</th>
                <th>ID Number</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($forms as $form)
            <tr>
                <td>{{ $form->name }}</td>
                <td>{{ $form->phone }}</td>
                <td>{{ $form->address }}</td>
                <td>{{ $form->idnumber }}</td>
                <td>
                    <a href="{{ route('table.edit', $form->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    <form action="{{ route('table.destroy', $form->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger"
                                onclick="return confirm('Are you sure you want to delete this?')">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
<style>
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