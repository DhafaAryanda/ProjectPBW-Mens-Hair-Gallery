@extends('layouts.hairstyle')

@section('title')
    Product
@endsection

@section('content')
    <div class="container-fluid" style="height: 75px; background-image: url(assets/images/background4.png);">
        <h3 class="my-3 text-white" style="padding: 5px 170px;">
            Product
        </h3>
    </div>


    <div class="container" style=" background-color: #343434">
        <div class="row">
            <div class="col pt-5 pb-4">
                @forelse ($products as $product)
                    <div class="card mb-4 mx-auto" style="width: 60rem;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3">
                                    @if (file_exists(public_path($product->thumbnail)))
                                        <img class="card-img-top" src="{{ asset($product->thumbnail) }}"
                                            alt="{{ $product->title }}"
                                            style="width: 100%; height:15vw; object-fit:cover">
                                    @else
                                        <img class="img-fluid rounded" src="http://placehold.it/750x300"
                                            alt="{{ $product->title }}">
                                    @endif
                                </div>
                                <div class="col-lg-9 pl-4">
                                    <h5 class="card-title">{{ $product->title }}</h2>
                                        <p class="card-text">{{ $product->description }}</p>
                                        <p class="btn disabled"
                                            style="background-color: darkgrey; color: black;opacity:1">
                                            @currency($product->price)
                                        </p>
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
