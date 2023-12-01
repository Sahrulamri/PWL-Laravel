@extends('layout.main')

@section('content')
<h1>Data Students</h1>
<div class="card">
    <div class="card-header">
      <button type="button" class="btn btn-primary" onclick="window.location='{{ url('students/add') }}'">
        <i class="fa-solid fa-circle-plus"></i> Tambah Data Baru
        </button>
    </div>
    <div class="card-body">
        <table class="table table-sm table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Id Students</th>
                    <th>Full Name</th>
                    <th>Genre</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $row)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <th>{{ $row->idstudents }}</th>
                        <td>{{ $row->fullname }}</td>
                        <td>{{ ($row->genre=='M') ? 'Male' : 'Female' }}</td>
                        <td>{{ $row->address }}</td>
                        <td>{{ $row->emailaddress }}</td>
                        <td>{{ $row->phone }}</td>
                        <td></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection