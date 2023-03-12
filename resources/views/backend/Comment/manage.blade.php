@extends('backend.backend-master')

@section('title', 'Manage Comments')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-12 mx-auto">
                <div class="card my-4">
                    <h1 class="bg-dark text-center py-2 text-white">Comments</h1>
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Showing All Comment
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple" >
                            <thead>
                                <tr>
                                    <th>SN.</th>
                                    <th>Blog Id</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Comment</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($comments as $comment)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$comment->blog_id}}</td>
                                        <td>{{$comment->username}}</td>
                                        <td>{{$comment->email}}</td>
                                        <td>{{$comment->message}}</td>
                                        <td align="center">
                                            <a href="{{route('comment.delete',$comment->id)}}" class="btn btn-sm btn-danger">Delete</a>
                                        </td>
                                    </tr>                                    
                                @endforeach
                            </tbody>
                        </table>
                        <p class="text-danger">{{Session::get('msg')}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
