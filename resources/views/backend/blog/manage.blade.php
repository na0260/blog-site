@extends('backend.backend-master')

@section('title', 'Manage Blogs')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-12 mx-auto">
                <div class="card my-4">
                    <h1 class="bg-dark text-center py-2 text-white">Blogs</h1>
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Showing All Blog
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>SN.</th>
                                    <th>Blog Image</th>
                                    <th>Blog Name</th>
                                    <th>Blog Category</th>
                                    <th>Blog Description</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $blog)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td><img src="{{ asset('/') }}{{ $blog->image }}" alt="image" height="60px"
                                                width="60px"></td>
                                        <td>{{ $blog->blog_title }}</td>
                                        <td>{{ $blog->category_id }}</td>
                                        <td width='40%'>{{ $blog->blog_desc }}</td>
                                        <td width='10%' align="center">
                                        <span
                                            class="text-{{ $blog->status == 1 ? 'success' : 'danger' }} ">{{ $blog->status == 1 ? 'Active' : 'Inactive' }}
                                        </span>
                                        <a href="{{ route('blog.status', $blog->id) }}"
                                            class="btn {{ $blog->status == 1 ? 'btn-danger' : 'btn-success' }}">{{ $blog->status == 1 ? 'Inactive' : 'Active' }}</a>
                                        </td>
                                        <td width='10%' align="center">
                                            <a href="{{ route('blog.edit', $blog->id) }}"
                                                class="btn btn-sm btn-primary">Edit</a>
                                            <a href="{{ route('blog.delete', $blog->id) }}"
                                                class="btn btn-sm btn-danger">Delete</a>
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
