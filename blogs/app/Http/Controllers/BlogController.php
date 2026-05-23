<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /* ============================
     * Blogs
     * ============================
     */

    // List blogs
    public function blogs()
    {
        $blogs = Blog::with(['category', 'tags'])->latest()->get();

        // dd($blogs);
        // return view('admin.blogs.index', compact('blogs'));
        return view('backend.blogs.index', compact('blogs'));
    }

    // Add blog form
    public function blogsAdd()
    {
        $categories = BlogCategory::active()->get();
        $tags = Tag::all();

        // return view('admin.blogs.add', compact('categories', 'tags'));
        return view('backend.blogs.create', compact('categories', 'tags'));
    }

    // Edit blog form
    public function blogsEdit($id)
    {
        $blog = Blog::with('tags')->findOrFail($id);
        $categories = BlogCategory::active()->get();
        $tags = Tag::all();

        // return view('admin.blogs.edit', compact('blog', 'categories', 'tags'));
        return view('backend.blogs.edit', compact('blog', 'categories', 'tags'));
    }

    public function store(Request $request)
    {
        // Validate request
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'category_id' => 'nullable|exists:blog_categories,id',
            'status' => 'required|boolean',
            'cover_image' => 'nullable|image|mimes:jpg,jpeg,png,gif,webp|max:2048', // optional image
            'tags' => 'nullable|array',
            'tags.*' => 'exists:tags,id',
        ]);

        // Generate slug from title
        $slug = Str::slug($data['title']);

        // Check for duplicate slug
        if (Blog::where('slug', $slug)->exists()) {
            return redirect()->back()
                ->withInput()
                ->withErrors(['title' => 'A blog with this title already exists. Please choose a different title.']);
        }

        $data['slug'] = $slug;

        // Set author as current user
        $data['author'] = auth()->user()->name ?? 'admin';

        // Handle cover image if uploaded
        if ($request->hasFile('cover_image')) {
            $file = $request->file('cover_image');
            $path = $file->store('uploads/blogs', 'public'); // stores in storage/app/public/uploads/blogs
            $data['cover_image'] = $path;
        }

        // Create blog
        $blog = Blog::create($data);

        // Attach tags if any
        if (! empty($data['tags'])) {
            $blog->tags()->attach($data['tags']);
        }

        return redirect()->route('admin.blogs')->with('success', 'Blog created successfully.');
    }

    public function blogsUpdate(Request $request, $id)
    {
        // Find the blog by ID
        $blog = Blog::findOrFail($id);

        // Validate the request based on the form fields
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author' => 'required|string|max:100',
            'category_id' => 'nullable|exists:blog_categories,id',
            'status' => 'required|boolean',
            'tags' => 'nullable|array',
            'tags.*' => 'exists:tags,id',
            'cover_image' => 'nullable|image|mimes:jpg,jpeg,png,gif,webp|max:2048',
        ]);

        // If no slug is provided, generate it from the title
        if (empty($data['slug'])) {
            $slug = Str::slug($data['title']);
            // Ensure the slug is unique
            if (Blog::where('slug', $slug)->where('id', '!=', $id)->exists()) {
                return redirect()->back()
                    ->withInput()
                    ->withErrors(['title' => 'A blog with this title already exists. Please choose a different title.']);
            }
            $data['slug'] = $slug;
        }

        // Handle cover image upload if present
        if ($request->hasFile('cover_image')) {
            // Delete the old cover image if it exists
            if ($blog->cover_image && Storage::disk('public')->exists($blog->cover_image)) {
                Storage::disk('public')->delete($blog->cover_image);
            }

            // Store the new cover image
            $file = $request->file('cover_image');
            $path = $file->store('uploads/blogs', 'public');
            $data['cover_image'] = $path;
        }

        // Update the blog with the validated data
        $blog->update($data);

        // Sync tags to ensure that only the selected tags are attached
        $blog->tags()->sync($data['tags'] ?? []);

        return redirect()->route('admin.blogs')->with('success', 'Blog updated successfully.');
    }

    // Delete blog
    public function blogsDelete($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect()->route('admin.blogs')->with('success', 'Blog deleted successfully.');
    }

    /* ============================
     * Categories
     * ============================
     */

    public function categories()
    {
        $categories = BlogCategory::latest()->get();

        return view('backend.blog_categories.index', compact('categories'));
    }

    public function categoriesAdd()
    {
        return view('backend.blog_categories.create');
    }

    public function categoriesEdit($id)
    {
        $category = BlogCategory::findOrFail($id);

        return view('backend.blog_categories.edit', compact('category'));
    }

    public function categoriesStore(Request $request)
    {
        // Validate only the fields coming from the form
        $data = $request->validate([
            'name' => 'required|string|max:255|unique:blog_categories,name',
            'status' => 'required|boolean',
        ]);

        // Generate slug automatically
        $data['slug'] = Str::slug($data['name']);

        // Save category
        BlogCategory::create($data);

        return redirect()->route('admin.blogs.categories')->with('success', 'Category created successfully.');
    }

    public function categoriesUpdate(Request $request, $id)
    {
        $category = BlogCategory::findOrFail($id);

        $data = $request->validate([
            'name' => 'required|string|max:255|unique:blog_categories,name,'.$category->id,
            'status' => 'required|boolean',
        ]);

        // Regenerate slug automatically
        $data['slug'] = Str::slug($data['name']);

        $category->update($data);

        return redirect()->route('admin.blogs.categories')->with('success', 'Category updated successfully.');
    }

    public function categoriesDelete($id)
    {
        $category = BlogCategory::findOrFail($id);
        $category->delete();

        return redirect()->route('admin.blogs.categories')->with('success', 'Category deleted successfully.');
    }

    /* ============================
     * Tags
     * ============================
     */

    public function tags()
    {
        $tags = Tag::latest()->get();

        return view('backend.blog_tags.index', compact('tags'));
    }

    public function tagsAdd()
    {
        return view('backend.blog_tags.create');
    }

    public function tagsEdit($id)
    {
        $tag = Tag::findOrFail($id);

        return view('backend.blog_tags.edit', compact('tag'));
    }

    public function tagsStore(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255|unique:tags,name',
        ]);

        // $data['slug'] = Str::slug($data['name']);

        // Tag::create($data);

        // Generate slug from tag name
        $slug = Str::slug($data['name']);

        // Check for duplicate slug
        if (Tag::where('slug', $slug)->exists()) {
            return redirect()->back()
                ->withInput()
                ->withErrors(['name' => 'A tag with this name already exists. Please choose a different name.']);
        }

        // Add the slug to the data
        $data['slug'] = $slug;

        // Create the tag
        Tag::create($data);

        return redirect()->route('admin.blogs.tags')->with('success', 'Tag created successfully.');
    }

    public function tagsUpdate(Request $request, $id)
    {
        // Find the tag by its ID
        $tag = Tag::findOrFail($id);

        // Validate the request
        $data = $request->validate([
            'name' => 'required|string|max:255|unique:tags,name,'.$tag->id, // Ensure name is unique, but allow for this tag's name
        ]);

        // Generate slug from the name
        $slug = Str::slug($data['name']);

        // Check if the generated slug already exists for other tags
        if (Tag::where('slug', $slug)->where('id', '!=', $tag->id)->exists()) {
            // If the slug is taken by another tag, return an error
            return redirect()->back()
                ->withInput()
                ->withErrors(['name' => 'A tag with this name already exists. Please choose a different name.']);
        }

        // Assign the generated slug to the data array
        $data['slug'] = $slug;

        // Update the tag with the validated data
        $tag->update($data);

        // Redirect back with success message
        return redirect()->route('admin.blogs.tags')->with('success', 'Tag updated successfully.');
    }

    public function tagsDelete($id)
    {
        $tag = Tag::findOrFail($id);
        $tag->delete();

        return redirect()->route('admin.blogs.tags')->with('success', 'Tag deleted successfully.');
    }
}
