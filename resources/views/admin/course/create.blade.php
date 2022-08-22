@extends('layouts.admin')

@section('title', 'Add')

@section('content')
    <div class="card card-primary">
        <form action="{{ route('course.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row w-100 h-100 p-0 m-0">
                    <div class="col-md-6 pl-0">
                        <div class="form-group">
                            <label for="title">Kurs nomi</label>
                            <input type="text" class="form-control" id="title" placeholder="Nomini yozing" name="title" required>
                        </div>
                    </div>
                    <div class="col-md-6 pr-0">
                        <div class="form-group">
                            <label for="customFile">Kurs rasmi</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="img">
                                <label class="custom-file-label" for="customFile"></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="text">Kurs matni</label>
                    <textarea class="form-control course-textarea" id="text" name="text" required></textarea>
                </div>
                <div class="form-group">
                    <label for="link">Kurs linki</label>
                    <input type="text" class="form-control" id="link" placeholder="Linkini yozing" name="link" required>
                </div>
            </div>
            <div class="card-footer text-right">
                <button type="submit" class="btn btn-success">Saqlash</button>
            </div>
        </form>
    </div>
@endsection
