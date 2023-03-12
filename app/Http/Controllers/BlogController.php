<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;

class BlogController extends Controller
{
    public function index()
    {
        $blogs                  = Blog::all();
        return view('backend.blog.manage', ['blogs' => $blogs]);
    }
    public function create()
    {
        $categories             = Category::all();
        return view('backend.blog.create', compact("categories"));
    }
    public function store(Request $request)
    {
        $request->validate(
            [
                'blog_title' => 'max:100|required',
                'category_id' => 'required',
                'blog_desc' => 'min:300',
                'image' => 'image:jpeg,png,jfif,webp|required',
            ]
        );
        $blog                   = new Blog;
        $blog->blog_title       = $request->blog_title;
        $blog->category_id      = $request->category_id;
        $blog->blog_desc        = $request->blog_desc;
        $image                  = $request->image;
        $imageName              = 'blog-image' . time() . '.' . $image->getClientOriginalExtension();
        $folder                 = 'backend-assets/assets/db-img/blog-image';
        if ($image) {
            $image->move($folder, $imageName);
            $blog->image        = $folder . '/' . $imageName;
        }
        $blog->save();

        return redirect()->back()->with('msg', 'blog has been added successfully');
    }
    public function status($blogId)
    {
        $blog                    = Blog::find($blogId);
        if ($blog->status        == 1) {
            $blog->status        = 0;
        } else {
            $blog->status        = 1;
        }
        $blog->save();
        return redirect()->back()->with('msg', 'blog status has been changed successfully');
    }
    public function delete($blogId)
    {
        $blog                    = Blog::find($blogId);
        unlink(public_path() . '/' . $blog->image);
        $blog->delete();
        return redirect()->back()->with('msg', 'blog has been removed successfully');
    }
    public function edit($blogId)
    {
        $categories              = Category::all();
        $blog                    = Blog::find($blogId);
        return view('backend.blog.edit', ['blog' => $blog, 'categories' => $categories]);
    }
    public function update(Request $req, $blogId)
    {
        $req->validate(
            [
                'blog_title' => 'max:100|required',
                'category_id' => 'required',
                'blog_desc' => 'min:300',
                'image' => 'image:jpeg,png,jfif,webp|required',
            ]
        );
        $blog                    = Blog::find($blogId);
        unlink(public_path().'/'.$blog->image);
        $blog->blog_title        = $req->blog_title;
        $blog->category_id       = $req->category_id;
        $blog->blog_desc         = $req->blog_desc;
        $image                   = $req->image;
        $imageName               = 'blog-image' . time() . '.' . $image->getClientOriginalExtension();
        $folder = 'backend-assets/assets/db-img/blog-image';
        if ($image) {
            $image->move($folder, $imageName);
            $blog->image         = $folder . '/' . $imageName;
        }
        $blog->save();
        return redirect()->route('blog.manage')->with('msg', 'blog has been updated successfully');
    }
}
