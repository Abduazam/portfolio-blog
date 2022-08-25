@extends('layouts.front')

@section('title', 'Blog')

@section('content')
    <div class="container-fluid py-5" id="blog">
        <div class="container px-md-5 py-3">
            <div class="blog-container d-flex justify-content-center flex-column align-items-center">
                @forelse($posts as $post)
                    <div class="col-md-9 p-0">
                        <a href="{{ url('blog', ['post' => $post->id]) }}" class="article-container d-flex w-100 text-dark border-bottom">
                            <div class="col-md-11 py-3 ps-3">
                                <h3>{{ $post->title }}</h3>
                                <p class="font-2 small mb-0">{!! substr($post->text, 0, 50) !!}..</p>
                            </div>
                            <div class="col-md-1 d-flex align-items-center justify-content-end pe-3">
                                <i class="fa fa-long-arrow-right fs-6"></i>
                            </div>
                        </a>
                    </div>
                @empty
                    <p>There is not any post yet!</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection
