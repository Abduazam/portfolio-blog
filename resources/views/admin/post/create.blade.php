@extends('layouts.admin')

@section('title', 'Add')

@section('content')
    <div class="card card-primary">
        <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Post mavzusi</label>
                    <input type="text" class="form-control" id="title" placeholder="Mavzuni yozing" name="title" required>
                </div>
                <div class="form-group">
                    <label for="text">Post matni</label>
                    <textarea class="form-control" rows="3" placeholder="Matnni yozing" id="text" name="text" required></textarea>
                </div>
                <div class="form-group">
                    <label for="customFile">Post rasmi</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile" name="img">
                        <label class="custom-file-label" for="customFile"></label>
                    </div>
                </div>
            </div>

            <div class="card-footer text-right">
                <button type="submit" class="btn btn-success">Saqlash</button>
            </div>
        </form>
    </div>
@endsection
