@extends('layouts.front')

@section('title', 'Course')

@section('content')
    <div class="container-fluid py-5" id="course">
        <div class="container px-md-5 py-3">
            <div class="row w-100 h-100 p-0 m-0">
                @forelse($courses as $course)
                <div class="col-md-4">
                    <div class="card shadow border-0 fadeInUp">
                        <img src="{{ asset('/images/' . $course->img) }}" class="card-img-top" alt="{{ $course->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $course->title }}</h5>
                            <p class="card-text">{!! $course->text !!}</p>
                        </div>
                        <div class="card-body">
                            <a href="{{ $course->link }}" class="btn btn-outline-success" target="_blank">Start tutorial</a>
                        </div>
                    </div>
                </div>
                @empty
                    <p>There is not any courses here!</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection
