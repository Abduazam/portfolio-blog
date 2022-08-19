@extends('layouts.admin')

@section('title', 'Portfolio')

@section('content')
    <div class="col-12 ">
        <div class="card">
            <div class="content-header border-bottom">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <h1 class="m-0">Portfolio bo'limi</h1>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="{{ route('portfolio.create') }}" class="btn btn-success">Qo'shish</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @if(!empty($portfolios))
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 10px;">#</th>
                            <th style="width: 200px;">Nomi</th>
                            <th style="width: 200px;">Kategoriyasi</th>
                            <th style="width: 300px;">Ta'rif</th>
                            <th style="width: 100px;">Holati</th>
                            <th style="width: 100px;"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($portfolios as $portfolio)
                            <tr>
                                <td style="width: 10px;">{{ $portfolio->id }}</td>
                                <td>{{ substr($portfolio->title, 0, 30) }}</td>
                                <td>
                                    @forelse($portfolio->categories as $category)
                                        <span>{{ $category->title }}, </span>
                                    @empty
                                        <p>Nothing</p>
                                    @endforelse
                                </td>
                                <td>{!! substr($portfolio->text, 0, 70) !!}</td>
                                <td>
                                    @if($portfolio->status === 1)
                                        <span class="badge badge-success">Faol</span>
                                    @else
                                        <span class="badge badge-danger">Nofaol</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="row align-items-center w-100 h-100 p-0 m-0 justify-content-between">
                                        <a href="{{ route('portfolio.show', ['portfolio' => $portfolio->id]) }}" class="badge badge-info"><i class="fa fa-eye"></i></a>
                                        <a href="{{ route('portfolio.edit', ['portfolio' => $portfolio->id]) }}" class="badge badge-warning"><i class="fa fa-pen"></i></a>
                                        <form method="post" action="{{ route('portfolio.destroy', ['portfolio' => $portfolio->id]) }}" style="margin-top: -4px;">
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
                    <p class="text-center mb-0">Hozircha hech qanday portfolio mavjud emas!</p>
                @endif
            </div>
        </div>
    </div>
@endsection
