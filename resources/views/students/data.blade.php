@extends('home')

@section('content')
    <h3>Data Students</h3>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-primary" onclick="window.location='{{ url('students/add') }}'">
                <i class="fa fa-plus-circle"></i> Add New Data
            </button>
        </div>
        <div class="card-body">
            @if (session('msg'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Berhasil!</strong>&nbsp;&nbsp;{{ session('msg') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="table table-responsive rounded-1">
                <table class="table table-bordered border table-row-dashed text-center bg-itpi-accend fs-6 gy-5">
                    <thead>
                        <tr class="text-gray-700 text-center text-bold bg-secondary text-14 align-center align-items-stretch">
                            <th class="text-center">No</th>
                            <th class="text-center">Id Student</th>
                            <th class="text-center">Full Name</th>
                            <th class="text-center">Gender</th>
                            <th class="text-center">Address</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Phone</th>
                            <th class="text-center">#</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $row)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <th>{{ $row->idstudents }}</th>
                                <th>{{ $row->name }}</th>
                                <th>{{ ($row->gender == 'M') ? 'Male' : 'Female' }}</th>
                                <th>{{ $row->address }}</th>
                                <th>{{ $row->email }}</th>
                                <th>{{ $row->phone }}</th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection