@extends('layouts.dashboard')

@section('title')
    Detail product
@endsection

@section('breadcrumbs')
    {{ Breadcrumbs::render('detail_product', $product) }}
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

    <div class="col">
        <div class="card text-center mx-auto" style="width: 18rem; margin-bottom: 80px;">
            @if (file_exists(public_path($product->thumbnail)))
                <img class="card-img-top" src="{{ asset($product->thumbnail) }}" alt="{{ $product->title }}"
                    style="width: 100%; height:15vw; object-fit:cover">
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
        <div class="d-flex justify-content-end">
            <a href="{{ route('products.index') }}" class="btn btn-primary mx-1 mt-4" role="button">
                Back
            </a>
        </div>
    </div>
@endsection
