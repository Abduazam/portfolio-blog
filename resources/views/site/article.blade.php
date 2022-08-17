@extends('layouts.front')

@section('title', 'Article')

@section('content')
    <div class="container-fluid py-5" id="about">
        <div class="container px-md-5 py-3">
            <div class="about-container d-flex justify-content-center">
                <div class="col-md-7 p-0">
                    @if($post->img)
                        <img src="{{ asset('images/' . $post->img) }}" alt="" class="w-100 shadow-sm">
                    @endif
                    <h2 class="mb-0 pt-5 pb-4">{{ $post->title }}</h2>
                    <p class="mb-0 font-2 small">{{ $post->text }}</p>
                    <div class="additional-container pt-5">
                        <span class="text-muted small font-4 pe-3"><i class="fa fa-eye"></i> {{ $post->view }}</span>
                        <span class="text-muted small font-4"><i class="fa fa-calendar"></i> {{ $post->created_at }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
