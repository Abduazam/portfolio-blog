@extends('layouts.admin')

@section('title', 'Show')

@section('content')
    <div class="col-12 ">
        <div class="card">
            <div class="content-header border-bottom">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <h1 class="m-0">Loyiha: {{ $portfolio->id }}</h1>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="{{ route('portfolio.edit', ['portfolio' => $portfolio->id]) }}" class="btn btn-warning">O'zgartirish</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td><b>Loyiha nomi</b></td>
                            <td>{{ $portfolio->title }}</td>
                        </tr>
                        <tr>
                            <td><b>Loyiha kategoriyasi</b></td>
                            <td>
                                @forelse($portfolio->categories as $category)
                                    <span>{{ $category->title }}, </span>
                                @empty
                                    <span>Kategoriyasi yo'q</span>
                                @endforelse
                            </td>
                        </tr>
                        <tr>
                            <td><b>Loyiha ta'rifi</b></td>
                            <td>{{ $portfolio->text }}</td>
                        </tr>
                        <tr>
                            <td><b>Loyiha rasmi</b></td>
                            <td>
                                <img src="{{ asset('/images/' . $portfolio->img) }}" alt="" class="w-50">
                            </td>
                        </tr>
                        <tr>
                            <td><b>Loyiha holati</b></td>
                            <td>
                                @if($portfolio->status === 1)
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
