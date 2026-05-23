@extends('layouts.admin-master')
@section('title', 'Blog Categories')
@section('content')

    <div class="bg-dark text-white mb-3 px-4 py-3 rounded-2 d-flex justify-content-between align-items-center">
        <ul class="breadcrumb text-white-all mb-0" style="background-color: transparent">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="text-white text-decoration-none"><i
                        class="fas fa-home"></i> Home</a></li>
            <li class="breadcrumb-item active"><i class="fas fa-list"></i> Blog Categories</li>
        </ul>
        <a href="{{ route('admin.blogs.categories.add') }}" class="text-decoration-none text-white"><i
                class="fas fa-plus"></i> Add Category</a>
    </div>

    <div class="card">
        <div class="card-header bg-dark text-white-all">
            <h4>Manage Categories</h4>
        </div>
        <div class="card-body">
            {{-- @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif --}}
            @if (session('success'))
                <div class="alert alert-success">
                    <span class="close" onclick="this.parentElement.style.display='none';"
                        style="cursor: pointer;">&times;</span>
                    <ul class="m-0 p-0">
                        <li><span class="text-white">{{ session('success') }}</span></li>
                    </ul>
                </div>
            @endif

            @if ($errors->any()) <!-- Check if there are any errors -->
                <div class="alert alert-danger">
                    <span class="close" onclick="this.parentElement.style.display='none';"
                        style="cursor: pointer;">&times;</span>
                    <ul class="m-0 p-0">
                        @foreach ($errors->all() as $error)
                            <li><span class="text-white">{{ $error }}</span></li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="table-responsive">
                <table class="table table-striped table-hover" style="width:100%;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Status</th>
                            <th>Added On</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories as $i => $category)
                            <tr>
                                <td>{{ $i + 1 }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->slug }}</td>
                                {{-- <td>{{ $category->status ? 'Active' : 'Inactive' }}</td> --}}
                                <td>
                                    @if ($category->status == 1)
                                        <span class="badge badge-success">Active</span>
                                    @else
                                        <span class="badge badge-danger">Inactive</span>
                                    @endif
                                </td>
                                <td>{{ $category->created_at->format('d-M-Y') }}</td>
                                <td>
                                    <button class="btn btn-outline-primary dropdown-toggle" type="button"
                                        id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Action
                                    </button>

                                    <div class="dropdown-menu">
                                        <a href="{{ route('admin.blogs.categories.edit', $category->id) }}"
                                            class="dropdown-item has-icon action-edit-btn1" title="Edit Category">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>

                                        <a href="javascript:void(0);" class="dropdown-item has-icon text-danger"
                                            onclick="if(confirm('Delete this category?')) { document.getElementById('delete-blog-form-{{ $category->id }}').submit(); }"
                                            title="Delete Category">
                                            <i class="fa fa-trash"></i> Delete
                                        </a>

                                        <form id="delete-blog-form-{{ $category->id }}"
                                            action="{{ route('admin.blogs.categories.delete', $category->id) }}"
                                            method="POST" style="display:none;">
                                            @csrf
                                        </form>
                                    </div>


                                    {{-- <a href="{{ route('admin.blogs.categories.edit', $category->id) }}"
                                        class="btn btn-sm btn-primary">Edit</a>
                                    <form action="{{ route('admin.blogs.categories.delete', $category->id) }}"
                                        method="POST" style="display:inline-block;">
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('Delete this category?')">Delete</button>
                                    </form> --}}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">No categories found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Status</th>
                            <th>Added On</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

@endsection
