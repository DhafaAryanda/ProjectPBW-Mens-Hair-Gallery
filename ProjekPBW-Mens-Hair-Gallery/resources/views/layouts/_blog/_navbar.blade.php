<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!--My CSS-->
<link rel="stylesheet" href="{{ URL::asset('assets/images/style.css') }}"> />

<nav class="navbar navbar-expand-lg navbar-dark fixed-top"
    style="padding-left: 6rem; background-color: #356623; padding-bottom: 4px">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('blog.home') }}">
            <img src="{{ URL::asset('assets/images/logo_mhg.png') }}" alt="" height="40" width="70" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse fw-bold" id="navbar-nav" style="padding-left: 3rem;">
            <ul class="navbar-nav">
                <li class="nav-item me-3">
                    <a class="nav-link" aria-current="page" href="#home">Home</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link" href="#hairstyle">Hairstyle</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link" href="#product">Product</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link" href={{ route('blog.rekomendasi') }}>Rekomendasi</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
