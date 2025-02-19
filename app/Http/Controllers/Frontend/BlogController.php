<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function blogDetails(string $slug)
    {
        $blog = Blog::with('comments')->where('slug', $slug)->where('status', 1)->firstOrFail();
        $moreBlogs = Blog::where('slug', '!=', $slug)->where('status', 1)->orderBy('id', 'DESC')->take(5)->get();
        $recentBlogs = Blog::where('slug', '!=', $slug)->where('status', 1)
            ->where('category_id', $blog->category_id)->orderBy('id', 'DESC')->take(12)->get();

        $comments = $blog->comments()->paginate(20);
        $categories = BlogCategory::where('status', 1)->get();
        return view('frontend.pages.blog-detail', compact('blog', 'moreBlogs', 'recentBlogs', 'comments', 'categories'));
    }
}
