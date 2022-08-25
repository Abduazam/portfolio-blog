@extends('layouts.admin')

@section('title', 'Category')

@section('content')
    <div class="col-12 ">
        <div class="card">
            <div class="content-header border-bottom">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <h1 class="m-0">Categories section</h1>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="{{ route('category.create') }}" class="btn btn-success">Add</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @if(!empty($categories))
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 10px;">#</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th style="width: 70px;"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td style="width: 10px;">{{ $category->id }}</td>
                                <td>{{ $category->title }}</td>
                                <td>
                                    @if($category->status === 1)
                                        <span class="badge badge-success">Active</span>
                                    @else
                                        <span class="badge badge-danger">Inactive</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="row align-items-center w-100 h-100 p-0 m-0 justify-content-between">
                                        <a href="{{ route('category.edit', ['category' => $category->id]) }}" class="badge badge-warning"><i class="fa fa-pen"></i></a>
                                        <form method="post" action="{{ route('category.destroy', ['category' => $category->id]) }}" style="margin-top: -4px;">
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
                    <p class="text-center mb-0">There is not any category yet!</p>
                @endif
            </div>
        </div>
    </div>
@endsection
