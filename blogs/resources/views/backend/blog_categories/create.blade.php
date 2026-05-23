@extends('layouts.admin-master')
@section('title', 'Add Blog Category')
@section('content')

<div class="bg-dark text-white mb-3 px-4 py-3 rounded-2">
    <ul class="breadcrumb text-white-all mb-0" style="background-color: transparent">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="text-white text-decoration-none"><i class="fas fa-home"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.blogs.categories') }}" class="text-white text-decoration-none"><i class="fas fa-list"></i> All Categories</a></li>
        <li class="breadcrumb-item active">Add Category</li>
    </ul>
</div>

<div class="card">
    <div class="card-header bg-dark text-white-all">
        <h4>Add New Category</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.blogs.categories.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Category Name <span class="text-danger">*</span></label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            {{-- <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" name="slug" id="slug" class="form-control" value="{{ old('slug') }}">
                @error('slug') <span class="text-danger">{{ $message }}</span> @enderror
            </div> --}}

            <div class="form-group">
                <label for="status">Status <span class="text-danger">*</span></label>
                <select name="status" id="status" class="form-control" required>
                    <option value="1" {{ old('status')=='1' ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ old('status')=='0' ? 'selected' : '' }}>Inactive</option>
                </select>
                @error('status') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <button type="submit" class="btn btn-primary"><i class="fa fa-send"></i> Submit</button>
        </form>
    </div>
</div>

@endsection
