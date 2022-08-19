@extends('layouts.front')

@section('title', 'Portfolio')

@section('content')
    <div class="container-fluid py-md-5 p-0" id="portfolio">
        <div class="container px-md-5 px-4 py-3">
            <div class="about-container d-flex justify-content-center">
                <div class="col-md-7 p-0 fadeInUp">
                    <div class="img-block" style="background-image: url('/images/{{ $portfolio->img }}')">
                    </div>
                    <div class="text-block">
                        <h2 class="mb-0 pt-4">{{ $portfolio->title }}</h2>
                        {!! $portfolio->text !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
