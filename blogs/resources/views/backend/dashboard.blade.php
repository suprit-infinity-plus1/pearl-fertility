@extends('layouts.admin-master')
@section('title', 'Administrative Dashboard')
@section('content')
    <section class="section">
        <div class="row ">
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card bg">
                    <div class="card-body">
                        <span class="info-box-icon bg-transparent pull-right">
                            <i class="fa fa-file fa-fw fa-3x theme-color"></i>
                        </span>
                        <div class="info-box-content">
                            <a href="{{ route('admin.blogs') }}"><h6 class="info-box-text text-dark">All Blogs</h6></a>
                            <p class="text-dark mb-0">{{ max($blogsCount, 0) }}</p>
                        </div>
                    </div>
                    <div class="card-footer bg-dark text-white-all">
                        <a href="{{ route('admin.blogs') }}" title="View Details">
                            View Details
                            <i class="fa fa-angle-double-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            {{-- {{ dd('i am in dashboard') }} --}}
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card bg">
                    <div class="card-body">
                        <span class="info-box-icon bg-transparent pull-right">
                            <i class="fa fa-file fa-fw fa-3x theme-color"></i>
                        </span>
                        <div class="info-box-content">
                            <a href="{{ route('admin.blogs.categories') }}"><h6 class="info-box-text text-dark">Categories</h6></a>
                            <p class="text-dark mb-0">{{ max($categoriesCount , 0) }}</p>
                        </div>
                    </div>
                    <div class="card-footer bg-dark text-white-all">
                        <a href="{{ route('admin.blogs.categories') }}" title="View Details">
                            View Details
                            <i class="fa fa-angle-double-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card bg">
                    <div class="card-body">
                        <span class="info-box-icon bg-transparent pull-right">
                            <i class="fa fa-file fa-fw fa-3x theme-color"></i>
                        </span>
                        <div class="info-box-content">
                            <a href="{{ route('admin.blogs.tags') }}"><h6 class="info-box-text text-dark">Tag</h6></a>
                            <p class="text-dark mb-0">{{ max($tagsCount , 0) }}</p>
                        </div>
                    </div>
                    <div class="card-footer bg-dark text-white-all">
                        <a href="{{ route('admin.blogs.tags') }}" title="View Details">
                            View Details
                            <i class="fa fa-angle-double-right"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
