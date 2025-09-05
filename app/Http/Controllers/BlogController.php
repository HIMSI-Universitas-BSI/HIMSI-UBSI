<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Helpers\SettingHelper;

class BlogController extends Controller
{
    // method untuk menampilkan detail blog
    public function showBlog($id)
    {
        $blog = Blog::findOrFail($id);
        
        $instagram = SettingHelper::getSetting('instagram');
        $youtube = SettingHelper::getSetting('youtube');
        $tiktok = SettingHelper::getSetting('tiktok');
        $linkedin = SettingHelper::getSetting('linkedin');

        return view('pages.blogshow', compact('blog', 'instagram', 'youtube', 'tiktok', 'linkedin'));
    }
}
