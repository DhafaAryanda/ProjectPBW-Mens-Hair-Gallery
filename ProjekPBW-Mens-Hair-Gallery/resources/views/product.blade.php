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
    margin-left: 450px;
    margin-right: 450px;
    }
    </style>
    <div class="container-fluid" style="height: 120px; background-image: url(assets/images/background3.jpg)">
      <?PHP
        
        echo "<h4 class='h4'>Product</h4>";
        ?>
    </div>
    <div class="container-fluid" style="padding-top: 80px; height: auto; background-color: #343434">
      <div class="container">
        <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3">
          <div class="col">
            <div class="card" style="width: 18rem; margin-bottom: 80px">
              <img src="{{ URL::asset('assets/images/pomade1.jpg') }}" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn" style="background-color: #bc7100; color: white">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="width: 18rem; margin-bottom: 80px">
              <img src="{{ URL::asset('assets/images/pomade1.jpg') }}" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn" style="background-color: #bc7100; color: white">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="width: 18rem; margin-bottom: 80px">
              <img src="{{ URL::asset('assets/images/pomade1.jpg') }}" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn" style="background-color: #bc7100; color: white">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="width: 18rem; margin-bottom: 80px">
              <img src="{{ URL::asset('assets/images/pomade1.jpg') }}" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's conten lorem20 t.</p>
                <a href="#" class="btn" style="background-color: #bc7100; color: white">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3">
          <div class="col">
            <div class="card" style="width: 18rem; margin-bottom: 80px">
              <img src="{{ URL::asset('assets/images/pomade1.jpg') }}" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn" style="background-color: #bc7100; color: white">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="width: 18rem; margin-bottom: 80px">
              <img src="{{ URL::asset('assets/images/pomade1.jpg') }}" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn" style="background-color: #bc7100; color: white">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="width: 18rem; margin-bottom: 80px">
              <img src="{{ URL::asset('assets/images/pomade1.jpg') }}" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn" style="background-color: #bc7100; color: white">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="width: 18rem; margin-bottom: 80px">
              <img src="{{ URL::asset('assets/images/pomade1.jpg') }}" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's conten lorem20 t.</p>
                <a href="#" class="btn" style="background-color: #bc7100; color: white">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="text-center" style="background-color: #356623; color: white; padding: 10px">
      <h6>Copyright 2022 | All Rights Reserved Men Hair Gallery</h6>
    </footer>
  </body>
</html>
