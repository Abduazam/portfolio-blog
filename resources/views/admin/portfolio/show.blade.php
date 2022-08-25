@extends('layouts.admin')

@section('title', 'Show')

@section('content')
    <div class="col-12 ">
        <div class="card">
            <div class="content-header border-bottom">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <h1 class="m-0">Portoflio: {{ $portfolio->id }}</h1>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="{{ route('portfolio.edit', ['portfolio' => $portfolio->id]) }}" class="btn btn-warning">Edit</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td style="width: 170px;"><b>Portoflio title</b></td>
                            <td>{{ $portfolio->title }}</td>
                        </tr>
                        <tr>
                            <td><b>Portoflio categories</b></td>
                            <td>
                                @forelse($portfolio->categories as $category)
                                    <span>{{ $category->title }}, </span>
                                @empty
                                    <span>Not has</span>
                                @endforelse
                            </td>
                        </tr>
                        <tr>
                            <td><b>Portoflio text</b></td>
                            <td>{!! $portfolio->text !!}</td>
                        </tr>
                        <tr>
                            <td><b>Portoflio image</b></td>
                            <td>
                                <img src="{{ asset('/images/' . $portfolio->img) }}" alt="" class="w-50">
                            </td>
                        </tr>
                        <tr>
                            <td><b>Portoflio status</b></td>
                            <td>
                                @if($portfolio->status === 1)
                                    <span class="badge badge-success">Active</span>
                                @else
                                    <span class="badge badge-danger">Inactive</span>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
