@extends('master')
@section('content')
    <div class="row my-5">
        @if (session('success'))
            <div class="alert alert-success my-2">
                {{ session('success') }}
            </div>
        @endif
        @if (Session::has('error'))
            <div class="alert alert-danger my-2">
                {{ Session('error') }}
            </div>
        @endif
        <div class="col-12 d-flex justify-content-end">
            <a href="{{ route('user.add') }}" type="button" class="btn btn-primary">Create</a>
        </div>
        <table class="table table-striped gy-7 gs-7">
            <thead>
                <tr class="fw-bold fs-6 text-gray-800 border-bottom border-gray-200 text-center">
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr class="text-center">
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="{{ route('user.edit', $user->id) }}" type="button" class="btn btn-primary">Edit
                            </a>
                            <a href="{{ route('user.destroy', $user->id) }}" type="button" class="btn btn-danger">
                                Delete</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center"><small>No Data Found</small>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
