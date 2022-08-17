@extends('layouts.admin')

@section('title', 'Edit')

@section('content')
    <div class="card card-primary">
        <form action="{{ route('category.update', ['category' => $category->id]) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Kategoriya nomi</label>
                    <input type="text" class="form-control" id="title" placeholder="Nomini yozing" name="title" value="{{ $category->title }}" required>
                </div>
            </div>

            <div class="card-footer text-right">
                <button type="submit" class="btn btn-success">Saqlash</button>
            </div>
        </form>
    </div>
@endsection
