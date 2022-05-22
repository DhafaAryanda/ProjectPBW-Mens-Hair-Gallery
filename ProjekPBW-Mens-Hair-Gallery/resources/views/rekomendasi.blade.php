<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charet="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Mens-Hair-Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!--My CSS-->
    <link rel="stylesheet" href="{{ URL::asset('assets/images/style.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/styles/profil_laboran.css')}}">
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow" style="background:#356623; padding-left:6rem;">
      <div class="container-fluid" style="background-color:#356623;>
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
              <a class="nav-link" href="{{ URL('/hairstyle')}}">Hairstyle</a>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link" href="{{ URL('/product')}}">Product</a>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link" href="#">Rekomendasi</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0 d-flex justify-content-end position-absolute top-50 end-0 translate-middle-y" style="margin-right:6rem">
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
                        <a href="https://www.google.com/search?q=barbershop%20di%20banda%20aceh&rlz=1C1YKLZ_idID945ID945&sxsrf=ALiCzsYAsfLxjadqqTTuqIpriNprLghQ_Q:1653199436374&ei=RNKJYsbsH8XXz7sP67CSqAw&oq=barbe&gs_lcp=Cgdnd3Mtd2l6EAMYATIECCMQJzIGCCMQJxATMgQIIxAnMg0IABCxAxCDARDJAxBDMgUIABCSAzIKCAAQsQMQgwEQQzIHCAAQsQMQQzIKCAAQsQMQgwEQQzIHCAAQsQMQQzIECAAQQzoHCCMQsAMQJzoHCAAQRxCwAzoHCAAQsAMQQzoKCAAQ5AIQsAMYAToMCC4QyAMQsAMQQxgCOg8ILhDUAhDIAxCwAxBDGAI6BQgAEJECOggILhCABBCxAzoICAAQsQMQgwE6DgguEIAEELEDEMcBEKMCOgoILhDHARCjAhBDOgoIABCABBCHAhAUOg0IABCABBCHAhCxAxAUOgcILhCxAxBDSgQIQRgASgQIRhgBUJsCWP0HYNYPaAJwAHgAgAG2AYgBywWSAQMwLjWYAQCgAQHIARPAAQHaAQYIARABGAnaAQYIAhABGAg&sclient=gws-wiz&tbs=lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u2!2m2!2m1!1e1!2m1!1e2!2m1!1e3!3sIAE,lf:1,lf_ui:14&tbm=lcl&rflfq=1&num=10&rldimm=10508655742980344789&lqi=ChhiYXJiZXJzaG9wIGRpIGJhbmRhIGFjZWhIiLOExaetgIAIWiwQABgAGAIYAyIYYmFyYmVyc2hvcCBkaSBiYW5kYSBhY2VoKgQIAxAAMgJpZJIBC2JhcmJlcl9zaG9wqgEVEAEqESINYmFyYmVyc2hvcCBkaSgm&ved=2ahUKEwjlgZfpt_L3AhUC7HMBHYCICzgQvS56BAgGEAE&sa=X&rlst=f#" class="text-decoration-none">Nas and Sons Barber</a><br>
                        <a href="https://www.google.com/search?q=barbershop%20di%20banda%20aceh&rlz=1C1YKLZ_idID945ID945&tbm=lcl&sxsrf=ALiCzsa6ho0v09ZDEZYCJR4oeKL9AXhepA%3A1653199513492&ei=mdKJYty3HYvA3LUPsr2t6Ao&oq=barbershop+di+banda+aceh&gs_l=psy-ab.3...0.0.0.125460.0.0.0.0.0.0.0.0..0.0....0...1c..64.psy-ab..0.0.0....0.TyJpCqq25-g&tbs=lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u2!2m2!2m1!1e1!2m1!1e2!2m1!1e3!3sIAE,lf:1,lf_ui:14&rlst=f#" class="text-decoration-none">Elegant Barbershop</a><br>
                        <a href="https://youtu.be/OQBMHTznwC0" class="text-decoration-none">BrocodeAceh Barbershop</a><br>
                        <a href="https://www.google.com/search?q=barbershop%20di%20banda%20aceh&rlz=1C1YKLZ_idID945ID945&tbm=lcl&sxsrf=ALiCzsa6ho0v09ZDEZYCJR4oeKL9AXhepA%3A1653199513492&ei=mdKJYty3HYvA3LUPsr2t6Ao&oq=barbershop+di+banda+aceh&gs_l=psy-ab.3...0.0.0.125460.0.0.0.0.0.0.0.0..0.0....0...1c..64.psy-ab..0.0.0....0.TyJpCqq25-g&tbs=lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u2!2m2!2m1!1e1!2m1!1e2!2m1!1e3!3sIAE,lf:1,lf_ui:14&rlst=f#" class="text-decoration-none">NBC Barber Shop</a><br>
                   </div>
                   <div style="margin: 2rem">
                       <h6>Langsa</h6>
                       <a href="https://kick-barbershop.business.site/?utm_source=gmb&utm_medium=referral" class="text-decoration-none">Kick Barbershop</a><br>
                        <a href="https://fn-barber-co.business.site/?utm_source=gmb&utm_medium=referral" class="text-decoration-none">FN BARBERSHOP</a><br>
                        <a href="https://www.google.com/search?q=barbershop+di+langsa&rlz=1C1YKLZ_idID945ID945&tbm=lcl&sxsrf=ALiCzsYT9zjzlQDK_wLl3CPNlfqjhtOOwA%3A1653199696866&ei=UNOJYsTENM6dseMPjpyJmAM&oq=barbershop+di+langsa&gs_l=psy-ab.3..35i39k1.44039.44684.0.44863.6.6.0.0.0.0.136.374.0j3.3.0....0...1c.1.64.psy-ab..3.3.373....0.WnsbhM5DArY#" class="text-decoration-none">Raden The Barber </a><br>
                        <a href="https://www.google.com/search?q=barbershop+di+langsa&rlz=1C1YKLZ_idID945ID945&tbm=lcl&sxsrf=ALiCzsYT9zjzlQDK_wLl3CPNlfqjhtOOwA%3A1653199696866&ei=UNOJYsTENM6dseMPjpyJmAM&oq=barbershop+di+langsa&gs_l=psy-ab.3..35i39k1.44039.44684.0.44863.6.6.0.0.0.0.136.374.0j3.3.0....0...1c.1.64.psy-ab..3.3.373....0.WnsbhM5DArY#" class="text-decoration-none">SA Marino Premium Barbershop</a><br>
                   </div>
                   <div style="margin: 2rem">
                    <h6>Lhokseumawe</h6>
                    <a href="https://www.google.com/search?q=barbershop+di+lhokseumawe&rlz=1C1YKLZ_idID945ID945&tbm=lcl&sxsrf=ALiCzsZce6nd3_bB8TTN571vUHQ35AEXbA%3A1653199742315&ei=ftOJYrrwEsCUseMPg4aPmAM&oq=barbershop+di+lh&gs_l=psy-ab.3.0.35i39k1.90134.90650.0.91428.2.2.0.0.0.0.168.295.0j2.2.0....0...1c.1.64.psy-ab..0.2.295...0i203k1j0i512k1.0.8AVzOfODbOs#" class="text-decoration-none">NAZZ Barbershop</a><br>
                     <a href="https://sherifbarbershop.business.site/" class="text-decoration-none">Sherif Barbershop & Refleksi</a><br>
                     <a href="https://www.google.com/search?q=barbershop+di+lhokseumawe&rlz=1C1YKLZ_idID945ID945&tbm=lcl&sxsrf=ALiCzsZce6nd3_bB8TTN571vUHQ35AEXbA%3A1653199742315&ei=ftOJYrrwEsCUseMPg4aPmAM&oq=barbershop+di+lh&gs_l=psy-ab.3.0.35i39k1.90134.90650.0.91428.2.2.0.0.0.0.168.295.0j2.2.0....0...1c.1.64.psy-ab..0.2.295...0i203k1j0i512k1.0.8AVzOfODbOs#" class="text-decoration-none">Raden The Barber </a><br>
                     <a href="https://www.google.com/search?q=barbershop+di+lhokseumawe&rlz=1C1YKLZ_idID945ID945&tbm=lcl&sxsrf=ALiCzsZce6nd3_bB8TTN571vUHQ35AEXbA%3A1653199742315&ei=ftOJYrrwEsCUseMPg4aPmAM&oq=barbershop+di+lh&gs_l=psy-ab.3.0.35i39k1.90134.90650.0.91428.2.2.0.0.0.0.168.295.0j2.2.0....0...1c.1.64.psy-ab..0.2.295...0i203k1j0i512k1.0.8AVzOfODbOs#" class="text-decoration-none">Dyaz Barbearia</a><br>
                </div>
                </div>
            </div>
          </div>

          {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora consequuntur pariatur, itaque iusto perspiciatis, dolor distinctio accusantium, enim illo sit recusandae laboriosam veritatis beatae voluptatum deserunt? Voluptate rerum vel consequuntur maiores eos vitae ullam? Reiciendis corrupti vel voluptas architecto mollitia quo illo assumenda odit. Cum cumque, in impedit distinctio voluptatibus explicabo a sapiente est esse eos numquam ipsum perspiciatis enim itaque tenetur labore eaque dignissimos ex repellendus dolorum error harum nemo ab. Facere totam harum id, debitis amet omnis ullam saepe, voluptates nostrum tempore quaerat repellendus at. Nobis, dignissimos fugiat. Aspernatur iure iste velit similique earum nostrum ex officiis molestias.</p> --}}
          {{-- Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit rem et quod, maxime quo quibusdam mollitia alias enim quasi ut, quisquam est, voluptas quae sunt expedita cupiditate. Et perspiciatis excepturi reiciendis voluptas quam porro id nostrum vitae fugit magnam, repellendus adipisci sed dolorum modi nam sunt veniam dolor ipsum exercitationem illo at dignissimos? Placeat odit magnam suscipit incidunt pariatur! Sit voluptas autem dignissimos, deleniti doloribus, est quia accusamus repellat voluptate fugit aliquid facere assumenda nisi veritatis at cupiditate neque exercitationem. Nulla placeat consequuntur, explicabo eius adipisci commodi animi nesciunt vero quia perspiciatis qui. Quis incidunt iusto accusamus iure odit. Cumque impedit quibusdam facere eius eos iusto quod ipsum enim vel. Molestias aperiam unde modi iure id esse illo necessitatibus suscipit veritatis repellendus totam provident porro, repellat nulla earum voluptas quam voluptate recusandae sapiente ducimus natus ab quo deserunt officiis! Cumque reprehenderit earum est iure? Illo ducimus fugit in nesciunt aspernatur ex assumenda amet quia praesentium aliquid dignissimos ut, nihil repudiandae facere facilis iste natus omnis? Nesciunt consequuntur quod eveniet, necessitatibus corrupti modi distinctio, iste reiciendis animi dolore dignissimos dolorum nobis ea pariatur iusto perferendis ipsa earum doloremque deleniti soluta illum aperiam? Suscipit, quos esse doloribus repellendus quasi tenetur maxime minima, at corporis quisquam repellat accusamus velit soluta fuga reiciendis! Quidem sed ipsam nostrum impedit quos accusantium debitis explicabo commodi numquam sequi, ullam ducimus, repellendus dolore autem aspernatur perferendis officia obcaecati distinctio? Ut nihil, praesentium atque possimus animi, veniam dignissimos mollitia culpa harum distinctio voluptatum aperiam velit ea non dicta amet.
             --}}
             {{-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi similique quod hic aliquid assumenda? Reiciendis, numquam facilis adipisci rerum cum obcaecati cupiditate corporis tempore non. Suscipit, autem corrupti? Dolore sit optio, animi totam dolor quasi cum alias repellendus ipsam blanditiis veritatis quae labore deleniti repudiandae a. Distinctio est eligendi commodi harum laboriosam, voluptatem, nemo error dolores sequi voluptates id fugit esse omnis in quia! Dolor sunt architecto illum expedita necessitatibus vitae ipsam, accusamus adipisci obcaecati asperiores cupiditate rerum eaque repudiandae tempora a ullam harum quibusdam laudantium recusandae laborum odio non quisquam quasi. Mollitia ipsa recusandae, nulla aperiam tempore pariatur beatae quas sunt iste praesentium dignissimos unde tempora architecto ipsam quod vero vitae expedita id voluptate laudantium et. Cumque sint totam aut sunt error consequatur, illum modi! Temporibus ratione vero est quae aperiam exercitationem delectus explicabo quisquam impedit nesciunt animi, in ducimus sunt sequi id voluptatibus incidunt earum repudiandae maiores suscipit quis? Ab iure magnam quasi optio soluta, maiores sequi repellat dolorum, quis expedita, sunt ipsa mollitia. Modi aperiam laborum earum perspiciatis id adipisci eos harum, necessitatibus at. Unde, expedita modi minima maxime magnam doloribus. Sunt adipisci dicta esse corrupti quis, sed voluptate aliquid nihil ratione id assumenda blanditiis voluptatibus ad tenetur consequuntur eveniet sint? Iste explicabo expedita numquam reprehenderit facere non amet tempore aperiam itaque maxime! Hic repellat ipsum explicabo deleniti, temporibus autem earum quasi recusandae eos eum nisi? Magni rerum saepe rem, tempore ea quis quasi quas id earum. Explicabo deserunt commodi ipsa harum sunt doloribus voluptatibus officiis quo autem quas facere vitae odio ipsum voluptates qui consectetur, ad rerum quidem aut beatae. Totam, fuga ad? Possimus tempore a impedit, totam, laboriosam cumque assumenda facere tempora maxime asperiores reprehenderit nulla mollitia rem, ipsum nobis natus commodi porro voluptatibus reiciendis ea! Iste delectus soluta consequatur libero quia quae quam quos.
               --}}
    <footer class="text-center" style="background-color: #356623; color: white; padding: 10px">
      <h6>Copyright 2022 | All Rights Reserved Men Hair Gallery</h6>
    </footer>
  </body>
</html>
