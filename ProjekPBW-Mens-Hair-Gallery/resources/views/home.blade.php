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

  <body id="home">
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
              <a class="nav-link" href="{{ URL('/rekomendasi')}}">Rekomendasi</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0 d-flex justify-content-end position-absolute top-50 end-0 translate-middle-y" style="margin-right:6rem">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" />
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>

    {{-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Est iusto ipsam autem perspiciatis sequi voluptatibus, amet commodi, fuga odit tempora suscipit omnis quia, officia tenetur expedita harum. Repudiandae nesciunt magni, molestias velit esse harum rerum fugit eius quia modi incidunt beatae placeat sed molestiae illo non quidem veritatis cum optio laborum amet quibusdam ducimus odio. Dolorum doloremque consequatur aliquid! Itaque beatae delectus, iure reprehenderit iste impedit veritatis odit. Fugiat perspiciatis iusto mollitia expedita. In, tenetur qui soluta cupiditate veritatis omnis ab nemo rerum modi nostrum nam aperiam. Fugiat est eligendi eius corrupti obcaecati earum veniam nulla quo at mollitia quod unde porro eos assumenda alias autem distinctio inventore qui sequi commodi laboriosam, totam deserunt ducimus quaerat! Architecto reprehenderit eligendi saepe laboriosam iure ipsum officiis eos, dignissimos repellendus suscipit vitae debitis optio blanditiis ducimus, voluptatibus iusto ea in vero labore eaque quos illum. Excepturi architecto explicabo unde distinctio quos molestias nisi laboriosam provident eos odit vel, quibusdam soluta nesciunt expedita aliquam tempora impedit modi, repellendus reiciendis est officiis suscipit voluptas ipsum dolores. Inventore eos nostrum temporibus saepe corrupti tempora sunt at facilis debitis amet unde quasi non id eum ratione eveniet molestiae ab soluta est, quibusdam vel asperiores! Eaque dicta iusto illum reprehenderit pariatur totam quos quo accusamus rem, voluptatum facere modi, id quae ea suscipit facilis molestiae, ab laborum consectetur reiciendis delectus praesentium porro. Reprehenderit quas nostrum perspiciatis suscipit doloribus obcaecati odit nisi, blanditiis iusto illo totam quae, eaque sit! Harum facilis, voluptates doloremque ad, expedita natus, perspiciatis enim laborum suscipit ipsum eveniet eligendi vitae necessitatibus magni tempore tenetur corrupti et nam itaque. Inventore mollitia id, officia consequuntur amet asperiores porro consectetur quae. Nostrum tempore atque expedita asperiores excepturi eius blanditiis inventore nam, non laborum nesciunt aliquid esse, ullam saepe labore ipsam! Commodi sapiente alias ipsam voluptates mollitia, officiis porro hic velit nulla? Non quas inventore, suscipit asperiores mollitia nam, quibusdam aliquam molestiae consequuntur eaque perspiciatis repudiandae, eos illo incidunt molestias dolorum quisquam ad assumenda aspernatur nostrum ipsum accusantium. Iusto placeat, officia, commodi reprehenderit neque iure aliquid accusamus laboriosam qui a odit pariatur, maxime officiis eligendi eaque magnam suscipit veritatis esse. Veritatis libero beatae possimus eius, dolores in necessitatibus tempore provident atque consectetur ex, aperiam nobis, autem commodi at. Neque doloremque illo velit magni expedita odit perspiciatis voluptatibus. Alias ea, doloribus, minima dignissimos fugit numquam aspernatur vel perspiciatis veritatis saepe delectus sed non a corporis iste quae laborum adipisci ad soluta perferendis ex quas mollitia eligendi? Quam iste rerum numquam, officiis blanditiis quia inventore doloribus veniam culpa, eligendi repudiandae! Id ut ratione ipsum, quos beatae voluptatum corrupti sed at molestias temporibus harum, nam in odio voluptatem optio sequi labore error deserunt obcaecati! Laudantium cumque doloribus consequuntur nihil ipsum facere veritatis, exercitationem minus autem deleniti sequi, adipisci, velit amet! Autem cum omnis quo quia consectetur fugit magnam eum atque vitae, eveniet quis, voluptatum quos necessitatibus! Autem, similique reiciendis dolorum, amet dolorem illo, modi explicabo labore fuga inventore velit blanditiis est eum distinctio quod laborum temporibus magnam animi consequatur enim nesciunt. Praesentium soluta, delectus aliquam itaque labore necessitatibus quo dolor, magnam architecto sequi, facilis eveniet impedit. Totam et accusantium dolorum reiciendis nemo voluptates sit nulla magnam deserunt, dolore nostrum labore. Deserunt ducimus necessitatibus architecto deleniti aliquid? Atque odit nobis incidunt cumque laborum dolor magni, iure blanditiis vitae. Aspernatur aperiam nobis similique incidunt libero, illum corrupti iure obcaecati ipsa animi. Error commodi aspernatur tempore sint consequatur numquam quod quae delectus exercitationem recusandae. Architecto sit nobis saepe nisi rem adipisci repudiandae, magnam ex voluptates alias culpa iusto odit praesentium accusamus commodi velit repellat magni! Iure modi aut, consequatur voluptatibus officiis vel voluptates nam, cum dolorem exercitationem amet possimus incidunt quas totam odit veritatis rerum? Eos quod aliquam nesciunt, temporibus maiores error nihil excepturi, quidem ullam doloribus provident optio illum fugiat magni corrupti sunt dolore pariatur culpa. Distinctio esse obcaecati tenetur rerum voluptate magnam iste ipsam, placeat dolorum dolore ipsa voluptates repellat quaerat natus officiis! Sed omnis, quibusdam ab vitae placeat aliquam provident maiores sequi iure excepturi sapiente hic molestias dolores repellendus eveniet, nostrum amet animi in dignissimos architecto libero temporibus nisi nihil. Vero nihil adipisci fugit a obcaecati veritatis dolores tempore pariatur sed nemo quae quis perferendis, necessitatibus alias expedita eius reprehenderit minima. Eligendi iste quam suscipit ut molestias, nulla veniam vero excepturi vel similique quidem voluptate eaque perferendis laboriosam repellendus est, unde nisi adipisci officiis velit reiciendis animi officia ad. Fugit delectus placeat cum hic? Inventore et tempora in laborum, ad incidunt qui maiores libero quo, sed quam? Repellendus laboriosam ipsa debitis voluptatum quisquam eligendi necessitatibus! Quae dolore officiis et odio! Suscipit autem hic quasi, perspiciatis temporibus, quam provident libero neque minima rerum cumque ipsam asperiores velit earum reiciendis laboriosam rem. Itaque quas unde in et, aliquam fuga soluta vitae harum nihil modi iste sequi, velit quidem! Similique, tempore id, quasi voluptate quaerat dignissimos cupiditate accusantium ex optio libero atque, animi totam facere autem commodi adipisci! Officiis a labore ea qui dolorum hic eaque exercitationem beatae placeat. Nemo consequuntur eum necessitatibus quis pariatur iure enim quam, cupiditate delectus earum doloremque quae esse. Et ex voluptatibus sit, at dolore beatae! Tenetur perferendis cum repellendus possimus dolores ratione officiis asperiores, unde ducimus alias aliquam voluptate enim, similique illum? Consequuntur alias quasi provident consequatur culpa odio veniam porro fuga ad praesentium sapiente voluptate eveniet, doloribus veritatis vero quibusdam obcaecati beatae natus eligendi quam tempore, aperiam suscipit! Velit reiciendis magni deserunt illo, quidem cumque distinctio ea quod quisquam quae, dolorum architecto assumenda nisi perspiciatis accusantium aspernatur laboriosam mollitia voluptatem facilis facere vero autem commodi numquam hic. Qui laudantium, ullam assumenda magni nisi explicabo molestiae consequuntur voluptate vitae unde voluptatibus! Temporibus alias quo iure. Animi nisi cupiditate earum saepe quisquam. Obcaecati quis esse tempore! Amet vero voluptas quos quia molestiae cumque commodi veritatis consequatur deleniti, repellat, veniam nihil accusantium voluptatibus. Optio nobis nulla nemo recusandae deserunt corporis aliquid suscipit, eveniet natus, perspiciatis eius, sed in commodi eligendi reiciendis neque porro sint illo impedit quidem! Dolores numquam dolor asperiores ipsa reprehenderit! Ratione cumque sapiente quibusdam non vel, iusto ducimus!--}}
    {{-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Est iusto ipsam autem perspiciatis sequi voluptatibus, amet commodi, fuga odit tempora suscipit omnis quia, officia tenetur expedita harum. Repudiandae nesciunt magni, molestias velit esse harum rerum fugit eius quia modi incidunt beatae placeat sed molestiae illo non quidem veritatis cum optio laborum amet quibusdam ducimus odio. Dolorum doloremque consequatur aliquid! Itaque beatae delectus, iure reprehenderit iste impedit veritatis odit. Fugiat perspiciatis iusto mollitia expedita. In, tenetur qui soluta cupiditate veritatis omnis ab nemo rerum modi nostrum nam aperiam. Fugiat est eligendi eius corrupti obcaecati earum veniam nulla quo at mollitia quod unde porro eos assumenda alias autem distinctio inventore qui sequi commodi laboriosam, totam deserunt ducimus quaerat! Architecto reprehenderit eligendi saepe laboriosam iure ipsum officiis eos, dignissimos repellendus suscipit vitae debitis optio blanditiis ducimus, voluptatibus iusto ea in vero labore eaque quos illum. Excepturi architecto explicabo unde distinctio quos molestias nisi laboriosam provident eos odit vel, quibusdam soluta nesciunt expedita aliquam tempora impedit modi, repellendus reiciendis est officiis suscipit voluptas ipsum dolores. Inventore eos nostrum temporibus saepe corrupti tempora sunt at facilis debitis amet unde quasi non id eum ratione eveniet molestiae ab soluta est, quibusdam vel asperiores! Eaque dicta iusto illum reprehenderit pariatur totam quos quo accusamus rem, voluptatum facere modi, id quae ea suscipit facilis molestiae, ab laborum consectetur reiciendis delectus praesentium porro. Reprehenderit quas nostrum perspiciatis suscipit doloribus obcaecati odit nisi, blanditiis iusto illo totam quae, eaque sit! Harum facilis, voluptates doloremque ad, expedita natus, perspiciatis enim laborum suscipit ipsum eveniet eligendi vitae necessitatibus magni tempore tenetur corrupti et nam itaque. Inventore mollitia id, officia consequuntur amet asperiores porro consectetur quae. Nostrum tempore atque expedita asperiores excepturi eius blanditiis inventore nam, non laborum nesciunt aliquid esse, ullam saepe labore ipsam! Commodi sapiente alias ipsam voluptates mollitia, officiis porro hic velit nulla? Non quas inventore, suscipit asperiores mollitia nam, quibusdam aliquam molestiae consequuntur eaque perspiciatis repudiandae, eos illo incidunt molestias dolorum quisquam ad assumenda aspernatur nostrum ipsum accusantium. Iusto placeat, officia, commodi reprehenderit neque iure aliquid accusamus laboriosam qui a odit pariatur, maxime officiis eligendi eaque magnam suscipit veritatis esse. Veritatis libero beatae possimus eius, dolores in necessitatibus tempore provident atque consectetur ex, aperiam nobis, autem commodi at. Neque doloremque illo velit magni expedita odit perspiciatis voluptatibus. Alias ea, doloribus, minima dignissimos fugit numquam aspernatur vel perspiciatis veritatis saepe delectus sed non a corporis iste quae laborum adipisci ad soluta perferendis ex quas mollitia eligendi? Quam iste rerum numquam, officiis blanditiis quia inventore doloribus veniam culpa, eligendi repudiandae! Id ut ratione ipsum, quos beatae voluptatum corrupti sed at molestias temporibus harum, nam in odio voluptatem optio sequi labore error deserunt obcaecati! Laudantium cumque doloribus consequuntur nihil ipsum facere veritatis, exercitationem minus autem deleniti sequi, adipisci, velit amet! Autem cum omnis quo quia consectetur fugit magnam eum atque vitae, eveniet quis, voluptatum quos necessitatibus! Autem, similique reiciendis dolorum, amet dolorem illo, modi explicabo labore fuga inventore velit blanditiis est eum distinctio quod laborum temporibus magnam animi consequatur enim nesciunt. Praesentium soluta, delectus aliquam itaque labore necessitatibus quo dolor, magnam architecto sequi, facilis eveniet impedit. Totam et accusantium dolorum reiciendis nemo voluptates sit nulla magnam deserunt, dolore nostrum labore. Deserunt ducimus necessitatibus architecto deleniti aliquid? Atque odit nobis incidunt cumque laborum dolor magni, iure blanditiis vitae. Aspernatur aperiam nobis similique incidunt libero, illum corrupti iure obcaecati ipsa animi. Error commodi aspernatur tempore sint consequatur numquam quod quae delectus exercitationem recusandae. Architecto sit nobis saepe nisi rem adipisci repudiandae, magnam ex voluptates alias culpa iusto odit praesentium accusamus commodi velit repellat magni! Iure modi aut, consequatur voluptatibus officiis vel voluptates nam, cum dolorem exercitationem amet possimus incidunt quas totam odit veritatis rerum? Eos quod aliquam nesciunt, temporibus maiores error nihil excepturi, quidem ullam doloribus provident optio illum fugiat magni corrupti sunt dolore pariatur culpa. Distinctio esse obcaecati tenetur rerum voluptate magnam iste ipsam, placeat dolorum dolore ipsa voluptates repellat quaerat natus officiis! Sed omnis, quibusdam ab vitae placeat aliquam provident maiores sequi iure excepturi sapiente hic molestias dolores repellendus eveniet, nostrum amet animi in dignissimos architecto libero temporibus nisi nihil. Vero nihil adipisci fugit a obcaecati veritatis dolores tempore pariatur sed nemo quae quis perferendis, necessitatibus alias expedita eius reprehenderit minima. Eligendi iste quam suscipit ut molestias, nulla veniam vero excepturi vel similique quidem voluptate eaque perferendis laboriosam repellendus est, unde nisi adipisci officiis velit reiciendis animi officia ad. Fugit delectus placeat cum hic? Inventore et tempora in laborum, ad incidunt qui maiores libero quo, sed quam? Repellendus laboriosam ipsa debitis voluptatum quisquam eligendi necessitatibus! Quae dolore officiis et odio! Suscipit autem hic quasi, perspiciatis temporibus, quam provident libero neque minima rerum cumque ipsam asperiores velit earum reiciendis laboriosam rem. Itaque quas unde in et, aliquam fuga soluta vitae harum nihil modi iste sequi, velit quidem! Similique, tempore id, quasi voluptate quaerat dignissimos cupiditate accusantium ex optio libero atque, animi totam facere autem commodi adipisci! Officiis a labore ea qui dolorum hic eaque exercitationem beatae placeat. Nemo consequuntur eum necessitatibus quis pariatur iure enim quam, cupiditate delectus earum doloremque quae esse. Et ex voluptatibus sit, at dolore beatae! Tenetur perferendis cum repellendus possimus dolores ratione officiis asperiores, unde ducimus alias aliquam voluptate enim, similique illum? Consequuntur alias quasi provident consequatur culpa odio veniam porro fuga ad praesentium sapiente voluptate eveniet, doloribus veritatis vero quibusdam obcaecati beatae natus eligendi quam tempore, aperiam suscipit! Velit reiciendis magni deserunt illo, quidem cumque distinctio ea quod quisquam quae, dolorum architecto assumenda nisi perspiciatis accusantium aspernatur laboriosam mollitia voluptatem facilis facere vero autem commodi numquam hic. Qui laudantium, ullam assumenda magni nisi explicabo molestiae consequuntur voluptate vitae unde voluptatibus! Temporibus alias quo iure. Animi nisi cupiditate earum saepe quisquam. Obcaecati quis esse tempore! Amet vero voluptas quos quia molestiae cumque commodi veritatis consequatur deleniti, repellat, veniam nihil accusantium voluptatibus. Optio nobis nulla nemo recusandae deserunt corporis aliquid suscipit, eveniet natus, perspiciatis eius, sed in commodi eligendi reiciendis neque porro sint illo impedit quidem! Dolores numquam dolor asperiores ipsa reprehenderit! Ratione cumque sapiente quibusdam non vel, iusto ducimus!--}}
    {{-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Est iusto ipsam autem perspiciatis sequi voluptatibus, amet commodi, fuga odit tempora suscipit omnis quia, officia tenetur expedita harum. Repudiandae nesciunt magni, molestias velit esse harum rerum fugit eius quia modi incidunt beatae placeat sed molestiae illo non quidem veritatis cum optio laborum amet quibusdam ducimus odio. Dolorum doloremque consequatur aliquid! Itaque beatae delectus, iure reprehenderit iste impedit veritatis odit. Fugiat perspiciatis iusto mollitia expedita. In, tenetur qui soluta cupiditate veritatis omnis ab nemo rerum modi nostrum nam aperiam. Fugiat est eligendi eius corrupti obcaecati earum veniam nulla quo at mollitia quod unde porro eos assumenda alias autem distinctio inventore qui sequi commodi laboriosam, totam deserunt ducimus quaerat! Architecto reprehenderit eligendi saepe laboriosam iure ipsum officiis eos, dignissimos repellendus suscipit vitae debitis optio blanditiis ducimus, voluptatibus iusto ea in vero labore eaque quos illum. Excepturi architecto explicabo unde distinctio quos molestias nisi laboriosam provident eos odit vel, quibusdam soluta nesciunt expedita aliquam tempora impedit modi, repellendus reiciendis est officiis suscipit voluptas ipsum dolores. Inventore eos nostrum temporibus saepe corrupti tempora sunt at facilis debitis amet unde quasi non id eum ratione eveniet molestiae ab soluta est, quibusdam vel asperiores! Eaque dicta iusto illum reprehenderit pariatur totam quos quo accusamus rem, voluptatum facere modi, id quae ea suscipit facilis molestiae, ab laborum consectetur reiciendis delectus praesentium porro. Reprehenderit quas nostrum perspiciatis suscipit doloribus obcaecati odit nisi, blanditiis iusto illo totam quae, eaque sit! Harum facilis, voluptates doloremque ad, expedita natus, perspiciatis enim laborum suscipit ipsum eveniet eligendi vitae necessitatibus magni tempore tenetur corrupti et nam itaque. Inventore mollitia id, officia consequuntur amet asperiores porro consectetur quae. Nostrum tempore atque expedita asperiores excepturi eius blanditiis inventore nam, non laborum nesciunt aliquid esse, ullam saepe labore ipsam! Commodi sapiente alias ipsam voluptates mollitia, officiis porro hic velit nulla? Non quas inventore, suscipit asperiores mollitia nam, quibusdam aliquam molestiae consequuntur eaque perspiciatis repudiandae, eos illo incidunt molestias dolorum quisquam ad assumenda aspernatur nostrum ipsum accusantium. Iusto placeat, officia, commodi reprehenderit neque iure aliquid accusamus laboriosam qui a odit pariatur, maxime officiis eligendi eaque magnam suscipit veritatis esse. Veritatis libero beatae possimus eius, dolores in necessitatibus tempore provident atque consectetur ex, aperiam nobis, autem commodi at. Neque doloremque illo velit magni expedita odit perspiciatis voluptatibus. Alias ea, doloribus, minima dignissimos fugit numquam aspernatur vel perspiciatis veritatis saepe delectus sed non a corporis iste quae laborum adipisci ad soluta perferendis ex quas mollitia eligendi? Quam iste rerum numquam, officiis blanditiis quia inventore doloribus veniam culpa, eligendi repudiandae! Id ut ratione ipsum, quos beatae voluptatum corrupti sed at molestias temporibus harum, nam in odio voluptatem optio sequi labore error deserunt obcaecati! Laudantium cumque doloribus consequuntur nihil ipsum facere veritatis, exercitationem minus autem deleniti sequi, adipisci, velit amet! Autem cum omnis quo quia consectetur fugit magnam eum atque vitae, eveniet quis, voluptatum quos necessitatibus! Autem, similique reiciendis dolorum, amet dolorem illo, modi explicabo labore fuga inventore velit blanditiis est eum distinctio quod laborum temporibus magnam animi consequatur enim nesciunt. Praesentium soluta, delectus aliquam itaque labore necessitatibus quo dolor, magnam architecto sequi, facilis eveniet impedit. Totam et accusantium dolorum reiciendis nemo voluptates sit nulla magnam deserunt, dolore nostrum labore. Deserunt ducimus necessitatibus architecto deleniti aliquid? Atque odit nobis incidunt cumque laborum dolor magni, iure blanditiis vitae. Aspernatur aperiam nobis similique incidunt libero, illum corrupti iure obcaecati ipsa animi. Error commodi aspernatur tempore sint consequatur numquam quod quae delectus exercitationem recusandae. Architecto sit nobis saepe nisi rem adipisci repudiandae, magnam ex voluptates alias culpa iusto odit praesentium accusamus commodi velit repellat magni! Iure modi aut, consequatur voluptatibus officiis vel voluptates nam, cum dolorem exercitationem amet possimus incidunt quas totam odit veritatis rerum? Eos quod aliquam nesciunt, temporibus maiores error nihil excepturi, quidem ullam doloribus provident optio illum fugiat magni corrupti sunt dolore pariatur culpa. Distinctio esse obcaecati tenetur rerum voluptate magnam iste ipsam, placeat dolorum dolore ipsa voluptates repellat quaerat natus officiis! Sed omnis, quibusdam ab vitae placeat aliquam provident maiores sequi iure excepturi sapiente hic molestias dolores repellendus eveniet, nostrum amet animi in dignissimos architecto libero temporibus nisi nihil. Vero nihil adipisci fugit a obcaecati veritatis dolores tempore pariatur sed nemo quae quis perferendis, necessitatibus alias expedita eius reprehenderit minima. Eligendi iste quam suscipit ut molestias, nulla veniam vero excepturi vel similique quidem voluptate eaque perferendis laboriosam repellendus est, unde nisi adipisci officiis velit reiciendis animi officia ad. Fugit delectus placeat cum hic? Inventore et tempora in laborum, ad incidunt qui maiores libero quo, sed quam? Repellendus laboriosam ipsa debitis voluptatum quisquam eligendi necessitatibus! Quae dolore officiis et odio! Suscipit autem hic quasi, perspiciatis temporibus, quam provident libero neque minima rerum cumque ipsam asperiores velit earum reiciendis laboriosam rem. Itaque quas unde in et, aliquam fuga soluta vitae harum nihil modi iste sequi, velit quidem! Similique, tempore id, quasi voluptate quaerat dignissimos cupiditate accusantium ex optio libero atque, animi totam facere autem commodi adipisci! Officiis a labore ea qui dolorum hic eaque exercitationem beatae placeat. Nemo consequuntur eum necessitatibus quis pariatur iure enim quam, cupiditate delectus earum doloremque quae esse. Et ex voluptatibus sit, at dolore beatae! Tenetur perferendis cum repellendus possimus dolores ratione officiis asperiores, unde ducimus alias aliquam voluptate enim, similique illum? Consequuntur alias quasi provident consequatur culpa odio veniam porro fuga ad praesentium sapiente voluptate eveniet, doloribus veritatis vero quibusdam obcaecati beatae natus eligendi quam tempore, aperiam suscipit! Velit reiciendis magni deserunt illo, quidem cumque distinctio ea quod quisquam quae, dolorum architecto assumenda nisi perspiciatis accusantium aspernatur laboriosam mollitia voluptatem facilis facere vero autem commodi numquam hic. Qui laudantium, ullam assumenda magni nisi explicabo molestiae consequuntur voluptate vitae unde voluptatibus! Temporibus alias quo iure. Animi nisi cupiditate earum saepe quisquam. Obcaecati quis esse tempore! Amet vero voluptas quos quia molestiae cumque commodi veritatis consequatur deleniti, repellat, veniam nihil accusantium voluptatibus. Optio nobis nulla nemo recusandae deserunt corporis aliquid suscipit, eveniet natus, perspiciatis eius, sed in commodi eligendi reiciendis neque porro sint illo impedit quidem! Dolores numquam dolor asperiores ipsa reprehenderit! Ratione cumque sapiente quibusdam non vel, iusto ducimus!--}}
    {{-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Est iusto ipsam autem perspiciatis sequi voluptatibus, amet commodi, fuga odit tempora suscipit omnis quia, officia tenetur expedita harum. Repudiandae nesciunt magni, molestias velit esse harum rerum fugit eius quia modi incidunt beatae placeat sed molestiae illo non quidem veritatis cum optio laborum amet quibusdam ducimus odio. Dolorum doloremque consequatur aliquid! Itaque beatae delectus, iure reprehenderit iste impedit veritatis odit. Fugiat perspiciatis iusto mollitia expedita. In, tenetur qui soluta cupiditate veritatis omnis ab nemo rerum modi nostrum nam aperiam. Fugiat est eligendi eius corrupti obcaecati earum veniam nulla quo at mollitia quod unde porro eos assumenda alias autem distinctio inventore qui sequi commodi laboriosam, totam deserunt ducimus quaerat! Architecto reprehenderit eligendi saepe laboriosam iure ipsum officiis eos, dignissimos repellendus suscipit vitae debitis optio blanditiis ducimus, voluptatibus iusto ea in vero labore eaque quos illum. Excepturi architecto explicabo unde distinctio quos molestias nisi laboriosam provident eos odit vel, quibusdam soluta nesciunt expedita aliquam tempora impedit modi, repellendus reiciendis est officiis suscipit voluptas ipsum dolores. Inventore eos nostrum temporibus saepe corrupti tempora sunt at facilis debitis amet unde quasi non id eum ratione eveniet molestiae ab soluta est, quibusdam vel asperiores! Eaque dicta iusto illum reprehenderit pariatur totam quos quo accusamus rem, voluptatum facere modi, id quae ea suscipit facilis molestiae, ab laborum consectetur reiciendis delectus praesentium porro. Reprehenderit quas nostrum perspiciatis suscipit doloribus obcaecati odit nisi, blanditiis iusto illo totam quae, eaque sit! Harum facilis, voluptates doloremque ad, expedita natus, perspiciatis enim laborum suscipit ipsum eveniet eligendi vitae necessitatibus magni tempore tenetur corrupti et nam itaque. Inventore mollitia id, officia consequuntur amet asperiores porro consectetur quae. Nostrum tempore atque expedita asperiores excepturi eius blanditiis inventore nam, non laborum nesciunt aliquid esse, ullam saepe labore ipsam! Commodi sapiente alias ipsam voluptates mollitia, officiis porro hic velit nulla? Non quas inventore, suscipit asperiores mollitia nam, quibusdam aliquam molestiae consequuntur eaque perspiciatis repudiandae, eos illo incidunt molestias dolorum quisquam ad assumenda aspernatur nostrum ipsum accusantium. Iusto placeat, officia, commodi reprehenderit neque iure aliquid accusamus laboriosam qui a odit pariatur, maxime officiis eligendi eaque magnam suscipit veritatis esse. Veritatis libero beatae possimus eius, dolores in necessitatibus tempore provident atque consectetur ex, aperiam nobis, autem commodi at. Neque doloremque illo velit magni expedita odit perspiciatis voluptatibus. Alias ea, doloribus, minima dignissimos fugit numquam aspernatur vel perspiciatis veritatis saepe delectus sed non a corporis iste quae laborum adipisci ad soluta perferendis ex quas mollitia eligendi? Quam iste rerum numquam, officiis blanditiis quia inventore doloribus veniam culpa, eligendi repudiandae! Id ut ratione ipsum, quos beatae voluptatum corrupti sed at molestias temporibus harum, nam in odio voluptatem optio sequi labore error deserunt obcaecati! Laudantium cumque doloribus consequuntur nihil ipsum facere veritatis, exercitationem minus autem deleniti sequi, adipisci, velit amet! Autem cum omnis quo quia consectetur fugit magnam eum atque vitae, eveniet quis, voluptatum quos necessitatibus! Autem, similique reiciendis dolorum, amet dolorem illo, modi explicabo labore fuga inventore velit blanditiis est eum distinctio quod laborum temporibus magnam animi consequatur enim nesciunt. Praesentium soluta, delectus aliquam itaque labore necessitatibus quo dolor, magnam architecto sequi, facilis eveniet impedit. Totam et accusantium dolorum reiciendis nemo voluptates sit nulla magnam deserunt, dolore nostrum labore. Deserunt ducimus necessitatibus architecto deleniti aliquid? Atque odit nobis incidunt cumque laborum dolor magni, iure blanditiis vitae. Aspernatur aperiam nobis similique incidunt libero, illum corrupti iure obcaecati ipsa animi. Error commodi aspernatur tempore sint consequatur numquam quod quae delectus exercitationem recusandae. Architecto sit nobis saepe nisi rem adipisci repudiandae, magnam ex voluptates alias culpa iusto odit praesentium accusamus commodi velit repellat magni! Iure modi aut, consequatur voluptatibus officiis vel voluptates nam, cum dolorem exercitationem amet possimus incidunt quas totam odit veritatis rerum? Eos quod aliquam nesciunt, temporibus maiores error nihil excepturi, quidem ullam doloribus provident optio illum fugiat magni corrupti sunt dolore pariatur culpa. Distinctio esse obcaecati tenetur rerum voluptate magnam iste ipsam, placeat dolorum dolore ipsa voluptates repellat quaerat natus officiis! Sed omnis, quibusdam ab vitae placeat aliquam provident maiores sequi iure excepturi sapiente hic molestias dolores repellendus eveniet, nostrum amet animi in dignissimos architecto libero temporibus nisi nihil. Vero nihil adipisci fugit a obcaecati veritatis dolores tempore pariatur sed nemo quae quis perferendis, necessitatibus alias expedita eius reprehenderit minima. Eligendi iste quam suscipit ut molestias, nulla veniam vero excepturi vel similique quidem voluptate eaque perferendis laboriosam repellendus est, unde nisi adipisci officiis velit reiciendis animi officia ad. Fugit delectus placeat cum hic? Inventore et tempora in laborum, ad incidunt qui maiores libero quo, sed quam? Repellendus laboriosam ipsa debitis voluptatum quisquam eligendi necessitatibus! Quae dolore officiis et odio! Suscipit autem hic quasi, perspiciatis temporibus, quam provident libero neque minima rerum cumque ipsam asperiores velit earum reiciendis laboriosam rem. Itaque quas unde in et, aliquam fuga soluta vitae harum nihil modi iste sequi, velit quidem! Similique, tempore id, quasi voluptate quaerat dignissimos cupiditate accusantium ex optio libero atque, animi totam facere autem commodi adipisci! Officiis a labore ea qui dolorum hic eaque exercitationem beatae placeat. Nemo consequuntur eum necessitatibus quis pariatur iure enim quam, cupiditate delectus earum doloremque quae esse. Et ex voluptatibus sit, at dolore beatae! Tenetur perferendis cum repellendus possimus dolores ratione officiis asperiores, unde ducimus alias aliquam voluptate enim, similique illum? Consequuntur alias quasi provident consequatur culpa odio veniam porro fuga ad praesentium sapiente voluptate eveniet, doloribus veritatis vero quibusdam obcaecati beatae natus eligendi quam tempore, aperiam suscipit! Velit reiciendis magni deserunt illo, quidem cumque distinctio ea quod quisquam quae, dolorum architecto assumenda nisi perspiciatis accusantium aspernatur laboriosam mollitia voluptatem facilis facere vero autem commodi numquam hic. Qui laudantium, ullam assumenda magni nisi explicabo molestiae consequuntur voluptate vitae unde voluptatibus! Temporibus alias quo iure. Animi nisi cupiditate earum saepe quisquam. Obcaecati quis esse tempore! Amet vero voluptas quos quia molestiae cumque commodi veritatis consequatur deleniti, repellat, veniam nihil accusantium voluptatibus. Optio nobis nulla nemo recusandae deserunt corporis aliquid suscipit, eveniet natus, perspiciatis eius, sed in commodi eligendi reiciendis neque porro sint illo impedit quidem! Dolores numquam dolor asperiores ipsa reprehenderit! Ratione cumque sapiente quibusdam non vel, iusto ducimus!--}}

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
    <div class="container-fluid" style="height: 900px; background-image: url(assets/images/background3.jpg); background-size:cover; background-repeat:no-repeat">
        <?PHP
        
        echo "<h1 class='h1'>Mens Hair Gallery</h1>";
        ?>
      <div class="d-flex justify-content-center">
        <div class="line"></div>
      </div>
      <p class="text-center " style="color: #ffffff; padding-top: 10px">
        Dapatkan produk perawatan rambut terbaik dari Mens Hair Gallery <br />
        untuk keseharian anda. Sehingga tetap rapi dimanapun dan kapanpun
      </p>
    </div>

    <div id="about" class="container-fluid" style="padding-top: 50px; height: 900px; background-color: #343434">
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
            <p>Mens Hair Gallery adalah website yang menjual berbagai jenis produk perawat rambut. Pelanggan yang ingin membeli produk akan diarahkan ke aplikasi shopee untuk melakukan pembelian.</p>
            <p>Selain itu, website ini juga menampilkan berbagai informasi tentang berbagai jenis potongan rambut pria. Terdapat juga kiat-kiat untuk merawat dan memanjangkan rambut.</p>
            <p>Mens Hair Gallery di buat untuk oleh sekelompok yang terdiri dari dua orang untuk memenuhi tugas matakuliah Pemrograman Berbasis Web</p>
          </div>
        </div>
      </div>
    </div>

    {{-- <p>Mens Hair Gallery adalah website yang menjual berbagai jenis produk perawat rambut. Pelanggan yang ingin membeli produk akan diarahkan ke aplikasi whatsapp untuk melakukan pembelian.</p>
            <p>Selain itu, website ini juga menampilkan berbagai informasi tentang berbagai jenis potongan rambut pria. Terdapat juga kiat-kiat untuk merawat dan memanjangkan rambut.</p>
            <p>Mens Hair Gallery di buat pada tanggal 23 Maret 2022 oleh dua orang untuk memenuhi tugas matakuliah Pemrograman Berbasis Web</p> --}}

    <div id="hairstyle" class="container-fluid" style="padding-top: 50px; height: 900px; background-color: #565656">
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
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis vero ducimus ipsa ipsam, animi perspiciatis qui voluptatum cupiditate voluptate vel earum, et sit? Quo voluptatibus explicabo earum ipsa veniam nam.</p>
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
                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor quasi fugit laboriosam perspiciatis esse ratione, tenetur, aliquid ipsum possimus sint, tempore veniam atque nostrum quam. Beatae iusto ratione animi corrupti.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center" style="margin-left: 40rem">
        <a class="btn rounded-pill btn-sm" style="width: 8rem; background-color: #bc7100; color: white; text-align: center" href="{{ URL('/hairstyle')}}" role="button">Selengkapnya</a>
      </div>
    </div>
    <div id="product" class="container-fluid" style="padding-top: 50px; height: 900px; background-color: #343434">
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
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque libero fugiat hic eos odio deleniti eligendi aperiam exercitationem sequi. Quam, suscipit. Sunt sapiente nostrum impedit!</p>
                <a href="#" class="btn" style="background-color: #bc7100; color: white">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="width: 18rem; margin-bottom: 3rem">
              <img src="{{ URL::asset('assets/images/pomade1.jpg') }}" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae, enim dolore? Quis veniam maxime numquam incidunt rerum illum error, vero recusandae dolorum dignissimos, sequi voluptate.</p>
                <a href="#" class="btn" style="background-color: #bc7100; color: white">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="width: 18rem; margin-bottom: 3rem">
              <img src="{{ URL::asset('assets/images/pomade1.jpg') }}" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, repellat velit enim quam quod sit facere accusamus numquam! Ipsa minima praesentium facilis nobis voluptatum maxime!</p>
                <a href="#" class="btn" style="background-color: #bc7100; color: white">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="width: 18rem; margin-bottom: 3rem">
              <img src="{{ URL::asset('assets/images/pomade1.jpg') }}" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum ab possimus animi at quidem placeat delectus est sint praesentium alias, minus, id excepturi enim laboriosam?</p>
                <a href="#" class="btn" style="background-color: #bc7100; color: white">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-center" style="margin-left: 70rem">
          <a class="btn rounded-pill btn-sm" style="width: 8rem; background-color: #bc7100; color: white; text-align: center" href="{{ URL('/product')}}" role="button">Selengkapnya</a>
        </div>
      </div>
    </div>
    <div id="contact" class="container-fluid" style=" background-image: url(assets/images/background4.png  ) ;padding-top: 50px; height: 900px; background-size:cover; background-repeat:no-repeat">
      <div class="container-fluid" style="text-align: center; padding-bottom: 100px">
        <span class="fs-4 fw-bold" style="color: #ffffff">Contact</span>
        <span class="fs-4 fw-bold" style="color: #bc7100">Mens</span><br />
        <span class="fs-4 fw-bold" style="color: #bc7100">Hair</span>
        <span class="fs-4 fw-bold" style="color: #bc7100">Gallery</span>
      </div>

      <div class="container" >
        <div class="row align-items-center" style="text-align: center">
          <div class="col">
            <img src="{{ URL::asset('assets/images/gambar1.jpeg') }}" class="rounded-3" alt="" width="200px" height="300px" /></div>
          <div class="col">
            <div class="text-center fw-bold" style="margin-top:5rem; color:white">
              <p>Punya pertanyaan atau ingin order?</p>
              <div class="d-flex justify-content-center">
                <a class="btn rounded-3 btn-sm " style= "align-items:center ;justify-content:center ;display:flex; width: 15rem; height:3rem; background-color: #bc7100; color: white; text-align: center" href="https://api.whatsapp.com/send/?phone=6282388517024&text=Saya+ingin+bertanya+tentang+produk+yang+dijual&app_absent=0" role="button">
                <input type="image" src="{{ URL::asset('assets/images/whatsapp.png')}}" alt="" height="20" width="20" style=" margin-right: 5px" />
                <span class="fw-bold">Hubungi kami</span>
                </a>
              </div>
              <div class="d-flex justify-content-center mt-4">
                <a class="btn rounded-3 btn-sm " style= "align-items:center ;justify-content:center ;display:flex; width: 15rem; height:3rem; background-color: #bc7100; color: white; text-align: center" href="https://www.shopee.com" role="button">
                <input type="image" src="{{ URL::asset('assets/images/shopee.png')}}" alt="" height="20" width="20" style=" margin-right: 5px" />
                <span class="fw-bold">Mens Hair Gallery</span>
                </a>
              </div>
            </div>
          </div>
          <div class="col">
            <img src="{{ URL::asset('assets/images/gambar2.jpg') }}" class="rounded-3" alt="" width="200px" height="300px" /></div>
          
        </div>
      </div>

      <div class="container" style="margin-top: 10rem">
        <h6 style="text-align: center; font-weight:bold">Ikuti Kami</h6>
        <div class="container d-flex justify-content-center rounded-3" style="background-color:#bc7100; width:20rem; padding:10px">
          <a  href="https://www.facebook.com"><img src="{{ URL::asset('assets/images/facebook.png') }}" alt="" style=" width: 40px; margin-right:10px; margin-left:10px"></a>
          <a  href="https://www.instagram.com"><img src="{{ URL::asset('assets/images/instagram.png') }}" alt="" style="width: 40px; margin-right:10px; margin-left:10px"></a>
          <a  href="https://www.twitter.com"><img src="{{ URL::asset('assets/images/twitter.png') }}" alt="" style="width: 40px; margin-right:10px; margin-left:10px"></a>
          <a  href="https://www.tiktok.com"><img src="{{ URL::asset('assets/images/tiktok.png') }}" alt="" style="width: 40px; margin-right:10px; margin-left:10px"></a>
        </div>

        </div>
      </div>
    </div>
    <footer class="text-center" style="background-color: #356623; color: white; padding: 10px">
      <h6>Copyright 2022 | All Rights Reserved Men Hair Gallery</h6>
    </footer>
  

  
  
  </body>
</html>
