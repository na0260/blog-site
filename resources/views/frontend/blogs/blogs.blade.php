@extends('frontend.frontend-master')

@section('title')
    {{ $pageName }}
@endsection

@section('main')
    <!-- News With Sidebar Start -->
    <div class="container-fluid mt-5 pt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title">
                                <h4 class="m-0 text-uppercase font-weight-bold">Category: {{ $pageName }}</h4>
                                <a class="text-secondary font-weight-medium text-decoration-none"
                                    href="{{ route('blogs') }}">View All</a>
                            </div>
                        </div>

                        @foreach ($blog_dsc as $blog)
                            <div class="col-lg-6">
                                <div class="position-relative mb-3">
                                    <img class="img-fluid w-100" src="{{ asset('/') }}{{ $blog->image }}"
                                        style="object-fit: cover;height: 250px;">
                                    <div class="bg-white border border-top-0 p-4">
                                        <div class="mb-2">
                                            @foreach ($categories as $category)
                                                @if ($blog->category_id == $category->id)
                                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                                        href="{{route('cat.blogs', ['cat_name'=>$category->category_name , 'cat_id'=>$category->id])}}">{{ $category->category_name }}</a>
                                                @endif
                                            @endforeach
                                            <a class="text-body" href=""><small>{{ $blog->created_at }}</small></a>
                                        </div>
                                        <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold"
                                            href="{{route('blog',['cat_id'=>$blog->category_id , 'blog_id'=>$blog->id])}}">{{ Str::limit($blog->blog_title, 17, '...') }}</a>
                                        <p class="text-justify">{{ Str::limit($blog->blog_desc, 80, '...') }}</p>
                                        <a href="{{route('blog',['cat_id'=>$blog->category_id , 'blog_id'=>$blog->id])}}"><button class="btn btn-warning">Read More</button></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                @include('frontend.includings.sidebar')
            </div>
        </div>
    </div>
    <!-- News With Sidebar End -->
@endsection
