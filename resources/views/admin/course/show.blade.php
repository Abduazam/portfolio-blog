@extends('layouts.admin')

@section('title', 'Show')

@section('content')
    <div class="col-12 ">
        <div class="card">
            <div class="content-header border-bottom">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <h1 class="m-0">Kurs: {{ $course->id }}</h1>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="{{ route('course.edit', ['course' => $course->id]) }}" class="btn btn-warning">O'zgartirish</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <td style="width: 120px;"><b>Kurs nomi</b></td>
                        <td>{{ $course->title }}</td>
                    </tr>
                    <tr>
                        <td><b>Kurs ta'rifi</b></td>
                        <td>{!! $course->text !!}</td>
                    </tr>
                    <tr>
                        <td><b>Kurs link</b></td>
                        <td><a href="{{ $course->link }}">{{ $course->link }}</a></td>
                    </tr>
                    <tr>
                        <td><b>Kurs rasmi</b></td>
                        <td>
                            <img src="{{ asset('/images/' . $course->img) }}" alt="" class="w-50">
                        </td>
                    </tr>
                    <tr>
                        <td><b>Kurs holati</b></td>
                        <td>
                            @if($course->status === 1)
                                <span class="badge badge-success">Faol</span>
                            @else
                                <span class="badge badge-danger">Nofaol</span>
                            @endif
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
