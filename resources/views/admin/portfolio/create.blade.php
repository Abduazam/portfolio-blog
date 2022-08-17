@extends('layouts.admin')

@section('title', 'Add')

@section('content')
    <div class="card card-primary">
        <form action="{{ route('portfolio.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row w-100 h-100 p-0 m-0">
                    <div class="col-md-6 pl-0">
                        <div class="form-group">
                            <label for="title">Loyiha nomi</label>
                            <input type="text" class="form-control" id="title" placeholder="Nomini yozing" name="title" required>
                        </div>
                    </div>
                    <div class="col-md-6 pr-0">
                        <div class="form-group" data-select2-id="45">
                            <label for="cat_id">Loyiha kategoriyasi</label>
                            <select class="select2bs4 select2-hidden-accessible" id="cat_id" name="cat_id[]" multiple="" data-placeholder="Kategoriya tanlang" style="width: 100%;" data-select2-id="23" tabindex="-1" aria-hidden="true">
                                @forelse($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                @empty
                                    <option value="1">All</option>
                                @endforelse
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row w-100 h-100 p-0 m-0">
                    <div class="col-md-6 pl-0">
                        <div class="form-group">
                            <label for="text">Loyiha haqida</label>
                            <textarea class="form-control" rows="3" placeholder="Izoh yozing" id="text" name="text" required></textarea>
                        </div>
                    </div>
                    <div class="col-md-6 pr-0">
                        <div class="form-group">
                            <label for="customFile">Loyiha rasmi</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="img">
                                <label class="custom-file-label" for="customFile"></label>
                            </div>
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
