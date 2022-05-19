@extends('layouts.hairstyle')

@section('title')
    Hairstyle
@endsection

@section('content')
    <div class="container-fluid" style="height: 75px; background-image: url(assets/images/background3.jpg);">
        <h3 class="my-3 text-white" style="padding: 5px 170px;">
            Hairstyle
        </h3>
    </div>

    <div class="container" style=" background-color: #343434">
        <div class="row">
            <div class="col pt-5 pb-4">
                @forelse ($posts as $post)
                    <div class="card mb-4 mx-auto" style="width: 60rem;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3">
                                    @if (file_exists(public_path($post->thumbnail)))
                                        <img class="card-img-top" src="{{ asset($post->thumbnail) }}"
                                            alt="{{ $post->title }}" style="width: 100%; height:15vw; object-fit:cover">
                                    @else
                                        <img class="img-fluid rounded" src="http://placehold.it/750x300"
                                            alt="{{ $post->title }}">
                                    @endif
                                </div>
                                <div class="col-lg-9 pl-4">
                                    <h2 class="card-title">{{ $post->title }}</h2>
                                    <p class="card-text">{{ $post->description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <h3 class="text-center text-light">
                        No data posts
                    </h3>
                @endforelse
            </div>
        </div>
    </div>
@endsection
