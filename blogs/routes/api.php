<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Blog;

/*
|--------------------------------------------------------------------------
| API Routes (auto-prefixed with /api)
|--------------------------------------------------------------------------
| Final URL (IMPORTANT):
| https://pearlfertilityandivf.com/blogs/api/recent-blogs
|--------------------------------------------------------------------------
*/

Route::get('/recent-blogs', function () {
dd("hello man");
    $blogs = Blog::query()
        ->where('status', 1) // only published blogs
        ->orderByDesc('created_at')
        ->limit(3)
        ->get([
            'id',
            'title',
            'slug',
            'cover_image',
            'content',
            'created_at'
        ]);

    return $blogs->map(function ($blog) {

        // Absolute image URL for PHP frontend
        $blog->cover_image_url = url('storage/' . $blog->cover_image);

        // Short safe excerpt for homepage
        $blog->excerpt = str(strip_tags($blog->content))->limit(120);

        // Blog URL for direct linking
        $blog->url = url('blogs/' . $blog->slug);

        return $blog;
    });
});
Route::get('/test-api', function () {
    return 'API working';
});