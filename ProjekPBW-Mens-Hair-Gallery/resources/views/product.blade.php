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
    .h2 {
    color: #bc7100;
    font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
    padding-top: 4rem;
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
    <div class="container-fluid" style="height: 200px; background-image: url(assets/images/background3.jpg)">
        <?PHP
        
        echo "<h2 class='h2'>Mens Hair Gallery</h2>";
        ?>
    </div>
  </body>
</html>
