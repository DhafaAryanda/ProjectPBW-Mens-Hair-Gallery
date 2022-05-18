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
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="padding-left: 6rem">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ URL('/home')}}">
          <img src="{{ URL::asset('assets/images/logo.png') }}" alt="" height="50" width="50" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse fw-bold" id="navbar-nav" style="padding-left: 3rem;">
          <ul class="navbar-nav">
            <li class="nav-item active me-3">
              <a class="nav-link" aria-current="page" href="{{ URL('/home')}}">Home</a>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link" href="#">Hairstyle</a>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link" href="#">Product</a>
            </li>
            <li class="nav-item me-3">
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
    .h4 {
    color: white;
    font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
    padding-top: 70px;
    font-weight: bold;
    text-align: start; 
    margin-left: 6rem
    }
    .center {
    margin-left: 300px;
    margin-right: 300px;
    }
    </style>
    <div class="container-fluid" style="height: 120px; background-image: url(assets/images/background3.jpg)">
      <?PHP
        
        echo "<h4 class='h4'>Rekomendasi</h4>";
        ?>
    </div>
    <div class="container-fluid" style="padding-bottom:2rem; padding-top: 80px; height: auto; background-color: #343434">
        <h4 style="color: white; margin-left:8rem">Banda Aceh</h4>
        <h6 style="color: white; margin-left:8rem">Nas and Sons Barber</h6>
        <div class="row g-0">
            <div class="col-sm-6 col-md-8">
                <div class="container" style="margin-left: 5rem">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true" style=" width:50rem">
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <p></p>
                        <div class="carousel-inner" style="margin-left:7rem">
                          <div class="carousel-item active">
                            <img src="{{ URL::asset('assets/images/toko3.jpg') }}" class="d-block w-50" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="{{ URL::asset('assets/images/toko2.jpg') }}" class="d-block w-50" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="{{ URL::asset('assets/images/toko3.jpg') }}" class="d-block w-50" alt="...">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next" style="margin-right: 12rem">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="container" style="background-color: rgba(210, 105, 30, 0.403); width:20rem; height:auto;">
                   <h5>Rekomendasi Barbershop</h5>
                   <div style="margin:2rem">
                       <h6>Banda Aceh</h6>
                        <a href="#" class="text-decoration-none">Nas and Sons Barber</a><br>
                        <a href="#" class="text-decoration-none">Elegant Barbershop</a><br>
                        <a href="#" class="text-decoration-none">BrocodeAceh Barbershop</a><br>
                        <a href="#" class="text-decoration-none">NBC Barber Shop</a><br>
                   </div>
                   <div style="margin: 2rem">
                       <h6>Langsa</h6>
                       <a href="#" class="text-decoration-none">Kick Barbershop</a><br>
                        <a href="#" class="text-decoration-none">FN BARBERSHOP</a><br>
                        <a href="#" class="text-decoration-none">Raden The Barber </a><br>
                        <a href="#" class="text-decoration-none">SA Marino Premium Barbershop</a><br>
                   </div>
                   <div style="margin: 2rem">
                    <h6>Lhokseumawe</h6>
                    <a href="#" class="text-decoration-none">NAZZ Barbershop</a><br>
                     <a href="#" class="text-decoration-none">Sherif Barbershop & Refleksi</a><br>
                     <a href="#" class="text-decoration-none">Raden The Barber </a><br>
                     <a href="#" class="text-decoration-none">Dyaz Barbearia</a><br>
                </div>
                </div>
            </div>
          </div>
      
    <footer class="text-center" style="background-color: #356623; color: white; padding: 10px">
      <h6>Copyright 2022 | All Rights Reserved Men Hair Gallery</h6>
    </footer>
  </body>
</html>
