<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use Carbon\Carbon;

class FrontendController extends Controller
{
    public function home()
    {
        $blog_dsc = Blog::orderby('id', 'DESC')->where('status','=',1)->get();
        $categories = Category::all()->where('status', '=', 1);
        return view('frontend.home.home',['categories'=> $categories, 'blog_dsc'=> $blog_dsc]);
    }

    public function blogs()
    {
        $categories = Category::all()->where('status', '=', 1);
        $blog_dsc = Blog::orderby('id', 'DESC')->where('status', '=', 1)->get();
        $pageName           = "All Blogs";
        return view('frontend.blogs.blogs', ['categories' => $categories, 'blog_dsc' => $blog_dsc, 'pageName' => $pageName]);
    }
    public function blog($catId, $blogId)
    {
        $categories = Category::all()->where('status', '=', 1);
        $category = Category::find($catId);
        $blog_s = Blog::find($blogId);
        $blog_dsc = Blog::orderby('id', 'DESC')->where('status', '=', 1)->get();
        $comments = Comment::all()->where('blog_id', '=', $blogId);
        return view('frontend.blogs.blog', ['categories' => $categories, 'category' => $category, 'blog_s' => $blog_s, 'blog_dsc' => $blog_dsc, 'comments' => $comments]);
    }

    public function cat_blog($catName,$catId)
    {
        $categories = Category::all()->where('status', '=', 1);
        $blog_dsc = Blog::orderby('id', 'DESC')->where('status', '=', 1)->where('category_id', '=', $catId)->get();
        $pageName           = $catName;
        return view('frontend.blogs.blogs', ['categories' => $categories,'blog_dsc' =>$blog_dsc, 'pageName' => $pageName]);
    }
}
