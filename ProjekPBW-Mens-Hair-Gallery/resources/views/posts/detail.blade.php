@extends('layouts.dashboard')

@section('title')
    Detail post
@endsection

@section('breadcrumbs')
    {{ Breadcrumbs::render('detail_post', $post) }}
@endsection

@section('content')
    <style>
        img {
            width: 10%;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

    </style>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3">
                            @if (file_exists(public_path($post->thumbnail)))
                                <!-- thumbnail:true -->
                                <img class="card-img-top" src="{{ asset($post->thumbnail) }}" alt="{{ $post->title }}"
                                    style="width: 100%; height:15vw; object-fit:cover">
                            @else
                                <!-- thumbnail:false -->
                                <svg class="img-fluid" width="100%" height="400" xmlns="http://www.w3.org/2000/svg"
                                    preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                                    <rect width="100%" height="100%" fill="#868e96"></rect>
                                    <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" fill="#dee2e6"
                                        dy=".3em" font-size="24">
                                        {{ $post->title }}
                                    </text>
                                </svg>
                            @endif
                        </div>
                        <div class="col-lg-9 pl-4">
                            <h2 class="card-title">{{ $post->title }}</h2>
                            <p class="card-text">{{ $post->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <a href="{{ route('posts.index') }}" class="btn btn-primary mx-1 mt-4" role="button">
                    Back
                </a>
            </div>
        </div>
    @endsection
