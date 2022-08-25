@extends('layouts.admin')

@section('title', 'Post')

@section('content')
    <div class="col-12 ">
        <div class="card">
            <div class="content-header border-bottom">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <h1 class="m-0">Posts section</h1>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="{{ route('post.create') }}" class="btn btn-success">Add</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @if(!empty($posts))
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 10px;">#</th>
                            <th style="width: 200px;">Title</th>
                            <th style="width: 500px;">Text</th>
                            <th style="width: 100px;">Status</th>
                            <th style="width: 100px;"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td style="width: 10px;">{{ $post->id }}</td>
                                <td>{{ substr($post->title, 0, 30) }}</td>
                                <td>{!! substr(strip_tags($post->text), 0, 70); !!}</td>
                                <td>
                                    @if($post->status === 1)
                                        <span class="badge badge-success">Active</span>
                                    @else
                                        <span class="badge badge-danger">Inactive</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="row align-items-center w-100 h-100 p-0 m-0 justify-content-between">
                                        <a href="{{ route('post.show', ['post' => $post->id]) }}" class="badge badge-info"><i class="fa fa-eye"></i></a>
                                        <a href="{{ route('post.edit', ['post' => $post->id]) }}" class="badge badge-warning"><i class="fa fa-pen"></i></a>
                                        <form method="post" action="{{ route('post.destroy', ['post' => $post->id]) }}" style="margin-top: -4px;">
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
                    <p class="text-center mb-0">Hozircha hech qanday postlar mavjud emas!</p>
                @endif
            </div>
        </div>
    </div>
@endsection
