@extends('backend.backend-master')

@section('title', 'Edit Categories')

@section('main')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-6 mx-auto mt-5">
                    <h1 class="bg-dark text-center py-2 text-white">Edit Category</h1>
                    <form class="row g-3" action="{{route('category.update',$category->id)}}" method="POST">
                        @csrf
                        <div class="col-md-12">
                            <label class="form-label">Category Name:</label>
                            <input type="text" name="category_name" class="form-control" value="{{$category->category_name}}"
                                required>
                        </div>

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
