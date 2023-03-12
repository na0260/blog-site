@extends('backend.backend-master')

@section('title', 'Manage Users')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-12 mx-auto">
                <div class="card my-4">
                    <h1 class="bg-primary text-center py-2">Users</h1>
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Showing All users
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>SN.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th width="15%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                @if (Auth::user()->name != $user->name)
                                                <a href="{{ route('user.edit', $user->id) }}"
                                                    class="btn btn-sm btn-primary">Edit</a>
                                                <a href="{{ route('user.delete', $user->id) }}"
                                                    class="btn btn-sm btn-danger">Delete</a>
                                                @else
                                                Logged In
                                                @endif
                                            </td>
                                        </tr>
                                    
                                @endforeach
                            </tbody>
                        </table>
                        <p class="text-danger">{{ Session::get('msg') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
