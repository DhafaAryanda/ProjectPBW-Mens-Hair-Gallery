<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!--My CSS-->
<link rel="stylesheet" href="{{ URL::asset('assets/images/style.css') }}"> />

<nav class="navbar navbar-expand-lg navbar-dark fixed-top"
    style="padding-left: 6rem; background-color: #356623; padding-bottom: 4px">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ URL('/home') }}">
            <img src="{{ URL::asset('assets/images/logo_mhg.png') }}" alt="" height="40" width="70" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse fw-bold" id="navbar-nav" style="padding-left: 3rem;">
            <ul class="navbar-nav">
                <li class="nav-item active me-3">
                    <a class="nav-link" aria-current="page" href="{{ URL('/home') }}">Home</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link" href="{{ route('blog.hairstyle') }}">Hairstyle</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link" href="{{ route('blog.product') }}">Product</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

{{-- <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
       <a class="navbar-brand" href="">App name</a>
       <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
          data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarResponsive">
          <!-- Search for post:start -->
          <form class="input-group my-1" action="" method="GET">
             <input name="keyword" value="" type="search" class="form-control" placeholder="Enter title">
             <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit">
                   <i class="fas fa-search"></i>
                </button>
             </div>
          </form>
          <!-- Search for post:end -->
          <ul class="navbar-nav ml-auto">
             <!-- nav-home:start -->
             <li class="nav-item">
                <a class="nav-link" href="">
                   Home
                </a>
             </li>
             <!-- nav-home:end -->
             <!-- nav-categories:start -->
             <li class="nav-item">
                <a class="nav-link" href="">
                   Categories
                </a>
             </li>
             <!-- nav-categories:tags -->
             <li class="nav-item">
                <a class="nav-link" href="">
                   Tags
                </a>
             </li>
             <!-- nav-tags:end -->
             <!-- Auth:start -->
             <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                   Username
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                   <a class="dropdown-item" href="">
                      Dashboard
                   </a>
                   <a class="dropdown-item" href=""
                      onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                      Logout
                   </a>
                   <form id="logout-form" action="" method="POST" class="d-none">
                      <!-- csrf -->
                   </form>
                </div>
             </li>
             <!-- Auth:else -->
             <li class="nav-item">
                <a class="nav-link" href="">
                   Login
                </a>
             </li>
             <!-- Auth:end -->
             <!-- lang:start -->
             <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                   <i class="flag-icon flag-icon-id"></i>
                   <i class="flag-icon flag-icon-gb"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                   <a class="dropdown-item" href="">
                      ID
                   </a>
                   <a class="dropdown-item" href="">
                      EN
                   </a>
                </div>
             </li>
             <!-- lang:end -->
          </ul>
       </div>
    </div>
 </nav> --}}
