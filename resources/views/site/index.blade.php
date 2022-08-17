@extends('layouts.front')

@section('title', 'Home')

@section('content')
    <header class="header container-fluid py-5">
        <div class="container px-md-5 py-3">
            <div class="col-12" id="site-index">
                <div class="row w-100 h-100 p-0 m-0">
                    <div class="img-container col-md-3 p-0 fadeInUp">
                        <img src="/frontend/img/me.png" alt="Abduazam" class="w-75 rounded-circle shadow">
                    </div>
                    <div class="info-container col-md-9 d-flex flex-column align-items-md-start justify-content-center fadeInUp py-md-0 py-4">
                        <h1 class="m-0">Abduazam Maxsudov</h1>
                        <p class="m-0 fs-4 text-muted font-4">Backend developer</p>
                        <ul class="d-flex justify-content-md-start justify-content-center p-0 mt-3 mb-0">
                            <li class="nav-item pe-3">
                                <a href="https://github.com/Abduazam" class="nav-link"><i class="fa fa-github"></i></a>
                            </li>
                            <li class="nav-item pe-3">
                                <a href="https://www.youtube.com/channel/UCMPmtAqyLVfe82NqnOpsgIw" class="nav-link"><i
                                        class="fa fa-youtube-play"></i></a>
                            </li>
                            <li class="nav-item pe-3">
                                <a href="https://www.linkedin.com/in/abduazam-makhsudov-439341227/" class="nav-link"><i
                                        class="fa fa-linkedin-square"></i></a>
                            </li>
                            <li class="nav-item pe-3">
                                <a href="https://t.me/abduazam_blogi" class="nav-link"><i
                                        class="fa fa-telegram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row w-100 h-100 p-0 mx-0 mt-md-5 mt-0 fadeInUp">
                    <div class="col-12 p-0">
                        <p class="font-2">Programming is not forever as life. But now, life is programming)</p>
                    </div>
                    <div class="btns-wrapper anim-item p-0">
                        <a href="https://t.me/abduazam_blogi" class="btn btn-primary px-4 py-2 me-3 shadow font-3">Read Blog</a>
                        <a href="{{ url('/about') }}" class="btn btn-outline-primary px-4 py-2 shadow-sm font-3">About
                            Me</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection
