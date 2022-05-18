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
        <div class="center">
            <div class="card mb-5" style="background-color: #c4c4c4; width: 60rem; height:auto">
              <div class="row g-0">
                <div class="col-md-4" style="width: 200px">
                  <img src="{{ URL::asset('assets/images/french-crop-haircut-512.webp') }}" class="img-fluid rounded-start" alt="..." />
                </div>
                <div class="col-md-8" style="text-align: justify">
                  <div class="card-body">
                    <h5 class="card-title">French Crop</h5>
                    <p class="card-text" > Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore quaerat, odio nemo sequi reprehenderit corrupti iure! Doloribus iusto pariatur quasi minima voluptas eaque esse accusantium, repudiandae dolorem quaerat, itaque voluptatum placeat, consequatur error repellat debitis! Non voluptates, enim et reiciendis, corporis consequatur quae est tempora, odit vitae corrupti deleniti temporibus inventore error aspernatur repudiandae suscipit dolores aliquid quam quasi blanditiis. Accusamus dolor voluptatum quis? Numquam vel minima aut asperiores veritatis optio error magnam labore tempora! Voluptatum, nihil nemo. Optio quisquam, nihil molestiae, eligendi consequatur ex quis iure hic quasi, facilis natus explicabo impedit eum maiores et adipisci delectus libero ullam.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card mb-5" style="background-color: #c4c4c4; width: 60rem; height:auto">
                <div class="row g-0">
                  <div class="col-md-4" style="width: 200px">
                    <img src="{{ URL::asset('assets/images/french-crop-haircut-512.webp') }}" class="img-fluid rounded-start" alt="..." />
                  </div>
                  <div class="col-md-8" style="text-align: justify">
                    <div class="card-body">
                      <h5 class="card-title">French Crop</h5>
                      <p class="card-text" > uatur error repellat debitis! Non voluptates, enim et reiciendis, corporis conseq veritatis optio error magnam labore tempora! Voluptatum, nihil nemo. Optio quisquam, nihil molestiae, eligendi consequatur ex quis iure hic quasi, facilis natus explicabo impedit eum maiores et adipisci delectus libero ullam.</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                </div>
            </div>
            <div class="card mb-5" style="background-color: #c4c4c4; width: 60rem; height:auto">
                <div class="row g-0">
                  <div class="col-md-4" style="width: 200px">
                    <img src="{{ URL::asset('assets/images/french-crop-haircut-512.webp') }}" class="img-fluid rounded-start" alt="..." />
                  </div>
                  <div class="col-md-8" style="text-align: justify">
                    <div class="card-body">
                      <h5 class="card-title">French Crop</h5>
                      <p class="card-text" > uatur error repellat debitis! Non voluptates, enim et reiciendis, corporis conseq veritatis optio error magnam labore tempora! Voluptatum, nihil nemo. Optio quisquam, nihil molestiae, eligendi consequatur ex quis iure hic quasi, facilis natus explicabo impedit eum maiores et adipisci delectus libero ullam.</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                </div>
            </div>
            <div class="card mb-5" style="background-color: #c4c4c4; width: 60rem; height:auto">
                <div class="row g-0">
                  <div class="col-md-4" style="width: 200px">
                    <img src="{{ URL::asset('assets/images/french-crop-haircut-512.webp') }}" class="img-fluid rounded-start" alt="..." />
                  </div>
                  <div class="col-md-8" style="text-align: justify">
                    <div class="card-body">
                      <h5 class="card-title">French Crop</h5>
                      <p class="card-text" > uatur error repellat debitis! Non voluptates, enim et reiciendis, corporis conseq veritatis optio error magnam labore tempora! Voluptatum, nihil nemo. Optio quisquam, nihil molestiae, eligendi consequatur ex quis iure hic quasi, facilis natus explicabo impedit eum maiores et adipisci delectus libero ullam.</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                </div>
            </div>
            <div class="card mb-5" style="background-color: #c4c4c4; width: 60rem; height:auto">
                <div class="row g-0">
                  <div class="col-md-4" style="width: 200px">
                    <img src="{{ URL::asset('assets/images/french-crop-haircut-512.webp') }}" class="img-fluid rounded-start" alt="..." />
                  </div>
                  <div class="col-md-8" style="text-align: justify">
                    <div class="card-body">
                      <h5 class="card-title">French Crop</h5>
                      <p class="card-text" > uatur error repellat debitis! Non voluptates, enim et reiciendis, corporis conseq veritatis optio error magnam labore tempora! Voluptatum, nihil nemo. Optio quisquam, nihil molestiae, eligendi consequatur ex quis iure hic quasi, facilis natus explicabo impedit eum maiores et adipisci delectus libero ullam.</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
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
