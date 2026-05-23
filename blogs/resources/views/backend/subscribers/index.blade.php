@extends('layouts.admin-master')
@section('title', 'Administrative Dashboard')
@section('content')


    <div class="bg-dark text-white mb-3 px-4 py-3 rounded-2 d-flex justify-content-between align-items-center">
        <ul class="breadcrumb text-white-all mb-0" style="background-color: transparent">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="text-white text-decoration-none"><i
                        class="fas fa-home"></i>
                    Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> Subscribers</li>
            
        </ul>
        {{-- <ul class="breadcrumb text-white-all mb-0" style="background-color: transparent">
            <li class="breadcrumb-item"><a href="{{ route('admin.blogs.add') }}" class="text-decoration-none"><i
                        class="fas fa-plus"></i> Add
                    Blogs</a></li>
        </ul> --}}
    </div>
    <div class="card">
        <div class="card-header bg-dark text-white-all">
            <h4>Manage Subscribers</h4>

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
                            <th>Email</th>
                            <th>Added On</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @php $i = 1; @endphp
                        @forelse ($subscribers as $subscriber)
                            <tr>
                                <td>{{ $subscriber->id }}</td>
                                <td>{{ $subscriber->email }}</td>
                                <td>{{ $subscriber->created_at->format('d-M-Y') }}</td>
                                <td>
                                    @if ($subscriber->status == 1)
                                        <span class="badge badge-success">Active</span>
                                    @else
                                        <span class="badge badge-warning">Inactive</span>
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
                                            <a href="{{ route('subscriber.edit', $subscriber->id) }}"
                                                class="dropdown-item has-icon action-edit-btn1" title="Edit Blog">
                                                <i class="fa fa-edit"></i> Edit
                                            </a>
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
                            <th>Email</th>
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
