@extends('layouts.hairstyle')

@section('title')
    Product
@endsection

@section('content')
    <div class="container-fluid" style="height: 75px; background-image: url(assets/images/background3.jpg);">
        <h3 class="my-3 text-white" style="padding: 5px 170px;">
            Product
        </h3>
    </div>

    <div class="container" style=" background-color: #343434">
        <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3">
            <div class="col pt-5 pb-4">
                @forelse ($products as $product)
                    <div class="card text-center" style="width: 18rem; margin-bottom: 80px;">
                        @if (file_exists(public_path($product->thumbnail)))
                            <img class="card-img-top" src="{{ asset($product->thumbnail) }}"
                                alt="{{ $product->title }}" style="width: 100%; height:15vw; object-fit:cover">
                        @else
                            <img class="img-fluid rounded" src="http://placehold.it/750x300" alt="{{ $product->title }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->title }}</h2>
                                <p class="card-text">{{ $product->description }}</p>
                                <p class="btn disabled" style="background-color: #bc7100; color: white;opacity:1">
                                    @currency($product->price)
                                </p>
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
