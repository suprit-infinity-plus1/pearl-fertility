@extends('layouts.master')
@section('title', 'Pearl Fertility and IVF | ' . $blog->title)
@section('description', 'Learn how ICSI treatment for infertility at Pearl Fertility & IVF, Mumbai, helps couples overcome male infertility and achieve successful pregnancies with advanced reproductive technology.')

@section('content')
    <div class="loader-backdrop">
        <div class="loader">
            <i class="fa-solid fa-stethoscope"></i>
        </div>
    </div>

    <!-- Page Header -->
    <div class="page-header" style="background-image: url('{{ asset('assets/images/article.jpg') }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="heading bold">Blog Details</h1>
                </div>
            </div>
        </div>
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="breadcrumb">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="active">{{ $blog->title }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog Details -->
    <div class="container mt-80 mb-80">
        <div class="row">
            <!-- Blog Content -->
            <div class="col-lg-8">
                <div class="blog-box">
                    <div class="blog-header">
                        @if ($blog->cover_image)
                            <img src="{{ asset('storage/' . $blog->cover_image) }}" class="img-fluid rounded w-100"
                                alt="{{ $blog->title }}">
                        @else
                            <img src="{{ asset('assets/images/900-476-1.jpg') }}" class="img-fluid rounded w-100"
                                alt="{{ $blog->title }}">
                        @endif

                        <h2 class="heading font-bold post-title mt-3">{{ $blog->title }}</h2>

                        <div class="blog-meta">
                            <ul class="meta-list">
                                <li class="posted-on">
                                    <span>Posted On:</span>
                                    <span class="date">{{ $blog->created_at->format('d') }}</span>
                                    <span class="month">{{ $blog->created_at->format('M') }}</span>
                                    <span class="year">{{ $blog->created_at->format('Y') }}</span>
                                </li>
                                @if (!empty($blog->author))
                                    <li class="posted-by">By: <a href="#">{{ $blog->author }}</a></li>
                                @endif
                            </ul>
                        </div>
                    </div>

                    <div class="blog-excerpt mt-4">
                        {!! $blog->content !!}
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4 mt-40 mt-lg-0">
                <aside class="sidebar pl-lg-20">

                    <!-- Subscribe Widget -->
                    <div class="widget widget-search pt-0">
                        <h5 class="heading d-flex align-items-center">
                            <i class="ion-mail-open-outline icon-left"></i>Subscribe to Blog
                        </h5>
                        <p>Your daily dose of health tips, news updates and good habits.</p>


                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        @if (session('info'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('info') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('error') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <form class="search" method="POST" action="{{ route('subscriber.store') }}">
                            @csrf
                            <div class="input-group">
                                <input type="email" name="email" class="form-control" placeholder="Your Email Id"
                                    required>
                                <div class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">Go</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Recent Blogs -->
                    <div class="widget widget-blogs">
                        <h5 class="heading d-flex align-items-center">
                            <i class="ion-document-text-outline icon-left"></i>Recent Blogs
                        </h5>

                        @if ($recentBlogs->isNotEmpty())
                            <ul class="widget-list">
                                @foreach ($recentBlogs as $recent)
                                    <li>
                                        <a href="{{ url('blogs/' . $recent->slug) }}">
                                            {{ str($recent->title)->limit(60) }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p>No recent blogs found.</p>
                        @endif
                    </div>
                </aside>
            </div>
        </div>
    </div>

    <div id="back"><i class="ion-chevron-up-sharp"></i></div>
@endsection

@section('scripts')
@endsection
