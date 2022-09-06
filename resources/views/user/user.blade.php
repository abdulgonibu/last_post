@extends('layouts.home')
@section('contain')
    <div class="row clearfix page_header">
        <div class="col-md-6">
            <h1 class="h3 mb-2 text-gray-800">User List</h1>
        </div>
        <div class="col-md-6 text-right">
            <a class="btn btn-info" href="{{ route('users.create') }}"> <i class="fa fa-plus"></i> New User</a>
        </div>
    </div>

   
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">User List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Group</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th class="text-center">Actions</th>

                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Group</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th class="text-center">Actions</th>

                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->group->title }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->address }}</td>
                                <td class="text-center">

                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-sm"><i
                                                class="fa fa-edit"></i></a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                            data-toggle="modal" href="#deletemodal{{ $user->id }}"><i
                                                class="fa fa-trash"></i>
                                        </button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
