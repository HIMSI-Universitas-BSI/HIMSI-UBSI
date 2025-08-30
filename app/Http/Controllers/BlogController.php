<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function showBlog($id)
    {
        $blog = Blog::findOrFail($id);
        
        return view('blogshow', compact('blog'));
    }
}
