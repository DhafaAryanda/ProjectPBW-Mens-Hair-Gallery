<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charet="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Mens-Hair-Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!--My CSS-->
    <link rel="stylesheet" href="{{ URL::asset('assets/images/style.css')}}"> />
    <link rel="stylesheet" href="{{ URL::asset('assets/styles/profil_laboran.css')}}">
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="{{ URL::asset('assets/images/logo.png') }}" alt="" height="50" width="50" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar-nav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Hairstyle</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0 d-flex justify-content-end position-absolute top-50 end-0 translate-middle-y">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" />
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>

    <style>
    .h1 {
    color: #bc7100;
    font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
    padding-top: 10rem;
    font-weight: bold;
    font-size: 1;
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
    <div class="container-fluid" style="height: 900px; background-image: url(assets/images/background3.jpg)">
        <?PHP
        
        echo "<h1 class='h1'>Mens Hair Gallery</h1>";
        ?>
      <div class="d-flex justify-content-center">
        <div class="line"></div>
      </div>
      <p class="text-center" style="color: white; padding-top: 10px">
        Dapatkan produk perawatan rambut terbaik dari Mens Hair Gallery <br />
        untuk keseharian anda. Sehingga tetap rapi dimanapun dan kapanpun
      </p>
    </div>

    <div class="container-fluid" style="padding-top: 50px; height: 900px; background-color: #343434">
      <div class="container-fluid" style="text-align: center; padding-bottom: 100px">
        <span class="fs-4 fw-bold" style="color: #ffffff">About</span>
        <span class="fs-4 fw-bold" style="color: #bc7100">Mens</span><br />
        <span class="fs-4 fw-bold" style="color: #bc7100">Hair</span>
        <span class="fs-4 fw-bold" style="color: #bc7100">Gallery</span>
      </div>
      <div class="container" style="padding-left: 150px; padding-right: 150px">
        <div class="row align-items-center">
          <div class="col-4"><img src="{{ URL::asset('assets/images/gambar1.jpeg') }}" class="rounded-3" alt="" width="200px" height="300px" /></div>
          <div class="col" style="color: #999999">
            <p>Mens Hair Gallery adalah website yang menjual berbagai jenis produk perawat rambut. Pelanggan yang ingin membeli produk akan diarahkan ke aplikasi whatsapp untuk melakukan pembelian.</p>
            <p>Selain itu, website ini juga menampilkan berbagai informasi tentang berbagai jenis potongan rambut pria. Terdapat juga kiat-kiat untuk merawat dan memanjangkan rambut.</p>
            <p>Mens Hair Gallery di buat pada tanggal 23 Maret 2022 oleh dua orang untuk memenuhi tugas matakuliah Pemrograman Berbasis Web</p>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid" style="padding-top: 50px; height: 900px; background-color: #565656">
      <div class="container-fluid" style="text-align: center; padding-bottom: 100px">
        <span class="fs-4 fw-bold" style="color: #ffffff">Hairstyle</span>
        <span class="fs-4 fw-bold" style="color: #bc7100">Mens</span><br />
        <span class="fs-4 fw-bold" style="color: #bc7100">Hair</span>
        <span class="fs-4 fw-bold" style="color: #bc7100">Gallery</span>
      </div>

      <div class="center">
        <div class="card mb-5" style="background-color: #c4c4c4; max-width: 600px">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="{{ URL::asset('assets/images/french-crop-haircut-512.webp') }}" class="img-fluid rounded-start" alt="..." />
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">French Crop</h5>
                <p class="card-text">This is a wider card with supporting text below lorem20 as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
        </div>
        <div class="card mb-5" style="background-color: #c4c4c4; max-width: 600px">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="{{ URL::asset('assets/images/mullet.jpg') }}" class="img-fluid rounded-start" alt="..." />
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">French Crop</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center" style="margin-left: 40rem">
        <a class="btn rounded-pill btn-sm" style="width: 8rem; background-color: #bc7100; color: white; text-align: center" href="#" role="button">Selengkapnya</a>
      </div>
    </div>
    <div class="container-fluid" style="padding-top: 50px; height: 900px; background-color: #343434">
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
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn" style="background-color: #bc7100; color: white">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="width: 18rem; margin-bottom: 3rem">
              <img src="{{ URL::asset('assets/images/pomade1.jpg') }}" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn" style="background-color: #bc7100; color: white">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="width: 18rem; margin-bottom: 3rem">
              <img src="{{ URL::asset('assets/images/pomade1.jpg') }}" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn" style="background-color: #bc7100; color: white">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="width: 18rem; margin-bottom: 3rem">
              <img src="{{ URL::asset('assets/images/pomade1.jpg') }}" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's conten lorem20 t.</p>
                <a href="#" class="btn" style="background-color: #bc7100; color: white">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-center" style="margin-left: 70rem">
          <a class="btn rounded-pill btn-sm" style="width: 8rem; background-color: #bc7100; color: white; text-align: center" href="#" role="button">Selengkapnya</a>
        </div>
      </div>
    </div>
    <div class="container-fluid" style="padding-top: 50px; height: 900px; background-color: #565656">
      <div class="container-fluid" style="text-align: center; padding-bottom: 100px">
        <span class="fs-4 fw-bold" style="color: #ffffff">Contact</span>
        <span class="fs-4 fw-bold" style="color: #bc7100">Mens</span><br />
        <span class="fs-4 fw-bold" style="color: #bc7100">Hair</span>
        <span class="fs-4 fw-bold" style="color: #bc7100">Gallery</span>
      </div>
    </div>
  </body>
</html>
