@extends('layouts.hairstyle')

@section('title')
    Rekomendasi
@endsection

@section('content')
    <div class="container-fluid" style="height: 75px; background-image: url(assets/images/background4.png);">
        <h3 class="my-3 text-white" style="padding: 5px 170px;">
            Rekomendasi
        </h3>
    </div>
    <div class="container-fluid" style="padding-bottom:2rem; padding-top: 80px; height: auto; background-color: #343434">
        <h4 style="color: white; margin-left:8rem">Banda Aceh</h4>
        <h6 style="color: white; margin-left:8rem">Nas and Sons Barber</h6>
        <div class="row g-0">
            <div class="col-sm-6 col-md-8">
                <div class="container" style="margin-left: 5rem">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true" style=" width:50rem">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                        </div>
                        <p></p>
                        <div class="carousel-inner" style="margin-left:7rem">
                            <div class="carousel-item active">
                                <img src="{{ URL::asset('assets/images/barber1.jpeg') }}" class="d-block w-50"
                                    alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ URL::asset('assets/images/barber2.jpeg') }}" class="d-block w-50"
                                    alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next" style="margin-right: 12rem">
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
                        <a href="https://www.google.com/search?q=barbershop%20di%20banda%20aceh&rlz=1C1YKLZ_idID945ID945&sxsrf=ALiCzsYAsfLxjadqqTTuqIpriNprLghQ_Q:1653199436374&ei=RNKJYsbsH8XXz7sP67CSqAw&oq=barbe&gs_lcp=Cgdnd3Mtd2l6EAMYATIECCMQJzIGCCMQJxATMgQIIxAnMg0IABCxAxCDARDJAxBDMgUIABCSAzIKCAAQsQMQgwEQQzIHCAAQsQMQQzIKCAAQsQMQgwEQQzIHCAAQsQMQQzIECAAQQzoHCCMQsAMQJzoHCAAQRxCwAzoHCAAQsAMQQzoKCAAQ5AIQsAMYAToMCC4QyAMQsAMQQxgCOg8ILhDUAhDIAxCwAxBDGAI6BQgAEJECOggILhCABBCxAzoICAAQsQMQgwE6DgguEIAEELEDEMcBEKMCOgoILhDHARCjAhBDOgoIABCABBCHAhAUOg0IABCABBCHAhCxAxAUOgcILhCxAxBDSgQIQRgASgQIRhgBUJsCWP0HYNYPaAJwAHgAgAG2AYgBywWSAQMwLjWYAQCgAQHIARPAAQHaAQYIARABGAnaAQYIAhABGAg&sclient=gws-wiz&tbs=lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u2!2m2!2m1!1e1!2m1!1e2!2m1!1e3!3sIAE,lf:1,lf_ui:14&tbm=lcl&rflfq=1&num=10&rldimm=10508655742980344789&lqi=ChhiYXJiZXJzaG9wIGRpIGJhbmRhIGFjZWhIiLOExaetgIAIWiwQABgAGAIYAyIYYmFyYmVyc2hvcCBkaSBiYW5kYSBhY2VoKgQIAxAAMgJpZJIBC2JhcmJlcl9zaG9wqgEVEAEqESINYmFyYmVyc2hvcCBkaSgm&ved=2ahUKEwjlgZfpt_L3AhUC7HMBHYCICzgQvS56BAgGEAE&sa=X&rlst=f#"
                            class="text-decoration-none">Nas and Sons Barber</a><br>
                        <a href="https://www.google.com/search?q=barbershop%20di%20banda%20aceh&rlz=1C1YKLZ_idID945ID945&tbm=lcl&sxsrf=ALiCzsa6ho0v09ZDEZYCJR4oeKL9AXhepA%3A1653199513492&ei=mdKJYty3HYvA3LUPsr2t6Ao&oq=barbershop+di+banda+aceh&gs_l=psy-ab.3...0.0.0.125460.0.0.0.0.0.0.0.0..0.0....0...1c..64.psy-ab..0.0.0....0.TyJpCqq25-g&tbs=lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u2!2m2!2m1!1e1!2m1!1e2!2m1!1e3!3sIAE,lf:1,lf_ui:14&rlst=f#"
                            class="text-decoration-none">Elegant Barbershop</a><br>
                        <a href="https://youtu.be/OQBMHTznwC0" class="text-decoration-none">BrocodeAceh Barbershop</a><br>
                        <a href="https://www.google.com/search?q=barbershop%20di%20banda%20aceh&rlz=1C1YKLZ_idID945ID945&tbm=lcl&sxsrf=ALiCzsa6ho0v09ZDEZYCJR4oeKL9AXhepA%3A1653199513492&ei=mdKJYty3HYvA3LUPsr2t6Ao&oq=barbershop+di+banda+aceh&gs_l=psy-ab.3...0.0.0.125460.0.0.0.0.0.0.0.0..0.0....0...1c..64.psy-ab..0.0.0....0.TyJpCqq25-g&tbs=lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u2!2m2!2m1!1e1!2m1!1e2!2m1!1e3!3sIAE,lf:1,lf_ui:14&rlst=f#"
                            class="text-decoration-none">NBC Barber Shop</a><br>
                    </div>
                    <div style="margin: 2rem">
                        <h6>Langsa</h6>
                        <a href="https://kick-barbershop.business.site/?utm_source=gmb&utm_medium=referral"
                            class="text-decoration-none">Kick Barbershop</a><br>
                        <a href="https://fn-barber-co.business.site/?utm_source=gmb&utm_medium=referral"
                            class="text-decoration-none">FN BARBERSHOP</a><br>
                        <a href="https://www.google.com/search?q=barbershop+di+langsa&rlz=1C1YKLZ_idID945ID945&tbm=lcl&sxsrf=ALiCzsYT9zjzlQDK_wLl3CPNlfqjhtOOwA%3A1653199696866&ei=UNOJYsTENM6dseMPjpyJmAM&oq=barbershop+di+langsa&gs_l=psy-ab.3..35i39k1.44039.44684.0.44863.6.6.0.0.0.0.136.374.0j3.3.0....0...1c.1.64.psy-ab..3.3.373....0.WnsbhM5DArY#"
                            class="text-decoration-none">Raden The Barber </a><br>
                        <a href="https://www.google.com/search?q=barbershop+di+langsa&rlz=1C1YKLZ_idID945ID945&tbm=lcl&sxsrf=ALiCzsYT9zjzlQDK_wLl3CPNlfqjhtOOwA%3A1653199696866&ei=UNOJYsTENM6dseMPjpyJmAM&oq=barbershop+di+langsa&gs_l=psy-ab.3..35i39k1.44039.44684.0.44863.6.6.0.0.0.0.136.374.0j3.3.0....0...1c.1.64.psy-ab..3.3.373....0.WnsbhM5DArY#"
                            class="text-decoration-none">SA Marino Premium Barbershop</a><br>
                    </div>
                    <div style="margin: 2rem">
                        <h6>Lhokseumawe</h6>
                        <a href="https://www.google.com/search?q=barbershop+di+lhokseumawe&rlz=1C1YKLZ_idID945ID945&tbm=lcl&sxsrf=ALiCzsZce6nd3_bB8TTN571vUHQ35AEXbA%3A1653199742315&ei=ftOJYrrwEsCUseMPg4aPmAM&oq=barbershop+di+lh&gs_l=psy-ab.3.0.35i39k1.90134.90650.0.91428.2.2.0.0.0.0.168.295.0j2.2.0....0...1c.1.64.psy-ab..0.2.295...0i203k1j0i512k1.0.8AVzOfODbOs#"
                            class="text-decoration-none">NAZZ Barbershop</a><br>
                        <a href="https://sherifbarbershop.business.site/" class="text-decoration-none">Sherif Barbershop &
                            Refleksi</a><br>
                        <a href="https://www.google.com/search?q=barbershop+di+lhokseumawe&rlz=1C1YKLZ_idID945ID945&tbm=lcl&sxsrf=ALiCzsZce6nd3_bB8TTN571vUHQ35AEXbA%3A1653199742315&ei=ftOJYrrwEsCUseMPg4aPmAM&oq=barbershop+di+lh&gs_l=psy-ab.3.0.35i39k1.90134.90650.0.91428.2.2.0.0.0.0.168.295.0j2.2.0....0...1c.1.64.psy-ab..0.2.295...0i203k1j0i512k1.0.8AVzOfODbOs#"
                            class="text-decoration-none">Raden The Barber </a><br>
                        <a href="https://www.google.com/search?q=barbershop+di+lhokseumawe&rlz=1C1YKLZ_idID945ID945&tbm=lcl&sxsrf=ALiCzsZce6nd3_bB8TTN571vUHQ35AEXbA%3A1653199742315&ei=ftOJYrrwEsCUseMPg4aPmAM&oq=barbershop+di+lh&gs_l=psy-ab.3.0.35i39k1.90134.90650.0.91428.2.2.0.0.0.0.168.295.0j2.2.0....0...1c.1.64.psy-ab..0.2.295...0i203k1j0i512k1.0.8AVzOfODbOs#"
                            class="text-decoration-none">Dyaz Barbearia</a><br>
                    </div>
                </div>
            </div>
        </div>
    @endsection
