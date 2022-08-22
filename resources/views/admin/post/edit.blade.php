@extends('layouts.admin')

@section('title', 'Edit')

@section('content')
    <div class="card card-primary">
        <form action="{{ route('post.update', ['post' => $post->id]) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="card-body">
                <div class="row w-100 h-100 p-0 m-0">
                    <div class="col-md-6 pl-0">
                        <div class="form-group">
                            <label for="title">Post mavzusi</label>
                            <input type="text" class="form-control" id="title" placeholder="Mavzuni yozing" name="title" required value="{{ $post->title }}">
                        </div>
                    </div>
                    <div class="col-md-6 pr-0">
                        <div class="form-group">
                            <label for="customFile">Post rasmi</label>
                            <div class="row w-100 h-100 p-0 m-0">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile" name="img">
                                    <label class="custom-file-label" for="customFile"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row w-100 h-100 p-0 m-0">
                    <div class="col-md-6 pl-0">
                        <div class="form-group">
                            <label for="text">Post matni</label>
                            <textarea class="form-control" id="text" name="text" required>{{ $post->text }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-6 pr-0">
                        <div class="form-group">
                            <label for="text">Post hozirgi rasmi</label>
                            @if($post->img)
                                <img src="{{ asset('/images/' . $post->img) }}" alt="" class="w-100 d-block">
                            @else
                                <span class="badge badge-secondary">Rasm mavjud emas</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-footer text-right">
                <button type="submit" class="btn btn-success">Saqlash</button>
            </div>
        </form>
    </div>
@endsection
