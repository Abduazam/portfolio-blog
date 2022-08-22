@extends('layouts.admin')

@section('title', 'Course')

@section('content')
    <div class="col-12 ">
        <div class="card">
            <div class="content-header border-bottom">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <h1 class="m-0">Kurslar bo'limi</h1>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="{{ route('course.create') }}" class="btn btn-success">Qo'shish</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @if(!empty($courses))
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 10px;">#</th>
                            <th style="width: 200px;">Nomi</th>
                            <th style="width: 500px;">Matni</th>
                            <th style="width: 100px;">Holati</th>
                            <th style="width: 100px;"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($courses as $course)
                            <tr>
                                <td style="width: 10px;">{{ $course->id }}</td>
                                <td>{{ $course->title }}</td>
                                <td>{!! substr(strip_tags($course->text), 0, 70); !!}</td>
                                <td>
                                    @if($course->status === 1)
                                        <span class="badge badge-success">Faol</span>
                                    @else
                                        <span class="badge badge-danger">Nofaol</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="row align-items-center w-100 h-100 p-0 m-0 justify-content-between">
                                        <a href="{{ route('course.show', ['course' => $course->id]) }}" class="badge badge-info"><i class="fa fa-eye"></i></a>
                                        <a href="{{ route('course.edit', ['course' => $course->id]) }}" class="badge badge-warning"><i class="fa fa-pen"></i></a>
                                        <form method="post" action="{{ route('course.destroy', ['course' => $course->id]) }}" style="margin-top: -4px;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="border-0 badge badge-danger"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @else
                    <p class="text-center mb-0">Hozircha hech qanday kurslar mavjud emas!</p>
                @endif
            </div>
        </div>
    </div>
@endsection
