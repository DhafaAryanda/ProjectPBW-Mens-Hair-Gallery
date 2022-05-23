@extends('layouts.hairstyle')

@section('title')
    Home
@endsection

@section('content')
    <style>
        h1 {
            color: #bc7100;
            font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
            padding-top: 14rem;
            font-weight: bold;
            font-size: 55px;
            text-align: center;
        }

        .line {
            width: 500px;
            height: 6px;
            background-color: #999999;
        }

        .center {
            margin-left: 450px;
            margin-right: 450px;
        }

    </style>
    <div id="home" class="container-fluid"
        style="height: 850px; background-size:cover; background-repeat: no-repeat; background-image: url(assets/images/background4.png)">
        <h1>Mens Hair Gallery</h1>
        <div class="d-flex justify-content-center">
            <div class="line"></div>
        </div>
        <p class="text-center" style="color: white; padding-top: 10px">
            Tentukan jenis potongan untuk rambut anda dan dapatkan produk <br />
            perawatan rambut terbaik dari Mens Hair Gallery untuk keseharian anda. <br />
            Sehingga tetap rapi dimanapun dan kapanpun.
        </p>
    </div>

    <div id="about" class="container-fluid" style="padding-top: 50px; height: 850px; background-color: #343434">
        <div class="container-fluid" style="text-align: center; padding-bottom: 100px">
            <span class="fs-4 fw-bold" style="color: #ffffff">About</span>
            <span class="fs-4 fw-bold" style="color: #bc7100">Mens</span><br />
            <span class="fs-4 fw-bold" style="color: #bc7100">Hair</span>
            <span class="fs-4 fw-bold" style="color: #bc7100">Gallery</span>
        </div>
        <div class="container" style="padding-left: 150px; padding-right: 150px">
            <div class="row align-items-center">
                <div class="col-4"><img src="{{ URL::asset('assets/images/gambar1.jpeg') }}"
                        class="rounded-3" alt="" width="200px" height="300px" /></div>
                <div class="col" style="color: #999999">
                    <p>Mens Hair Gallery adalah website yang menjual berbagai jenis produk perawat rambut. Pelanggan yang
                        ingin membeli produk akan diarahkan ke aplikasi whatsapp untuk melakukan pembelian.</p>
                    <p>Selain itu, website ini juga menampilkan berbagai informasi tentang berbagai jenis potongan rambut
                        pria. Terdapat juga kiat-kiat untuk merawat dan memanjangkan rambut.</p>
                    <p>Mens Hair Gallery di buat pada tanggal 23 Maret 2022 oleh dua orang untuk memenuhi tugas matakuliah
                        Pemrograman Berbasis Web.</p>
                </div>
            </div>
        </div>
    </div>

    <div id="hairstyle" class="container-fluid" style="padding-top: 50px; height: 850px; background-color: #565656">
        <div class="container-fluid" style="text-align: center; padding-bottom: 40px">
            <span class="fs-4 fw-bold" style="color: #ffffff">Hairstyle</span>
            <span class="fs-4 fw-bold" style="color: #bc7100">Mens</span><br />
            <span class="fs-4 fw-bold" style="color: #bc7100">Hair</span>
            <span class="fs-4 fw-bold" style="color: #bc7100">Gallery</span>
        </div>

        <div class="row">
            <div class="col">
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
        <div class="d-flex justify-content-center" style="margin-left: 40rem">
            <a class="btn rounded-pill btn-sm"
                style="width: 8rem; background-color: #bc7100; color: white; text-align: center"
                href="{{ route('blog.hairstyle') }}" role="button">Selengkapnya</a>
        </div>
    </div>

    <div id="product" class="container-fluid" style="padding-top: 50px; height: 850px; background-color: #343434">
        <div class="container-fluid" style="text-align: center; padding-bottom: 40px">
            <span class="fs-4 fw-bold" style="color: #ffffff">Product</span>
            <span class="fs-4 fw-bold" style="color: #bc7100">Mens</span><br />
            <span class="fs-4 fw-bold" style="color: #bc7100">Hair</span>
            <span class="fs-4 fw-bold" style="color: #bc7100">Gallery</span>
        </div>

        <div class="row">
            <div class="col">
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
                                            style="background-color: darkgray; color: black;opacity:1">
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
        <div class="d-flex justify-content-center" style="margin-left: 40rem">
            <a class="btn rounded-pill btn-sm"
                style="width: 8rem; background-color: #bc7100; color: white; text-align: center"
                href="{{ route('blog.product') }}" role="button">Selengkapnya</a>
        </div>
    </div>

    <div id="contact" class="container-fluid"
        style="padding-top: 50px; height: 850px; background-size:cover; background-repeat: no-repeat; background-image: url(assets/images/background3.jpg) ">
        <div class="container-fluid" style="text-align: center; padding-bottom: 100px">
            <span class="fs-4 fw-bold" style="color: #ffffff">Contact</span>
            <span class="fs-4 fw-bold" style="color: #bc7100">Mens</span><br />
            <span class="fs-4 fw-bold" style="color: #bc7100">Hair</span>
            <span class="fs-4 fw-bold" style="color: #bc7100">Gallery</span>
        </div>

        <div class="container">
            <div class="row align-items-center" style="text-align: center">
                <div class="col">
                    <img src="{{ URL::asset('assets/images/gambar1.jpeg') }}" class="rounded-3" alt="" width="200px"
                        height="300px" />
                </div>
                <div class="col">
                    <div class="text-center" style="margin-top:5rem">
                        <p style="color: white">Punya pertanyaan atau ingin order?</p>
                        <div class="d-flex justify-content-center">
                            <a class="btn rounded-3 btn-sm "
                                style="align-items:center ;justify-content:center ;display:flex; width: 15rem; height:3rem; background-color: #bc7100; color: white; text-align: center"
                                href="#" role="button">
                                <input type="image" src="{{ URL::asset('assets/images/whatsapp.png') }}" alt=""
                                    height="20" width="20" style=" margin-right: 5px" />
                                <span class="fw-bold">Hubungi kami</span>
                            </a>
                        </div>
                        <div class="d-flex justify-content-center mt-4">
                            <a class="btn rounded-3 btn-sm "
                                style="align-items:center ;justify-content:center ;display:flex; width: 15rem; height:3rem; background-color: #bc7100; color: white; text-align: center"
                                href="#" role="button">
                                <input type="image" src="{{ URL::asset('assets/images/shopee.png') }}" alt="" height="20"
                                    width="20" style=" margin-right: 5px" />
                                <span class="fw-bold">Mens Hair Gallery</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <img src="{{ URL::asset('assets/images/gambar1.jpeg') }}" class="rounded-3" alt="" width="200px"
                        height="300px" />
                </div>

            </div>
        </div>

        <div class="container" style="margin-top: 10rem">
            <h6 style="color: white; text-align: center; font-weight:bold">Ikuti Kami</h6>
            <div class="container d-flex justify-content-center rounded-3"
                style="background-color:#bc7100; width:20rem; padding:10px">
                <a href="https://www.facebook.com"><img src="{{ URL::asset('assets/images/facebook.png') }}" alt=""
                        style=" width: 40px; margin-right:10px; margin-left:10px"></a>
                <a href="https://www.instagram.com"><img src="{{ URL::asset('assets/images/instagram.png') }}" alt=""
                        style="width: 40px; margin-right:10px; margin-left:10px"></a>
                <a href="https://www.twitter.com"><img src="{{ URL::asset('assets/images/twitter.png') }}" alt=""
                        style="width: 40px; margin-right:10px; margin-left:10px"></a>
                <a href="https://www.tiktok.com"><img src="{{ URL::asset('assets/images/tiktok.png') }}" alt=""
                        style="width: 40px; margin-right:10px; margin-left:10px"></a>
            </div>

        </div>
    </div>
    </div>
@endsection
