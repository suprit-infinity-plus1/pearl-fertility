<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscriberController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;
use App\Models\Blog;
use Illuminate\Support\Str;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/blogs', [MainController::class, 'blogs'])->name('blogs');
Route::get('/blog-detail', [MainController::class, 'blogDetail'])->name('blog-detail');


Route::get('/blogs/recent-blogs', function () {

    $blogs = Blog::select('id', 'title', 'slug', 'cover_image', 'content')
        ->orderByDesc('created_at')
        ->take(3)
        ->get()
        ->map(function ($blog) {

            $blog->cover_image_url = url('storage/' . $blog->cover_image);

            // plain-text short excerpt
            $blog->excerpt = Str::limit(strip_tags($blog->content), 120);

            // helpful final link
            $blog->url = url('blogs/' . $blog->slug);

            // we no longer need to expose full content here
            unset($blog->content);

            return $blog;
        });

    return response()->json($blogs);
});


Route::get('/blogs/{blog_url}', [MainController::class, 'getBlog'])->name('blog');



Route::post('/subscribers/store', [SubscriberController::class, 'store'])->name('subscriber.store');

Route::prefix('admin')->group(function () {
    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', [MainController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
        // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        Route::prefix('blogs')->group(function () {

            Route::get('/', [BlogController::class, 'blogs'])->name('admin.blogs');
            Route::get('/add', [BlogController::class, 'blogsAdd'])->name('admin.blogs.add');
            Route::get('/edit/{id}', [BlogController::class, 'blogsEdit'])->name('admin.blogs.edit');
            Route::post('/delete/{id}', [BlogController::class, 'blogsDelete'])->name('admin.blogs.delete');
            Route::post('/store', [BlogController::class, 'store'])->name('admin.blogs.store');
            Route::post('/update/{id}', [BlogController::class, 'blogsUpdate'])->name('admin.blogs.update');

            // Blog Categories
            Route::get('/categories', [BlogController::class, 'categories'])->name('admin.blogs.categories');
            Route::get('/categories/add', [BlogController::class, 'categoriesAdd'])->name('admin.blogs.categories.add');
            Route::get('/categories/edit/{id}', [BlogController::class, 'categoriesEdit'])->name('admin.blogs.categories.edit');
            Route::post('/categories/delete/{id}', [BlogController::class, 'categoriesDelete'])->name('admin.blogs.categories.delete');
            Route::post('/categories/store', [BlogController::class, 'categoriesStore'])->name('admin.blogs.categories.store');
            Route::post('/categories/update/{id}', [BlogController::class, 'categoriesUpdate'])->name('admin.blogs.categories.update');

            // Blog Tags
            Route::get('/tags', [BlogController::class, 'tags'])->name('admin.blogs.tags');
            Route::get('/tags/add', [BlogController::class, 'tagsAdd'])->name('admin.blogs.tags.add');
            Route::get('/tags/edit/{id}', [BlogController::class, 'tagsEdit'])->name('admin.blogs.tags.edit');
            Route::post('/tags/delete/{id}', [BlogController::class, 'tagsDelete'])->name('admin.blogs.tags.delete');
            Route::post('/tags/store', [BlogController::class, 'tagsStore'])->name('admin.blogs.tags.store');
            Route::post('/tags/update/{id}', [BlogController::class, 'tagsUpdate'])->name('admin.blogs.tags.update');
        });

        // Subscribers
        Route::prefix('subscribers')->group(function () {
            Route::get('/', [SubscriberController::class, 'subscribers'])->name('subscriber');
            Route::get('/add', [SubscriberController::class, 'create'])->name('subscriber.add');
            Route::get('/edit/{id}', [SubscriberController::class, 'edit'])->name('subscriber.edit');
            Route::post('/update/{id}', [SubscriberController::class, 'updateStatus'])->name('subscriber.update');

            // Route::post('/delete/{id}', [SubscriberController::class, 'destroy'])->name('subscriber.delete');
        });
    });
});


// Route::get('/recent-blogs', function () {

//     return Blog::query()
//         ->where('status', 1)
//         ->orderByDesc('created_at')
//         ->limit(3)
//         ->get([
//             'id',
//             'title',
//             'slug',
//             'cover_image',
//             'content',
//             'created_at'
//         ])
//         ->map(function ($blog) {

//             $blog->cover_image_url = url('storage/' . $blog->cover_image);
//             $blog->excerpt = str(strip_tags($blog->content))->limit(120);
//             $blog->url = url('blogs/' . $blog->slug);

//             return $blog;
//         });
// });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
