@extends('layouts.front')

@section('title', 'About')

@section('content')
    <div class="container-fluid py-5" id="about">
        <div class="container px-md-5 py-3">
            <div class="about-container d-flex justify-content-center">
                <div class="col-md-7 p-0 fadeInUp">
                    <div class="row w-100 h-100 p-0 m-0">
                        <div class="col-12 p-0">
                            <p class="font-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam pharetra in lorem at laoreet. Donec hendrerit libero eget est tempor, quis tempus arcu elementum. In elementum elit at dui tristique feugiat. Mauris convallis, mi at mattis malesuada, neque nulla volutpat dolor, hendrerit faucibus eros nibh ut nunc.</p>
                        </div>
                        <div class="col-12 px-0 py-4">
                            <img src="/frontend/img/about.png" alt="About picture" class="w-100">
                        </div>
                        <div class="col-12 px-0 py-4">
                            <p class="font-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam pharetra in lorem at laoreet. Donec hendrerit libero eget est tempor, quis tempus arcu elementum. In elementum elit at dui tristique feugiat. Mauris convallis, mi at mattis malesuada, neque nulla volutpat dolor, hendrerit faucibus eros nibh ut nunc.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
