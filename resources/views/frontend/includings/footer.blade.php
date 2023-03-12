<!-- Footer Start -->
<div class="container-fluid bg-dark pt-5 px-sm-3 px-md-5 mt-5">
    <div class="row py-4">
        <div class="col-lg-4 col-md-6 mb-5">
            <h5 class="mb-4 text-white text-uppercase font-weight-bold">Get In Touch</h5>
            <p class="font-weight-medium"><i class="fa fa-map-marker-alt mr-2"></i>123 Street, New York, USA</p>
            <p class="font-weight-medium"><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
            <p class="font-weight-medium"><i class="fa fa-envelope mr-2"></i>info@example.com</p>
            <h6 class="mt-4 mb-3 text-white text-uppercase font-weight-bold">Follow Us</h6>
            <div class="d-flex justify-content-start">
                <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i
                        class="fab fa-facebook-f"></i></a>
                <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i
                        class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i
                        class="fab fa-instagram"></i></a>
                <a class="btn btn-lg btn-secondary btn-lg-square" href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-5">
            <h5 class="mb-4 text-white text-uppercase font-weight-bold">Latest News</h5>
            <?php $counter = 0; ?>
            @foreach ($blog_dsc as $blog)
                @if (3 == $counter)
                    <?php break; ?>
                @endif
                <div class="mb-3">
                    <div class="mb-2">
                        @foreach ($categories as $category)
                            @if ($blog->category_id == $category->id)
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2"
                                    href="{{ route('cat.blogs', ['cat_name'=>$category->category_name , 'cat_id'=>$category->id]) }}">{{ $category->category_name }}</a>
                            @endif
                        @endforeach

                        <a class="text-body" href="#"><small>{{$blog->created_at}}</small></a>
                    </div>
                    <a class="small text-body text-uppercase font-weight-medium" href="{{route('blog',['cat_id'=>$blog->category_id , 'blog_id'=>$blog->id])}}">{{ Str::limit($blog->blog_title, 70, '...') }}</a>
                </div>
                <?php $counter++; ?>
            @endforeach
        </div>
        <div class="col-lg-4 col-md-6 mb-5">
            <h5 class="mb-4 text-white text-uppercase font-weight-bold">Categories</h5>
            <div class="m-n1">
                @foreach ($categories as $category)
                    <a href="{{ route('cat.blogs', ['cat_name'=>$category->category_name , 'cat_id'=>$category->id]) }}" class="btn btn-sm btn-secondary m-1">{{ $category->category_name }}</a>
                @endforeach

            </div>
        </div>
    </div>
</div>
<div class="container-fluid py-4 px-sm-3 px-md-5" style="background: #111111;">
    <p class="m-0 text-center">&copy; <a href="#">Your Site Name</a>. All Rights Reserved.

        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
        Design by <a href="https://htmlcodex.com">HTML Codex</a>
    </p>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-primary btn-square back-to-top"><i class="fa fa-arrow-up"></i></a>
