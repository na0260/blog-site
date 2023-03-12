@extends('backend.backend-master')

@section('title', 'Add Categories')

@section('main')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-6 mx-auto mt-5">
                    <h1 class="bg-dark text-center py-2 text-white">Add New Category</h1>
                    <form class="row g-3" action="{{ route('category.store') }}" method="POST">
                        @csrf
                        <div class="col-md-12">
                            <label class="form-label">Category Name:</label>
                            <input type="text" name="category_name" class="form-control" placeholder="Add Category Name Here"
                                required>
                        </div>
                        @error('category_name')
                            
                        @enderror

                        <div class="col-12">
                            <button class="btn btn-dark" type="submit">Add</button>
                        </div>
                    </form>
                    <p class="text-success">{{Session::get('msg')}}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
