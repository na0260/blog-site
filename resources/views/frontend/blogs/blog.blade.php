@extends('frontend.frontend-master')

@section('title')
    {{ $blog_s->blog_title }}
@endsection

@section('main')
    <!-- Breaking News Start -->
    <div class="container-fluid mt-5 mb-3 pt-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="d-flex justify-content-between">
                        <div class="section-title border-right-0 mb-0" style="width: 180px;">
                            <h4 class="m-0 text-uppercase font-weight-bold">Tranding</h4>
                        </div>
                        <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center bg-white border border-left-0"
                            style="width: calc(100% - 180px); padding-right: 100px;">
                            <?php $counter = 0; ?>
                            @foreach ($blog_dsc as $blog)
                                @if (3 == $counter)
                                    <?php break; ?>
                                @endif
                                <div class="text-truncate"><a class="text-secondary text-uppercase font-weight-semi-bold"
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


    <!-- News With Sidebar Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- News Detail Start -->
                    <div class="position-relative mb-3">
                        <img class="img-fluid w-100" src="{{ asset('/') }}{{ $blog_s->image }}"
                            style="object-fit: cover;">
                        <div class="bg-white border border-top-0 p-4">
                            <div class="mb-3">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="{{ route('cat.blogs', ['cat_name' => $category->category_name, 'cat_id' => $category->id]) }}">{{ $category->category_name }}</a>
                                <a class="text-body" href="#">{{ $blog_s->created_at }}</a>
                            </div>
                            <h1 class="mb-3 text-secondary text-uppercase font-weight-bold">{{ $blog_s->blog_title }}</h1>
                            <p class="text-justify">{{ $blog_s->blog_desc }}</p>
                        </div>
                    </div>
                    <!-- News Detail End -->

                    <!-- Comment List Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Comments</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-4">
                            @foreach ($comments as $comment)
                            <div class="media mb-4">
                                <img src="{{ asset('/') }}frontend-assets/img/user.png" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                
                                    <div class="media-body">
                                        <h6><a class="text-secondary font-weight-bold"
                                                href="">{{ $comment->username }}</a>
                                            <small><i>{{ $comment->created_at }}</i></small></h6>
                                        <p>
                                            {{ $comment->message }}
                                        </p>
                                    </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- Comment List End -->

                    <!-- Comment Form Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Leave a comment</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-4">
                            <form action="{{ route('comment') }}" method="GET">
                                <div class="form-row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" name="username" class="form-control" id="name"
                                                required>
                                            <input type="text" name="blog_id" class="form-control" id="name"
                                                value="{{ $blog_s->id }}" hidden>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" class="form-control" id="email"
                                                required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea id="message" name="message" cols="30" rows="5" class="form-control" required></textarea>
                                </div>
                                <div class="form-group mb-0">
                                    <button type="submit" class="btn btn-primary font-weight-semi-bold py-2 px-3">Leave a
                                        comment</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Comment Form End -->
                </div>

                @include('frontend.includings.sidebar')
            </div>
        </div>
    </div>
    <!-- News With Sidebar End -->
@endsection
