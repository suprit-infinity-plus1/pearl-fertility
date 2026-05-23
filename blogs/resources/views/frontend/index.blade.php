@extends('layouts.master')
@section('title', ' Pearl Fertility and IVF | Blogs')

@section('content')


    <!-- -----------------Blog -section------- -->



    <section class="blog-section">
        <div class="container">


            <div class="text-center">
                <h2>Blogs</h2>
            </div>

            <!-- Blog Cards -->
            <div class="row">
                @foreach ($latestBlog as $blog)
                    <div class="col-md-4 mb-4">
                        <div class="blog-card">
                            <img src="{{ asset('storage/' . $blog->cover_image) }}" alt="IVF Guide">
                            <h5>{{ str($blog->title)->limit(60) }}</h5>
                            <a href="{{ url('blogs/' . $blog->slug) }}" class="read-more">Read More <span
                                    class="arrow">↗</span></a>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

@endsection

@section('scripts')
@endsection
