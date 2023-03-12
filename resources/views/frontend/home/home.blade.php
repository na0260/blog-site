@extends('frontend.frontend-master')

@section('title', 'Home')

@section('main')

    <!-- Main News Slider Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7 px-0">
                <div class="owl-carousel main-carousel position-relative">
                    <?php $counter = 0; ?>
                    @foreach ($blog_dsc as $blog)
                        @if (5 == $counter)
                            <?php break; ?>
                        @endif
                        <div class="position-relative overflow-hidden" style="height: 500px;">
                            <img class="img-fluid h-100" src="{{ asset('/') }}{{ $blog->image }}"
                                style="object-fit: cover;">
                            <div class="overlay">
                                <div class="mb-2">
                                    @foreach ($categories as $category)
                                        @if ($blog->category_id == $category->id)
                                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                                href="{{ route('cat.blogs', ['cat_name' => $category->category_name, 'cat_id' => $category->id]) }}">{{ $category->category_name }}</a>
                                        @endif
                                    @endforeach
                                    <a class="text-white" href="#">{{ $blog->created_at }}</a>
                                </div>
                                <a class="h2 m-0 text-white text-uppercase font-weight-bold"
                                    href="{{ route('blog', ['cat_id' => $blog->category_id, 'blog_id' => $blog->id]) }}">{{ Str::limit($blog->blog_title, 70, '...') }}</a>
                            </div>
                        </div>
                        <?php $counter++; ?>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-5 px-0">
                <div class="row mx-0">
                    <?php $counter = 0; ?>
                    @foreach ($blog_dsc as $blog)
                        @if (9 == $counter)
                            <?php break; ?>
                        @endif
                        @if (5 <= $counter)
                        <div class="col-md-6 px-0">
                            <div class="position-relative overflow-hidden" style="height: 250px;">
                                <img class="img-fluid w-100 h-100" src="{{ asset('/') }}{{ $blog->image }}"
                                    style="object-fit: cover;">
                                <div class="overlay">
                                    <div class="mb-2">
                                        @foreach ($categories as $category)
                                            @if ($blog->category_id == $category->id)
                                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                                    href="{{ route('cat.blogs', ['cat_name' => $category->category_name, 'cat_id' => $category->id]) }}">{{ $category->category_name }}</a>
                                            @endif
                                        @endforeach
                                        <a class="text-white" href="">{{ $blog->created_at }}</a>
                                    </div>
                                    <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold"
                                        href="{{ route('blog', ['cat_id' => $blog->category_id, 'blog_id' => $blog->id]) }}">{{ Str::limit($blog->blog_title, 70, '...') }}</a>
                                </div>
                            </div>
                        </div>
                        @endif
                        <?php $counter++; ?>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Main News Slider End -->


    <!-- Breaking News Start -->
    <div class="container-fluid bg-dark py-3 mb-3">
        <div class="container">
            <div class="row align-items-center bg-dark">
                <div class="col-12">
                    <div class="d-flex justify-content-between">
                        <div class="bg-primary text-dark text-center font-weight-medium py-2" style="width: 170px;">
                            Breaking News</div>
                        <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center ml-3"
                            style="width: calc(100% - 170px); padding-right: 90px;">
                            <?php $counter = 0; ?>
                            @foreach ($blog_dsc as $blog)
                                @if (3 == $counter)
                                    <?php break; ?>
                                @endif
                                <div class="text-truncate"><a class="text-white text-uppercase font-weight-semi-bold"
                                        href="{{ route('blog', ['cat_id' => $blog->category_id, 'blog_id' => $blog->id]) }}">{{ $blog->blog_title }}</a>
                                </div>
                                <?php $counter++; ?>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breaking News End -->


    <!-- Featured News Slider Start -->
    <div class="container-fluid pt-5 mb-3">
        <div class="container">
            <div class="section-title">
                <h4 class="m-0 text-uppercase font-weight-bold">Featured News</h4>
            </div>
            <div class="owl-carousel news-carousel carousel-item-4 position-relative">

                <?php $counter = 0; ?>
                @foreach ($blog_dsc as $blog)
                    @if (8 == $counter)
                        <?php break; ?>
                    @endif
                    <div class="position-relative overflow-hidden" style="height: 300px;">
                        <img class="img-fluid h-100" src="{{ asset('/') }}{{ $blog->image }}"
                            style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-2">
                                @foreach ($categories as $category)
                                    @if ($blog->category_id == $category->id)
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                            href="{{ route('cat.blogs', ['cat_name' => $category->category_name, 'cat_id' => $category->id]) }}">{{ $category->category_name }}</a>
                                    @endif
                                @endforeach
                                <a class="text-white" href="">{{ $blog->created_at }}</a>
                            </div>
                            <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold"
                                href="{{ route('blog', ['cat_id' => $blog->category_id, 'blog_id' => $blog->id]) }}">{{ Str::limit($blog->blog_title, 20, '...') }}</a>
                        </div>
                    </div>
                    <?php $counter++; ?>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Featured News Slider End -->


    <!-- News With Sidebar Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title">
                                <h4 class="m-0 text-uppercase font-weight-bold">Latest News</h4>
                                <a class="text-secondary font-weight-medium text-decoration-none"
                                    href="{{ route('blogs') }}">View
                                    All</a>
                            </div>
                        </div>

                        <?php $counter = 0; ?>
                        @foreach ($blog_dsc as $blog)
                            @if (15 == $counter)
                                <?php break; ?>
                            @endif
                            <div class="col-lg-6">
                                <div class="position-relative mb-3">
                                    <img class="img-fluid w-100" src="{{ asset('/') }}{{ $blog->image }}"
                                        style="object-fit: cover;height: 250px;">
                                    <div class="bg-white border border-top-0 p-4">
                                        <div class="mb-2">
                                            @foreach ($categories as $category)
                                                @if ($blog->category_id == $category->id)
                                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                                        href="{{ route('cat.blogs', ['cat_name' => $category->category_name, 'cat_id' => $category->id]) }}">{{ $category->category_name }}</a>
                                                @endif
                                            @endforeach
                                            <a class="text-white" href="">{{ $blog->created_at }}</a>
                                        </div>
                                        <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold"
                                            href="{{ route('blog', ['cat_id' => $blog->category_id, 'blog_id' => $blog->id]) }}">{{ Str::limit($blog->blog_title, 17, '...') }}</a>
                                        <p class="text-justify">{{ Str::limit($blog->blog_desc, 80, '...') }}</p>
                                        <a
                                            href="{{ route('blog', ['cat_id' => $blog->category_id, 'blog_id' => $blog->id]) }}"><a
                                                href="{{ route('blog', ['cat_id' => $blog->category_id, 'blog_id' => $blog->id]) }}"><button
                                                    class="btn btn-warning">Read More</button></a></a>

                                    </div>
                                </div>
                            </div>
                            <?php $counter++; ?>
                        @endforeach
                    </div>
                </div>

                @include('frontend.includings.sidebar')
            </div>
        </div>
    </div>
    <!-- News With Sidebar End -->

@endsection
