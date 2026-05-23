@extends('layouts.master')
@section('title', ' Home - Pearl Fertility and IVF | Blogs')

@section('content')

    <div class="loader-backdrop">
        <!-- Loader -->
        <div class="loader">
            <!-- <i class="ion-heart-outline"></i> -->
            {{-- <img src="{{ asset('assets/images/favicon.png') }}" width="100px "> --}}
            <i class="fa-solid fa-stethoscope"></i>
        </div>
    </div>



    <div class="page-header" style="background-image: url(assets/images/blog.png);">
        <!-- Page Header -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="heading bold">Blog </h1>
                </div>
            </div>
        </div>
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="breadcrumb">
                            <li><a href="index-hospital-classic.html">Home</a></li>
                            <li class="active">Blog </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-80 mb-80">
        <div class="row">
            @foreach ($blogs as $blog)
                <div class="col-lg-4 col-md-6 col-12 mt-4">
                    <div class="shadow rounded border border-black">
                        <div class="home-blog-card-img-container">
                            <img src="{{ asset('storage/' . $blog->cover_image) }}" alt=""
                                class="img-fluid w-100 rounded-top" style="height:200px; object-fit:cover;" />
                        </div>
                        <div class="home-blog-card-content p-20">
                            <h3 class="blog-card-title blog-card-title-text">
                                <a class="blue-title " href="{{ url('blogs/' . $blog->slug) }}">
                                    {{ str($blog->title)->limit(60) }}
                                </a>
                            </h3>
                            
                            <div class="blog-card-desc">
                                {{ str(strip_tags($blog->content))->limit(60) }}
                            </div>
                            <div class="home-blog-card-btn">
                                {{-- <a href="{{ route('blog-detail') }}" class="home-blog-card-read-more-btn">Read More</a> --}}
                                <a href="{{ url('blogs/' . $blog->slug) }}" class="home-blog-card-read-more-btn">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
        <!-- Pagination Links -->
        <div class="row mt-5">
            <div class="col-12 d-flex justify-content-center">
                {{ $blogs->links('vendor.pagination.bootstrap-5') }}
            </div>
        </div>
    


    <div id="back"><i class="ion-chevron-up-sharp"></i></div>

@endsection

@section('scripts')
@endsection
