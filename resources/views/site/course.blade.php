@extends('layouts.front')

@section('title', 'Course')

@section('content')
    <div class="container-fluid py-5" id="course">
        <div class="container px-md-5 py-3">
            <div class="row w-100 h-100 p-0 m-0">
                <div class="col-md-4 ps-0">
                    <div class="card shadow border-0 fadeInUp">
                        <img src="/frontend/img/enter_programming.png" class="card-img-top" alt="Enter programming">
                        <div class="card-body">
                            <h5 class="card-title">Enter programming</h5>
                            <p class="card-text">This course who do not have any thougts about programming. From zero to
                                one)</p>
                        </div>
                        <div class="card-body">
                            <a href="#" class="btn btn-outline-success">Start tutorial</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
