<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="shortcut icon" href="<?= $BASE_URL ?>img/icons/globo40x40px.svg" type="image/x-icon">
    <!-- css bootstrap --> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"/>
    <!-- CSS FONTAWESOME --><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.css" integrity="sha512-tx5+1LWHez1QiaXlAyDwzdBTfDjX07GMapQoFTS74wkcPMsI3So0KYmFe6EHZjI8+eSG0ljBlAQc3PQ5BTaZtQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css GERAL --> <link rel="stylesheet" href="<?= $BASE_URL ?>css/styles.css"/>
    <!-- css HOME --> <link rel="stylesheet" href="<?= $BASE_URL ?>css/home.css"/>
    <!-- css LOGIN --> <link rel="stylesheet" href="<?= $BASE_URL ?>css/login.css"/>
    <!-- css REGISTER --> <link rel="stylesheet" href="<?= $BASE_URL ?>css/register.css"/>

</head>
<body class="container-fluid">
    <!------------ start header: navbar & search------------------------->
  <header class="navbar-fixed-and-scroll">
    <div class="row">
      <div class="col align-self-center">
        <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
          <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="<?= $BASE_URL ?>/img/icons/logo-horizontal-lagsig-2019.png" alt=""></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
              <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Biblioteca</a></li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Projetos</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Projeto 1</a></li>
                      <li><a class="dropdown-item" href="#">Projeto 2</a></li>
                      <li><a class="dropdown-item" href="#">Projeto 3</a></li>
                    </ul></li>
                <li class="nav-item"><a class="nav-link" href="#">Links</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Sobre</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Contatos</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Ajuda</a></li>
              </ul>
              <div class="access-classroom">
                <span><a class="nav-link" href="auth.php"> Login </a></span>&nbsp;&nbsp;&nbsp;
                <span><a class="nav-link" href="register.php">Cadastro</a></span>&nbsp;&nbsp;&nbsp;
              </div>
              <form class="d-flex" role="search">
                  <input class="form-control me-2 search" type="search" placeholder="Pesquisar" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Buscar</button>
              </form>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>

  <main class="container-fluid">
    <!------------ start section carousel ------------------------------->
      <section class="carousel-opening-3-img">
        <div class="row">
        <div class="col-md-12">
          <div id="carouselExampleAutoplaying" class="carousel carousel-fade slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselAutoplaying" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselAutoplaying" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselAutoplaying" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active carousel-1" data-bs-interval="10000">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Planejamento Urbano e Ordenamento do Território</h5>
                  <p> Aplicação do geoprocessamento na análise e planejamento de uso do solo urbano, transporte, localização de infraestruturas e na gestão de recursos naturais.</p>
                </div>
              </div>
              <div class="carousel-item carousel-2" data-bs-interval="2000">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Georreferenciamento e Cadastro Rural</h5>
                  <p>Aplicação de técnicas para associar informações geográficas a coordenadas geográficas precisas, especialmente importante em cadastros de propriedades rurais e no registro de terras.</p>
                </div>
              </div>
              <div class="carousel-item carousel-3">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Geotecnologias e Desenvolvimento Sustentável</h5>
                  <p>Exploração de como as geotecnologias podem contribuir para o desenvolvimento sustentável, incluindo a gestão de áreas protegidas, o planejamento de conservação da biodiversidade e a mitigação de impactos ambientais.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        </div>
      </section>
    <!------------------------------------------------------------------->

    <!-- START SECTION FIRST POST OF PRESENTATION ----------------------->
      <section class="container-text-presentation">
        
        <div class="row">
          <div class="col">
            <div class="card h-100">
              <img src="https://fakeimg.pl/300x300" class="card-img-top" alt="...">
            </div>
          </div>
          <div class="col-md-8">

            <h3>Laboratório de Geoprocessamento e SIG </h3>
            <h5>Desvendando o Mundo com Tecnologia</h5>

              <p>Um laboratório de geoprocessamento e SIG (Sistemas de Informação Geográfica) é um centro de inteligência espacial, onde dados geoespaciais ganham vida e revelam os segredos do nosso planeta. Através de softwares sofisticados e técnicas inovadoras, esses laboratórios transformam informações sobre o mundo em ferramentas poderosas para a tomada de decisões.</p>
              
              <p>No coração do laboratório, encontra-se a coleta e o processamento de dados. Imagens de satélite, mapas digitais, dados de GPS e sensores – todos se unem em um mosaico de informações, revelando a topografia da Terra, a cobertura vegetal, a infraestrutura urbana e muito mais.</p>
              
              <p>Com esses dados em mãos, os especialistas em geoprocessamento e SIG embarcam em uma jornada de análise e descobertas. Através de técnicas avançadas, como modelagem espacial e análise estatística, eles desvendam padrões, identificam tendências e respondem a perguntas cruciais sobre o nosso planeta.</p>
              
              <p>O resultado final? Mapas temáticos, gráficos informativos e modelos geoespaciais que traduzem dados complexos em insights visuais, fornecendo informações valiosas para diversos setores da sociedade. Seja para monitorar o desmatamento na Amazônia, planejar o crescimento urbano ou otimizar o trajeto de entregas, os laboratórios de geoprocessamento e SIG estão na vanguarda da tecnologia, moldando um futuro mais sustentável e inteligente para o nosso planeta.</p>

          </div>
        </div>
      </section>
    <!------------------------------------------------------------------->  
    <!-- START SECTION LINKS LIBRARY ------------------------------------>
      <section class="container-highlights">
        <div class="row row-cols-1 row-cols-md-4 g-3">
          <div class="col">
            <div class="card h-100">
              <img src="https://fakeimg.pl/300x300" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Biblioteca</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
              <div class="card-footer">
                <small class="text-body-secondary"><a href="">Ler mais...</a></small>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="https://fakeimg.pl/300x300" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Vídeos</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              </div>
              <div class="card-footer">
                <small class="text-body-secondary"><a href="">Ler mais...</a></small>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="https://fakeimg.pl/300x300" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Filmes</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
                <div class="card-footer">
                    <small class="text-body-secondary"><a href="">Ler mais...</a></small>
                </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="https://fakeimg.pl/300x300" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Cursos</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
              </div>
              <div class="card-footer">
                <small class="text-body-secondary"><a href="">Ler mais...</a></small>
              </div>
            </div>
          </div>
        </div>
        
      </section>    
    <!------------------------------------------------------------------->
  </main>

<?php
  require_once("template/footer.php");
?>


=======
<?php
  require_once("template/header.php");
?>

  <main class="container-fluid">
    <!------------ start section carousel ------------------------------->
      <section class="carousel-opening-3-img">
        <div class="row">
        <div class="col-md-12">
          <div id="carouselExampleAutoplaying" class="carousel carousel-fade slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselAutoplaying" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselAutoplaying" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselAutoplaying" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active carousel-1" data-bs-interval="10000">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Planejamento Urbano e Ordenamento do Território</h5>
                  <p> Aplicação do geoprocessamento na análise e planejamento de uso do solo urbano, transporte, localização de infraestruturas e na gestão de recursos naturais.</p>
                </div>
              </div>
              <div class="carousel-item carousel-2" data-bs-interval="2000">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Georreferenciamento e Cadastro Rural</h5>
                  <p>Aplicação de técnicas para associar informações geográficas a coordenadas geográficas precisas, especialmente importante em cadastros de propriedades rurais e no registro de terras.</p>
                </div>
              </div>
              <div class="carousel-item carousel-3">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Geotecnologias e Desenvolvimento Sustentável</h5>
                  <p>Exploração de como as geotecnologias podem contribuir para o desenvolvimento sustentável, incluindo a gestão de áreas protegidas, o planejamento de conservação da biodiversidade e a mitigação de impactos ambientais.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        </div>
      </section>
    <!------------------------------------------------------------------->

    <!-- START SECTION FIRST POST OF PRESENTATION ----------------------->
      <section class="container-text-presentation">
        
        <div class="row">
          <div class="col">
            <div class="card h-100">
              <img src="https://fakeimg.pl/300x300" class="card-img-top" alt="...">
            </div>
          </div>
          <div class="col-md-8">

            <h3>Laboratório de Geoprocessamento e SIG </h3>
            <h5>Desvendando o Mundo com Tecnologia</h5>

              <p>Um laboratório de geoprocessamento e SIG (Sistemas de Informação Geográfica) é um centro de inteligência espacial, onde dados geoespaciais ganham vida e revelam os segredos do nosso planeta. Através de softwares sofisticados e técnicas inovadoras, esses laboratórios transformam informações sobre o mundo em ferramentas poderosas para a tomada de decisões.</p>
              
              <p>No coração do laboratório, encontra-se a coleta e o processamento de dados. Imagens de satélite, mapas digitais, dados de GPS e sensores – todos se unem em um mosaico de informações, revelando a topografia da Terra, a cobertura vegetal, a infraestrutura urbana e muito mais.</p>
              
              <p>Com esses dados em mãos, os especialistas em geoprocessamento e SIG embarcam em uma jornada de análise e descobertas. Através de técnicas avançadas, como modelagem espacial e análise estatística, eles desvendam padrões, identificam tendências e respondem a perguntas cruciais sobre o nosso planeta.</p>
              
              <p>O resultado final? Mapas temáticos, gráficos informativos e modelos geoespaciais que traduzem dados complexos em insights visuais, fornecendo informações valiosas para diversos setores da sociedade. Seja para monitorar o desmatamento na Amazônia, planejar o crescimento urbano ou otimizar o trajeto de entregas, os laboratórios de geoprocessamento e SIG estão na vanguarda da tecnologia, moldando um futuro mais sustentável e inteligente para o nosso planeta.</p>

          </div>
        </div>
      </section>
    <!------------------------------------------------------------------->  
    <!-- START SECTION LINKS LIBRARY ------------------------------------>
      <section class="container-highlights">
        <div class="row row-cols-1 row-cols-md-4 g-3">
          <div class="col">
            <div class="card h-100">
              <img src="https://fakeimg.pl/300x300" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Biblioteca</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
              <div class="card-footer">
                <small class="text-body-secondary"><a href="">Ler mais...</a></small>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="https://fakeimg.pl/300x300" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Vídeos</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              </div>
              <div class="card-footer">
                <small class="text-body-secondary"><a href="">Ler mais...</a></small>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="https://fakeimg.pl/300x300" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Filmes</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
                <div class="card-footer">
                    <small class="text-body-secondary"><a href="">Ler mais...</a></small>
                </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="https://fakeimg.pl/300x300" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Cursos</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
              </div>
              <div class="card-footer">
                <small class="text-body-secondary"><a href="">Ler mais...</a></small>
              </div>
            </div>
          </div>
        </div>
        
      </section>    
    <!------------------------------------------------------------------->
  </main>

<footer class="footer container-fluid">
    <div class="col-md-12"> <!-- social media ---------------->
      <div class="row social-links">
        <div class="col-md-12">
          <ul>
            <li class="list-item"><a href="#"><i class="fab fa-facebook-square fa-xl"></i></a></li>
            <li class="list-item"><a href="#"><i class="fab fa-instagram-square fa-xl"></i></a></li>
            <li class="list-item"><a href="#"><i class="fab fa-whatsapp-square fa-xl"></i></a></li>
            <li class="list-item"><a href="#"><i class="fab fa-linkedin fa-xl"></i></a></li>
          </ul>
        </div>
      </div>
    </div> <!-------fim redes sociais ---------------------------->
    <div class="row">
      <div class="col-md-12">
        <h6 class="text-center">
          Copyright&copy; Laboratório de Geoprocessamento e SIG 2024. Todos direitos reservados.
        </h6>
      </div>
    </div>
  </footer>

  <!-- js bootstrap CDN -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <!-- jquery CDNJS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
</html>
