@extends('layouts.admin-master')
@section('title', 'Add Blog Tag')
@section('content')

<div class="bg-dark text-white mb-3 px-4 py-3 rounded-2">
    <ul class="breadcrumb text-white-all mb-0" style="background-color: transparent">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="text-white text-decoration-none"><i class="fas fa-home"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.blogs.tags') }}" class="text-white text-decoration-none"><i class="fas fa-tags"></i> All Tags</a></li>
        <li class="breadcrumb-item active">Add Tag</li>
    </ul>
</div>

<div class="card">
    <div class="card-header bg-dark text-white-all">
        <h4>Add New Tag</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.blogs.tags.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Tag Name <span class="text-danger">*</span></label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            {{-- <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" name="slug" id="slug" class="form-control" value="{{ old('slug') }}">
                @error('slug') <span class="text-danger">{{ $message }}</span> @enderror
            </div> --}}

            <button type="submit" class="btn btn-primary"><i class="fa fa-send"></i> Submit</button>
        </form>
    </div>
</div>

@endsection
