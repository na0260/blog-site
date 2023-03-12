@extends('backend.backend-master')

@section('title', 'Edit User')

@section('main')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-6 mx-auto mt-5">
                    <h1 class="bg-dark text-center text-white py-2">Add User</h1>
                    <form class="row g-3" action="{{route('user.update',$user->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12">
                            <label class="form-label">Name:</label>
                            <input type="text" name="name" class="form-control" value="{{$user->name}}"
                                required>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Email:</label>
                            <input type="email" name="email" class="form-control" value="{{$user->email}}"
                                required>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Password:</label>
                            <input type="password" name="password" class="form-control" 
                                required>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-dark" type="submit">Update User</button>
                        </div>
                    </form>
                    <p class="text-success">{{Session::get('msg')}}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
