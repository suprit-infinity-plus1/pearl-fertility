@extends('layouts.admin-master')
@section('title', 'Blog Tags')
@section('content')

    <div class="bg-dark text-white mb-3 px-4 py-3 rounded-2 d-flex justify-content-between align-items-center">
        <ul class="breadcrumb text-white-all mb-0" style="background-color: transparent">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="text-white text-decoration-none"><i
                        class="fas fa-home"></i> Home</a></li>
            <li class="breadcrumb-item active"><i class="fas fa-tags"></i> Blog Tags</li>
        </ul>
        <a href="{{ route('admin.blogs.tags.add') }}" class="text-decoration-none text-white"><i class="fas fa-plus"></i> Add
            Tag</a>
    </div>

    <div class="card">
        <div class="card-header bg-dark text-white-all">
            <h4>Manage Blog Tags</h4>
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="table-responsive">
                <table class="table table-striped table-hover" style="width:100%;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Added On</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($tags as $i => $tag)
                            <tr>
                                <td>{{ $i + 1 }}</td>
                                <td>{{ $tag->name }}</td>
                                <td>{{ $tag->slug }}</td>
                                <td>{{ $tag->created_at->format('d-M-Y') }}</td>
                                <td>

                                    <button class="btn btn-outline-primary dropdown-toggle" type="button"
                                        id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Action
                                    </button>

                                    <div class="dropdown-menu">
                                        <a href="{{ route('admin.blogs.tags.edit', $tag->id) }}"
                                            class="dropdown-item has-icon action-edit-btn1" title="Edit Tag">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>

                                        <a href="javascript:void(0);" class="dropdown-item has-icon text-danger"
                                            onclick="if(confirm('Delete this tag?')) { document.getElementById('delete-tag-form-{{ $tag->id }}').submit(); }"
                                            title="Delete Tag">
                                            <i class="fa fa-trash"></i> Delete
                                        </a>

                                        <form id="delete-tag-form-{{ $tag->id }}"
                                            action="{{ route('admin.blogs.tags.delete', $tag->id) }}" method="POST"
                                            style="display:none;">
                                            @csrf
                                        </form>
                                    </div>

                                    {{-- <a href="{{ route('admin.blogs.tags.edit', $tag->id) }}"
                                        class="btn btn-sm btn-primary">Edit</a>
                                    <form action="{{ route('admin.blogs.tags.delete', $tag->id) }}" method="POST"
                                        style="display:inline-block;">
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('Delete this tag?')">Delete</button>
                                    </form> --}}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">No tags found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Added On</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

@endsection
