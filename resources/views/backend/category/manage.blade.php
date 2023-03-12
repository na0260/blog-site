@extends('backend.backend-master')

@section('title', 'Manage Categories')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-12 mx-auto">
                <div class="card my-4">
                    <h1 class="bg-dark text-center py-2 text-white">Categories</h1>
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Showing All Category
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple" >
                            <thead>
                                <tr>
                                    <th>SN.</th>
                                    <th width="70%">Category Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$category->category_name}}</td>
                                        <td scope="row" align="center">
                                            <span
                                                class="text-{{ $category->status == 1 ? 'primary' : 'danger' }} ">{{ $category->status == 1 ? 'Active' : 'Inactive' }}
                                            </span>
                                            <a href="{{ route('category.status', $category->id) }}"
                                                class="btn {{ $category->status == 1 ? 'btn-danger' : 'btn-primary' }}">{{ $category->status == 1 ? 'Inactive' : 'Active' }}</a>
                                        </td>
                                        <td align="center">
                                            <a href="{{route('category.edit',$category->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                            <a href="{{route('category.delete',$category->id)}}" class="btn btn-sm btn-danger">Delete</a>
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
