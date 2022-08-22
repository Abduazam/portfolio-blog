@extends('layouts.admin')

@section('title', 'Show')

@section('content')
    <div class="col-12 ">
        <div class="card">
            <div class="content-header border-bottom">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <h1 class="m-0">Post: {{ $post->id }}</h1>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="{{ route('post.edit', ['post' => $post->id]) }}" class="btn btn-warning">O'zgartirish</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td><b>Post mavzusi</b></td>
                            <td>{{ $post->title }}</td>
                        </tr>
                        <tr>
                            <td><b>Post matni</b></td>
                            <td>{!! $post->text !!}</td>
                        </tr>
                        <tr>
                            <td><b>Post rasmi</b></td>
                            <td>
                                @if(isset($post->img))
                                    <img src="{{ asset('/images/' . $post->img) }}" alt="" class="w-100">
                                @else
                                    <span class="badge badge-secondary">Rasm mavjud emas</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td><b>Post holati</b></td>
                            <td>
                                @if($post->status === 1)
                                    <span class="badge badge-success">Faol</span>
                                @else
                                    <span class="badge badge-danger">Nofaol</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 150px;"><b>Post ko'rilishlari</b></td>
                            <td>{{ $post->view }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
