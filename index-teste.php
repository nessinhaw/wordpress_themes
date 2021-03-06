<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Arvo|Montserrat|Playfair+Display:700" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/theme.css" />
    <link rel="stylesheet" href="css/media.css" />

    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar nav-bg">
      <a class="navbar-brand mx-auto p-3 brand" href="#">Nome do Blog</a>
    </nav>

    <ul class="nav justify-content-center mt-1 mb-4 nav-cat-bg">
      <li class="nav-item p-2">
        <a class="nav-link nav-cat-noticias" href="">Notícias</a>
      </li>
      <li class="nav-item p-2">
        <a class="nav-link nav-cat-reviews" href="">Reviews</a>
      </li>
      <li class="nav-item p-2">
        <a class="nav-link nav-cat-guias" href="#">Guias</a>
      </li>
      <li class="nav-item p-2">
        <a class="nav-link nav-cat-tecnologia" href="#">Tecnologia</a>
      </li>
      <li class="nav-item p-2">
        <a class="nav-link nav-cat-eventos" href="#">Eventos</a>
      </li>
    </ul>

    <div class="container">

      <div class="row mt-3 mb-3">
        <div class="col-md-6">
          <div class="card flex-md-row-reverse mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <p class="card-text"><a href="#" class="badge cat-jogo-semana cat-badge-link">Jogo da Semana</a></p>
              <h3 class="card-title"><a class="card-title" href="#">Titulo do jogo</a></h3>
              <p class="card-text mb-2">This is a wider card with supporting text below as a natural lead-in to additional content. This is a wider card with supporting text below as a natural lead-in.</p>
              <p class="card-text pt-2 mb-auto"><a href="#" class="card-link">Review</a> <a href="#" class="card-link">Guias</a></p>
            </div>
            <img class="flex-auto d-none d-lg-block" width="210" height="285" src="img/onmyoji-sample.JPG" alt="Card image cap">
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row-reverse mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <p class="card-text"><a href="#" class="badge cat-destaque-semana cat-badge-link">Destaque da Semana</a></p>
              <h3 class="card-title"><a class="card-title" href="#">Titulo do post</a></h3>
              <p class="card-text mb-2">This is a wider card with supporting text below as a natural lead-in to additional content. This is a wider card with supporting text below as a natural lead-in.</p>
              <p class="card-text pt-2 mb-auto"><a href="#" class="card-link">Leia mais</a></p>
            </div>
            <img class="flex-auto d-none d-lg-block" width="210" height="285" src="img/onmyoji-sample.JPG" alt="Card image cap">
          </div>
        </div>
      </div>
      
    </div>

    <div id="filters" class="filters d-flex justify-content-center">
      <div class="row">
        <div class="col">
          <div class="btn-group" data-filter-group="posts" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-secondary cat-todos" data-filter="">Todos</button>
            <button type="button" class="btn btn-secondary cat-noticias" data-filter=".noticias">Noticias</button>
            <button type="button" class="btn btn-secondary cat-reviews" data-filter=".reviews">Reviews</button>
            <button type="button" class="btn btn-secondary cat-guias" data-filter=".guias">Guias</button>
            <button type="button" class="btn btn-secondary cat-tecnologia" data-filter=".tecnologia">Tecnologia</button>
            <button type="button" class="btn btn-secondary cat-eventos" data-filter=".eventos">Eventos</button>
          </div>
        </div>

      <div class="col">
        <div class="btn-group" data-filter-group="posts2" role="group" aria-label="Basic example">
          <button type="button" class="btn btn-secondary cat-todos" data-filter="">Todos</button>
          <button type="button" class="btn btn-secondary cat-mobile" data-filter=".mobile">Mobile</button>
          <button type="button" class="btn btn-secondary cat-pc" data-filter=".pc">PC</button>
        </div>
      </div>
    </div>
  </div>

     <div class="container">
      <div id="filters">
            <div class="filter list-group" data-filter-group="posts">
              <button type="button" class="list-group-item list-group-cat" data-filter="">Geral</button>
              <button type="button" class="list-group-item list-group-cat" data-toggle="collapse" data-target="#collapseExample" data-filter=".noticias">Notícias</button>
              <button type="button" class="list-group-item list-group-cat" data-filter=".reviews">Reviews</button>
              <button type="button" class="list-group-item list-group-cat" data-filter=".guias">Guias</button>
              <button type="button" class="list-group-item list-group-cat" data-filter=".tecnologia">Tecnologia</button>
              <button type="button" class="list-group-item list-group-cat" data-filter=".eventos">Eventos</button>
            </div>

            <div class="collapse" id="collapseExample">
              <div class="filter list-group" data-filter-group="posts2">
                <button type="button" class="list-group-item list-group-cat" data-filter="">Geral</button>
                <button type="button" class="list-group-item list-group-cat" data-filter=".mobile">Mobile</button>
                <button type="button" class="list-group-item list-group-cat" data-filter=".pc">PC</button>
              </div>
            </div>
          </div>
      <div class="grid">
          <div class="grid-sizer col-xs-4 col-md-6 col-lg-2 col-xl-2"></div>

          <div class="grid-item col-xs-8 col-md-6 col-lg-3 col-xl-4">
            <div class="card shadow-sm">
              <img class="card-img-top" src="img/sample-01.JPG" height="250px" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">
                  <a href="#" class="badge cat-noticias cat-badge-link">Notícias</a>
                  <a href="#" class="badge cat-mobile cat-badge-link">Mobile</a>
                </p>
                <h5 class="card-title"><a class="card-title" href="#">Titulo do post</a></h5>
                <h6 class="card-subtitle mb-2 text-muted">Algum subtitulo bem legal</h6>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content. This is another card with title and supporting text below.</p>
                <p class="card-text"><a href="">Leia mais</a></p>
                <p class="card-text"><small class="text-muted">13/09/2018 por <a href="#">Yuck</a></small></p>
              </div>
            </div>
          </div>

          <div class="grid-item col-xs-8 col-md-6 col-lg-3 col-xl-4">
            <div class="card shadow-sm">
              <img class="card-img-top" src="img/sample-01.JPG" height="250px" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">
                  <a href="#" class="badge cat-noticias cat-badge-link">Notícias</a>
                  <a href="#" class="badge cat-pc cat-badge-link">PC</a>
                </p>
                <h5 class="card-title"><a class="card-title" href="#">Titulo do post</a></h5>
                <h6 class="card-subtitle mb-2 text-muted">Algum subtitulo bem legal</h6>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content. This card has some additional content to make it slightly taller overall.</p>
                <p class="card-text"><a href="">Leia mais</a></p>
                <p class="card-text"><small class="text-muted">12/09/2018 por <a href="#">Yuck</a></small></p>
              </div>
            </div>
          </div>

          <div class="grid-item col-xs-8 col-md-6 col-lg-3 col-xl-4">
            <div class="card shadow-sm">
              <img class="card-img-top" src="img/sample-01.JPG" height="250px" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">
                  <a href="#" class="badge cat-reviews cat-badge-link">Reviews</a>
                  <a href="#" class="badge cat-pc cat-badge-link">PC</a>
                </p>
                <h5 class="card-title"><a class="card-title" href="#">Titulo do post</a></h5>
                <h6 class="card-subtitle mb-2 text-muted">Algum subtitulo bem legal</h6>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content. This is another card with title and supporting text below. This is another card with title and supporting text below.</p>
                <p class="card-text"><a href="">Leia mais</a></p>
                <p class="card-text"><small class="text-muted">11/09/2018 por <a href="#">Yuck</a></small></p>
              </div>
            </div>
          </div>

          <div class="grid-item col-xs-8 col-md-6 col-lg-3 col-xl-4">
            <div class="card shadow-sm">
              <img class="card-img-top" src="img/sample-01.JPG" height="250px" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">
                  <a href="#" class="badge cat-guias cat-badge-link">Guias</a>
                  <a href="#" class="badge cat-mobile cat-badge-link">Mobile</a>
                </p>
                <h5 class="card-title"><a class="card-title" href="#">Titulo do post</a></h5>
                <h6 class="card-subtitle mb-2 text-muted">Algum subtitulo bem legal</h6>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content. This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall.</p>
                <p class="card-text"><a href="">Leia mais</a></p>
                <p class="card-text"><small class="text-muted">10/09/2018 por <a href="#">Yuck</a></small></p>
              </div>
            </div>
          </div>

          <div class="grid-item col-xs-8 col-md-6 col-lg-3 col-xl-4">
            <div class="card shadow-sm">
              <img class="card-img-top" src="img/sample-01.JPG" height="250px" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">
                  <a href="#" class="badge cat-eventos cat-badge-link">Eventos</a>
                </p>
                <h5 class="card-title"><a class="card-title" href="#">Titulo do post</a></h5>
                <h6 class="card-subtitle mb-2 text-muted">Algum subtitulo bem legal</h6>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><a href="">Leia mais</a></p>
                <p class="card-text"><small class="text-muted">09/09/2018 por <a href="#">Yuck</a></small></p>
              </div>
            </div>
          </div>

          <div class="grid-item col-xs-8 col-md-6 col-lg-3 col-xl-4">
            <div class="card shadow-sm">
              <img class="card-img-top" src="img/sample-01.JPG" height="250px" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">
                  <a href="#" class="badge cat-noticias cat-badge-link">Notícias</a>
                  <a href="#" class="badge cat-mobile cat-badge-link">Mobile</a>
                </p>
                <h5 class="card-title"><a class="card-title" href="#">Titulo do post</a></h5>
                <h6 class="card-subtitle mb-2 text-muted">Algum subtitulo bem legal</h6>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content. This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall. This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><a href="">Leia mais</a></p>
                <p class="card-text"><small class="text-muted">08/09/2018 por <a href="#">Yuck</a></small></p>
              </div>
            </div>
          </div>

          <div class="grid-item col-xs-8 col-md-6 col-lg-3 col-xl-4">
            <div class="card shadow-sm">
              <img class="card-img-top" src="img/sample-01.JPG" height="250px" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">
                  <a href="#" class="badge cat-tecnologia cat-badge-link">Tecnologia</a>
                </p>
                <h5 class="card-title"><a class="card-title" href="#">Titulo do post</a></h5>
                <h6 class="card-subtitle mb-2 text-muted">Algum subtitulo bem legal</h6>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content. This is another card with title and supporting text below.</p>
                <p class="card-text"><a href="">Leia mais</a></p>
                <p class="card-text"><small class="text-muted">07/09/2018 por <a href="#">Yuck</a></small></p>
              </div>
            </div>
          </div>

          <div class="grid-item col-xs-8 col-md-6 col-lg-3 col-xl-4">
            <div class="card shadow-sm">
              <img class="card-img-top" src="img/sample-01.JPG" height="250px" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">
                  <a href="#" class="badge cat-reviews cat-badge-link">Reviews</a>
                  <a href="#" class="badge cat-pc cat-badge-link">PC</a>
                </p>
                <h5 class="card-title"><a class="card-title" href="#">Titulo do post</a></h5>
                <h6 class="card-subtitle mb-2 text-muted">Algum subtitulo bem legal</h6>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content. This is another card with title and supporting text below. This is another card with title and supporting text below.</p>
                <p class="card-text"><a href="">Leia mais</a></p>
                <p class="card-text"><small class="text-muted">06/09/2018 por <a href="#">Yuck</a></small></p>
              </div>
            </div>
          </div>

          <div class="grid-item col-xs-8 col-md-6 col-lg-3 col-xl-4">
            <div class="card shadow-sm">
              <img class="card-img-top" src="img/sample-01.JPG" height="250px" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">
                  <a href="#" class="badge cat-guias cat-badge-link">Guias</a>
                  <a href="#" class="badge cat-mobile cat-badge-link">Mobile</a>
                </p>
                <h5 class="card-title"><a class="card-title" href="#">Titulo do post</a></h5>
                <h6 class="card-subtitle mb-2 text-muted">Algum subtitulo bem legal</h6>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content. This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall.</p>
                <p class="card-text"><a href="">Leia mais</a></p>
                <p class="card-text"><small class="text-muted">05/09/2018 por <a href="#">Yuck</a></small></p>
              </div>
            </div>
          </div>
        </div>
      </div>

    <footer class="footer footer-bg mt-5">
      <div class="container">
        <div class="row ">
          <div class="col-sm mt-4 mb-4">
            
              <div>
                <h5 class="pb-3 footer-title">Arquivo</h5>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item pt-0"><a class="footer-link" href="#">Dezembro 2018</a></li>
                  <li class="list-group-item"><a class="footer-link" href="">Novembro 2018</a></li>
                  <li class="list-group-item"><a class="footer-link" href="">Outubro 2018</a></li>
                  <li class="list-group-item"><a class="footer-link" href="">Setembro 2018</a></li>
                </ul>
              </div>

          </div>

          <div class="col-sm mt-4 mb-4">

              <div>
                <h5 class="pb-3 footer-title">Quem escreve?</h5>
                <ul class="list-unstyled">
                  <li class="media">
                    <img class="mr-3 rounded-circle" src="img/sample-01.JPG" width="64" height="64" alt="Generic placeholder image">
                    <div class="media-body">
                      <h5 class="mt-0 mb-1"><a class="author1-link" href="#">Pessoa 1</a></h5>
                      <p>Breve introdução sobre o autor.</p>
                    </div>
                  </li>
                  <li class="media my-4">
                    <img class="mr-3 rounded-circle" src="img/sample-01.JPG" width="64" height="64" alt="Generic placeholder image">
                    <div class="media-body">
                      <h5 class="mt-0 mb-1"><a class="author2-link" href="#">Pessoa 2</a></h5>
                      <p>Breve introdução sobre o autor.</p>
                    </div>
                  </li>
                </ul>
            </div>

          </div>

          <div class="col-sm mt-4 mb-4">
            <div class="mb-5">
              <h5 class="pb-3 footer-title">Newsletter</h5>
              <form>
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
                  </div>
                </div>
              </form>
            </div>

            <div>
              <h5 class="pb-2 footer-title">Sobre</h5>
              <p>Algum texto legal sobre o blog.</p>
            </div>

          </div>
        </div>
      </div>
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/teste.js"></script>
  </body>
</html>