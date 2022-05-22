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
        <div class="container-fluid" style="text-align: center; padding-bottom: 100px">
            <span class="fs-4 fw-bold" style="color: #ffffff">Hairstyle</span>
            <span class="fs-4 fw-bold" style="color: #bc7100">Mens</span><br />
            <span class="fs-4 fw-bold" style="color: #bc7100">Hair</span>
            <span class="fs-4 fw-bold" style="color: #bc7100">Gallery</span>
        </div>

        {{-- <div class="center">
            <div class="card mb-5" style="background-color: #c4c4c4; max-width: 600px">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ URL::asset('assets/images/french-crop-haircut-512.webp') }}"
                            class="img-fluid rounded-start" alt="..." />
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">French Crop</h5>
                            <p class="card-text">This is a wider card with supporting text below lorem20 as a natural
                                lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-5" style="background-color: #c4c4c4; max-width: 600px">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ URL::asset('assets/images/mullet.jpg') }}" class="img-fluid rounded-start"
                            alt="..." />
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">French Crop</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in
                                to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="d-flex justify-content-center" style="margin-left: 40rem">
            <a class="btn rounded-pill btn-sm"
                style="width: 8rem; background-color: #bc7100; color: white; text-align: center"
                href="{{ route('blog.hairstyle') }}" role="button">Selengkapnya</a>
        </div>
    </div>

    <div id="product" class="container-fluid" style="padding-top: 50px; height: 850px; background-color: #343434">
        <div class="container-fluid" style="text-align: center; padding-bottom: 100px">
            <span class="fs-4 fw-bold" style="color: #ffffff">Product</span>
            <span class="fs-4 fw-bold" style="color: #bc7100">Mens</span><br />
            <span class="fs-4 fw-bold" style="color: #bc7100">Hair</span>
            <span class="fs-4 fw-bold" style="color: #bc7100">Gallery</span>
        </div>
        <div class="container">
            <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3">
                <div class="col">
                    <div class="card" style="width: 18rem; margin-bottom: 3rem">
                        <img src="{{ URL::asset('assets/images/pomade1.jpg') }}" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                            <a href="#" class="btn" style="background-color: #bc7100; color: white">Go
                                somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem; margin-bottom: 3rem">
                        <img src="{{ URL::asset('assets/images/pomade1.jpg') }}" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                            <a href="#" class="btn" style="background-color: #bc7100; color: white">Go
                                somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem; margin-bottom: 3rem">
                        <img src="{{ URL::asset('assets/images/pomade1.jpg') }}" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                            <a href="#" class="btn" style="background-color: #bc7100; color: white">Go
                                somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem; margin-bottom: 3rem">
                        <img src="{{ URL::asset('assets/images/pomade1.jpg') }}" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's conten lorem20 t.</p>
                            <a href="#" class="btn" style="background-color: #bc7100; color: white">Go
                                somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center" style="margin-left: 70rem">
                <a class="btn rounded-pill btn-sm"
                    style="width: 8rem; background-color: #bc7100; color: white; text-align: center"
                    href="{{ route('blog.product') }}" role="button">Selengkapnya</a>
            </div>
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
                                <input type="image" src="{{ URL::asset('assets/images/logo.png') }}" alt="" height="20"
                                    width="20" style=" margin-right: 5px" />
                                <span class="fw-bold">Hubungi kami</span>
                            </a>
                        </div>
                        <div class="d-flex justify-content-center mt-4">
                            <a class="btn rounded-3 btn-sm "
                                style="align-items:center ;justify-content:center ;display:flex; width: 15rem; height:3rem; background-color: #bc7100; color: white; text-align: center"
                                href="#" role="button">
                                <input type="image" src="{{ URL::asset('assets/images/logo.png') }}" alt="" height="20"
                                    width="20" style=" margin-right: 5px" />
                                <span class="fw-bold">Hubungi kami</span>
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
