@extends('layouts.admin-master')
@section('title', 'Administrative Dashboard')
@section('content')


    <div class="bg-dark text-white mb-3 px-4 py-3 rounded-2 d-flex justify-content-between align-items-center">
        <ul class="breadcrumb text-white-all mb-0" style="background-color: transparent">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="text-white text-decoration-none"><i
                        class="fas fa-home"></i>
                    Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> Blogs</li>
            {{-- <li class="breadcrumb-item"><a href="#"><i class="fas fa-plus"></i> Add
                    Blogs</a></li>
            <li class="breadcrumb-item">
                <a href="#importCustomersModel" data-toggle="modal" data-target="#importCustomersModel">
                    <i class="fas fa-plus"></i> Import Customers
                </a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ asset('excel/sample_customers_excel.xlsx') }}" download="">
                    <i class="fas fa-download"></i> Download Sample Excel
                </a>
            </li>
            <li class="breadcrumb-item">
                <a href="">
                    <i class="fas fa-download"></i> Export Customers Excel
                </a>
            </li>
            <li class="breadcrumb-item">
                <a href="" data-toggle="modal" data-target="#exportCustomersModel">
                    <i class="fas fa-plus"></i> Export Customers
                </a>
            </li> --}}
        </ul>
        <ul class="breadcrumb text-white-all mb-0" style="background-color: transparent">
            <li class="breadcrumb-item"><a href="{{ route('admin.blogs.add') }}" class="text-decoration-none"><i
                        class="fas fa-plus"></i> Add
                    Blogs</a></li>
        </ul>
    </div>
    <div class="card">
        <div class="card-header bg-dark text-white-all">
            <h4>Manage Blogs</h4>

            {{-- <form action="" method="post">
            @csrf
            <button type="submit" class="btn btn-primary btnSubmit">
                <i class="fa fa-file-excel-o"></i> Export Excel
            </button>
        </form> --}}
        </div>


        <div class="card-body">
            @if (Session::has('success'))
                <div class="alert alert-success">
                    <span class="close" onclick="this.parentElement.style.display='none';"
                        style="cursor: pointer;">&times;</span>
                    <ul class="p-0 m-0">
                        <li><span class="text-white">{{ Session::get('success') }}</span></li>
                    </ul>
                </div>
            @endif

            @if (Session::has('errors'))
                <div class="alert alert-danger">
                    <span class="close" onclick="this.parentElement.style.display='none';"
                        style="cursor: pointer;">&times;</span>
                    <ul class="p-0 m-0">
                        <li><span class="text-white">{{ Session::get('errors')->first() }}</span></li>
                        <!-- Display the first error -->
                    </ul>
                </div>
            @endif
            <div class="table-responsive">
                <table class="table table-striped table-hover datatable" style="width:100%;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Title</th>
                            {{-- <th>Content</th> --}}
                            <th>Category</th>
                            <th>Tags</th>
                            <th>Added On</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @php $i = 1; @endphp
                        @forelse ($blogs as $blog)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>
                                    @if ($blog->cover_image)
                                        <img src="{{ asset('storage/' . $blog->cover_image) }}" alt="cover image"
                                            width="80">
                                    @else
                                        ---
                                    @endif
                                </td>
                                <td>{{ \Illuminate\Support\Str::limit($blog->title, 35) }}</td>
                                {{-- <td>
                                    {!! $blog->content
                                        ? (strlen(strip_tags($blog->content)) > 50
                                            ? substr(strip_tags($blog->content), 0, 50) . '...'
                                            : strip_tags($blog->content))
                                        : ' --- ' !!}
                                </td> --}}
                                <td>
                                    {{ $blog->category?->name ?? '---' }}
                                </td>
                                <td>
                                    @if ($blog->tags->count())
                                        {{ $blog->tags->pluck('name')->join(', ') }}
                                    @else
                                        ---
                                    @endif
                                </td>
                                <td>{{ $blog->created_at->format('d-M-Y') }}</td>
                                <td>
                                    @if ($blog->status == 1)
                                        <span class="badge badge-success">Published</span>
                                    @else
                                        <span class="badge badge-warning">Draft</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="dropdown d-inline">
                                        <button class="btn btn-outline-primary dropdown-toggle" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Action
                                        </button>
                                        <div class="dropdown-menu">
                                            <a href="{{ url('blogs/' . $blog->slug) }}" class="dropdown-item has-icon text-info" target="_blank" title="View Blog">
                                                <i class="fa fa-eye"></i> View
                                            </a>
                                            <a href="{{ route('admin.blogs.edit', $blog->id) }}"
                                                class="dropdown-item has-icon action-edit-btn1" title="Edit Blog">
                                                <i class="fa fa-edit"></i> Edit
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item has-icon text-danger"
                                                onclick="confirmDeleteBlog({{ $blog->id }})" title="Delete Blog">
                                                <i class="fa fa-trash"></i> Delete
                                            </a>
                                            <form id="delete-blog-form-{{ $blog->id }}"
                                                action="{{ route('admin.blogs.delete', $blog->id) }}" method="POST"
                                                style="display:none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr class="text-center">
                                <td class="text-danger" colspan="8">
                                    <h5>No Record Found.</h5>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>

                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Title</th>
                            {{-- <th>Content</th> --}}
                            <th>Category</th>
                            <th>Tags</th>
                            <th>Added On</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>
    </div>

    <script>
        function confirmDeleteBlog(id) {
            if (confirm('Delete this blog?')) {
                document.getElementById('delete-blog-form-' + id).submit();
            }
        }
    </script>
@endsection
