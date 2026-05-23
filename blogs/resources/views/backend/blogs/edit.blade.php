@extends('layouts.admin-master')
@section('title', 'Administrative Dashboard')
@section('content')

    <section class="section">
        <div class="bg-dark text-white mb-3 px-4 py-3 rounded-2 d-flex justify-content-between align-items-center">
            <ul class="breadcrumb text-white-all mb-0">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="text-white text-decoration-none"><i
                            class="fas fa-home"></i>
                        Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('admin.blogs') }}"
                        class="text-decoration-none"><i class="fas fa-list"></i> All Blogs</a></li>
            </ul>
        </div>

        <div class="card" ng-app="products">
            <div class="card-header bg-dark text-white-all">
                <h4>Update Blog</h4>
            </div>
            <div class="card-body">
                {{-- <form method="POST" action="{{ route('admin.blogs.update', $blog->id) }}" role="form"
                    class="needs-validation" id="" enctype="multipart/form-data" autocomplete="off">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <!-- Blog Title -->
                                    <div class="col-md-6 order-md-1">
                                        <div class="form-group">
                                            <label for="title">Title <span class="text-danger">*</span></label>
                                            <input type="text" name="title" id="title" class="form-control"
                                                placeholder="Enter Title" required value="{{ $blog->title }}">
                                        </div>
                                    </div>

                                    <!-- Cover Image -->
                                    <div class="col-md-6 order-md-2">
                                        <div class="form-group">
                                            <label for="cover_image">Cover Image <span class="text-danger">*</span></label>
                                            <input type="file" name="cover_image" id="cover_image" class="form-control"
                                                accept="image/png, image/gif, image/jpeg, image/webp"
                                                onchange="previewBlogCoverImage(event)">
                                        </div>
                                    </div>

                                    <!-- Author -->
                                    <div class="col-md-6 order-4 order-md-3">
                                        <div class="form-group">
                                            <label for="author">Author <span class="text-danger">*</span></label>
                                            <input type="text" name="author" id="author" class="form-control"
                                                placeholder="Enter Author Name" required value="{{ $blog->author }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3 order-3 order-md-4">
                                        <div class="form-group">
                                            <img id="blog_cover_image_preview"
                                                src="{{ $blog->cover_image ? asset($blog->cover_image) : '#' }}"
                                                alt="Cover Image Preview"
                                                style="max-width:100%; height:auto; {{ $blog->cover_image ? '' : 'display:none;' }}" />
                                        </div>
                                    </div>
                                    <script>
                                        function previewBlogCoverImage(event) {
                                            const [file] = event.target.files;
                                            if (file) {
                                                const preview = document.getElementById('blog_cover_image_preview');
                                                preview.src = URL.createObjectURL(file);
                                                preview.style.display = 'block';
                                            }
                                        }
                                    </script>
                                    <!-- Description -->
                                    <div class="col-md-12 order-5 order-md-5">
                                        <div class="form-group">
                                            <label for="description">Description <span class="text-danger">*</span></label>
                                            <textarea name="description" id="description" class="form-control summernote" placeholder="Enter Description"
                                                rows="10" required>
                                                {{ $blog->description }}
                                            </textarea>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary update_button"> <i class="fa fa-send"></i>
                                    Submit</button>
                            </div>
                        </div>
                </form> --}}

                <form method="POST" action="{{ route('admin.blogs.update', $blog->id) }}" enctype="multipart/form-data"
                    autocomplete="off">
                    @csrf

                    <div class="row">
                        <!-- Blog Title -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Title <span class="text-danger">*</span></label>
                                <input type="text" name="title" id="title" class="form-control"
                                    placeholder="Enter Title" value="{{ old('title', $blog->title) }}" required>
                                @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Blog Category -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="category_id">Category</label>
                                <select name="category_id" id="category_id" class="form-control">
                                    <option value="">-- Select Category --</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ old('category_id', $blog->category_id) == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Cover Image -->
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="cover_image">Cover Image</label>
                                        <input type="file" name="cover_image" id="cover_image" class="form-control"
                                            accept="image/png, image/gif, image/jpeg, image/webp"
                                            onchange="previewBlogCoverImage(event)">
                                        @error('cover_image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <!-- Display current cover image if available -->
                                    @if ($blog->cover_image)
                                        <div class="form-group">
                                            <label>Current Cover Image:</label>
                                            <img id="blog_cover_image_preview"
                                                src="{{ asset('storage/' . $blog->cover_image) }}" alt="Cover Image"
                                                style="max-width:100%; height:auto; margin-top:10px;" />
                                        </div>
                                    @else
                                        <div class="form-group">
                                            <img id="blog_cover_image_preview" src="#" alt="Cover Image Preview"
                                                style="display:none; max-width:100%; height:auto;" />
                                        </div>
                                    @endif
                                </div>
                            </div>


                            <script>
                                function previewBlogCoverImage(event) {
                                    const [file] = event.target.files;
                                    if (file) {
                                        const preview = document.getElementById('blog_cover_image_preview');
                                        preview.src = URL.createObjectURL(file);
                                        preview.style.display = 'block';
                                    }
                                }
                            </script>
                        </div>

                        <!-- Blog Tags -->
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="tags">Tags</label>
                                        <select name="tags[]" id="tags" class="form-control select2" multiple>
                                            @foreach ($tags as $tag)
                                                <option value="{{ $tag->id }}"
                                                    {{ collect(old('tags', $blog->tags->pluck('id')))->contains($tag->id) ? 'selected' : '' }}>
                                                    {{ $tag->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('tags')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <!-- Author Name -->
                                    <div class="form-group">
                                        <label for="author">Author <span class="text-danger">*</span></label>
                                        <input type="text" name="author" id="author" class="form-control"
                                            placeholder="Enter Author Name" value="{{ old('author', $blog->author) }}"
                                            required>
                                        @error('author')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Blog Content -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="content">Content <span class="text-danger">*</span></label>
                                <textarea name="content" id="content" class="form-control summernote" rows="10" required>{{ old('content', $blog->content) }}</textarea>
                                @error('content')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Blog Status -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="status">Status <span class="text-danger">*</span></label>
                                <select name="status" id="status" class="form-control" required>
                                    <option value="1" {{ old('status', $blog->status) == 1 ? 'selected' : '' }}>
                                        Published</option>
                                    <option value="0" {{ old('status', $blog->status) == 0 ? 'selected' : '' }}>Draft
                                    </option>
                                </select>
                                @error('status')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-send"></i> Update Blog
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </section>

@endsection
