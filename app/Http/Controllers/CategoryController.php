<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories         = Category::all();
        return view('backend.category.manage', ['categories' => $categories]);
    }
    public function create()
    {
        return view('backend.category.create');
    }

    public function store(Request $req)
    {
        $req->validate(
            [
                'category_name' => 'max:20'
            ]
        );
        $category                       = new Category;
        $category->category_name        = $req->category_name;
        $category->save();

        return redirect()->back()->with('msg', 'Category has been added successfully');
    }
    public function delete($catId)
    {
        $category                       = Category::find($catId);
        $category->delete();
        return redirect()->back()->with('msg', 'Category has been removed successfully');
    }
    public function edit($catId)
    {
        $category                       = Category::find($catId);
        return view('backend.category.edit', ['category' => $category]);
    }
    public function update(Request $req, $catId)
    {
        $cat                            = Category::find($catId);
        $cat->category_name             = $req->category_name;
        $cat->save();
        return redirect()->route('category.manage')->with('msg', 'Category has been updated successfully');
    }
    public function status($catId)
    {
        $category                    = Category::find($catId);
        if ($category->status == 1) {
            $category->status = 0;
        } else {
            $category->status = 1;
        }
        $category->save();
        return redirect()->back()->with('msg', 'Category status has been changed successfully');
    }
}
