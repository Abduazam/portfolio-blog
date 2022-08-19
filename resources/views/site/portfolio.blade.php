@extends('layouts.front')

@section('title', 'About')

@section('content')
    <div class="container-fluid py-5" id="about">
        <div class="container px-md-5 py-3">
            <div class="about-container d-flex justify-content-center">
                <div class="col-md-7 p-0 fadeInUp">
                    <?php $i = 1; $j = 1; ?>
                    <div class="list-group d-flex flex-row border-0" id="list-tab" role="tablist">
                        @foreach($categories as $category)
                            <a class="list-group-item list-group-item-action rounded-0 border-0 @if($i === 1) active @endif text-center" id="list-{{ $category->title }}-list" data-bs-toggle="list" href="#list-{{ $category->title }}" role="tab" aria-controls="list-{{ $category->title }}">{{ $category->title }}</a>
                            <?php ++$i ?>
                        @endforeach
                    </div>
                    <div class="tab-content" id="nav-tabContent">
                        @foreach($categories as $category)
                            <div class="tab-pane py-3 fade fadeInUp show @if($j === 1) active @endif" id="list-{{ $category->title }}" role="tabpanel" aria-labelledby="list-{{ $category->title }}-list">
                                <div class="row w-100 h-100 p-0 m-0">
                                    @forelse($category->portfolio as $portfolio)
                                        <div class="col-6 ps-0 hover-color-to-bg">
                                            <a href="{{ url('portfolio', ['portfolio' => $portfolio->id]) }}" class="d-block">
                                                <img src="{{ asset('/images/' . $portfolio->img) }}" alt="{{ $portfolio->title }}" class="w-100">
                                            </a>
                                        </div>
                                    @empty
                                        <div class="col-12 ps-0 text-center">
                                            <p class="mb-0 small text-muted">There is not any project in {{ $category->title }}!</p>
                                        </div>
                                    @endforelse
                                </div>
                            </div>
                            <?php ++$j ?>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
