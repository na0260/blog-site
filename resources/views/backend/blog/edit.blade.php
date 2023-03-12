@extends('backend.backend-master')

@section('title', 'Edit Blogs')

@section('main')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-6 mx-auto mt-5">
                    <h1 class="bg-dark text-center py-2 text-white">Edit Blog</h1>
                    <form class="row g-3" action="{{route('blog.update',$blog->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12">
                            <label class="form-label">Blog Title:</label>
                            <input type="text" name="blog_title" class="form-control" value="{{$blog->blog_title}}"
                                required>
                        </div>
                        @error('blog_title')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <div class="col-md-6">
                            <label class="form-label">Blog Category:</label>
                            <select name="category_id" class="form-select form-control" 
                                required>">
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}" @if ($category->id == $blog->category_id){{'selected'}}
                                    @endif>{{$category->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('category_id')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <div class="col-md-6">
                            <label class="form-label">Blog Image:</label>
                            <input type="file" name="image"  value="{{asset('/')}}{{$blog->image}}" class="form-control"
                                required>
                        </div>
                        @error('image')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <div class="col-md-12">
                            <label class="form-label">Blog Description:</label><br>
                            <textarea name="blog_desc" id="" cols="70" rows="5" class="form-control">{{$blog->blog_desc}}</textarea>
                        </div>
                        @error('blog_desc')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <div class="col-12">
                            <button class="btn btn-dark" type="submit">Update</button>
                        </div>
                    </form>
                    <p class="text-success">{{Session::get('msg')}}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
