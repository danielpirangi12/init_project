<?php
    require_once("_globals.php");
    require_once("_db.php");
    require_once("dao/UserDAO.php");
    require_once("models/Message.php");

    $message = new Message($BASE_URL);

    $flassMessage = $message->getMessage();

    if(!empty($flassMessage["msg"])) {
      //limpar mensagem
      $message->clearMessage();
      
    }

    //verificar se o usuario está logado
    $userDao = new UserDAO($conn, $BASE_URL);
    $userData = $userDao->verifyToken(false);

    // print_r($userData); exit;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="shortcut icon" href="<?= $BASE_URL ?>img/icons/globo40x40px.svg" type="image/x-icon">
    <!-- css bootstrap --> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"/>
    <!-- icons fontawesome --><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.css" integrity="sha512-tx5+1LWHez1QiaXlAyDwzdBTfDjX07GMapQoFTS74wkcPMsI3So0KYmFe6EHZjI8+eSG0ljBlAQc3PQ5BTaZtQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css GERAL --> <link rel="stylesheet" href="css/classroom.css"/>
</head>
<body>

<!------- SIDEBAR LATERAL ESQUERDA, COM DADOS DO USUARIO E MENU INTERATIVO ----------------------------------->
  <header>
    <button class="btn btn-primary btn-fixed" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="fa-solid fa-bars"></i></button> <!--open sidebar-->
        <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
          <div class="offcanvas-header">
            <!------ INICIO DADOS DO PERFIL LOGADO NO SYSTEMA ------------------------------------------------->
              <div class="col-md-12">
                <!--close sidebar------>
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    <div class="row">
                      <div class="col-md-6">
                        <img alt="Bootstrap Image Preview" src="https://www.layoutit.com/img/sports-q-c-140-140-3.jpg" class="rounded-circle" />
                      </div>
                      <div class="col-md-6 txt-user-load-col">
                        <ul class="txt-user-load-line">
                          <li class="user-name-load">Daniel Pirangi</li>
                          <li>Visitante</li>
                          <li>Geografia</li>
                          <li>Manhã</li>
                          <?php if($userData):?> <li><i class="fa-solid fa-toggle-on" style="color: #63E6BE;"></i>Online</li>
                            <?php else: ?>
                                <?php endif?>
                        </ul>
                      </div>
                    </div>
              </div>
            <!---------------------------------------------------------------------------------------------------------------------------------------->        
          </div>
            <div class="offcanvas-body">
              <ul class="list-group list-group-flush">
                <a href=""><li class="list-group-item"><i class="fa-solid fa-house" style="color: #44BEF1;"></i>Home</li></a>
                <a href="#" class="page-btn" data-page="profile.php"><li class="list-group-item"><i class="fa-solid fa-user" style="color: #44BEF1;"></i>Perfil</li></a>
                <a href="#" class="page-btn" data-page="activities.php"><li class="list-group-item"><i class="fa-solid fa-book" style="color: #44BEF1;"></i>Atividades</li></a>
                <a href="#" class="page-btn" data-page="videos.php"><li class="list-group-item"><i class="fa-solid fa-film" style="color: #44BEF1;"></i>Videos</li></a>
                <a href="#" class="page-btn" data-page="downloads.php"><li class="list-group-item"><i class="fa-solid fa-briefcase" style="color: #44BEF1;"></i>Downloads</li></a>
                <a href="#" class="page-btn" data-page="gallery.php"><li class="list-group-item"><i class="fa-solid fa-image" style="color: #44BEF1;"></i>Galeria</li></a>
                <a href="#" class="page-btn" data-page="contacts.php"><li class="list-group-item"><i class="fa-solid fa-envelope" style="color: #44BEF1;"></i>Contatos</li></a>
                <a href="#" class="page-btn" data-page="preferences.php"><li class="list-group-item"><i class="fa-solid fa-gear" style="color: #44BEF1;"></i>Preferências</li></a>
                <a href="<?= $BASE_URL ?>_logout.php"><li class="list-group-item"><i class="fa-solid fa-right-from-bracket" style="color: #44BEF1;"></i>Sair</li></a>
              </ul>
            </div>

          <!------- INICIO DO RODAPE DA SIDEBAR -------------------------------------->
          <footer class="footer position-absolute bottom-0">
                <div class="col-md-12"> 
                  <!------------- social media ---------------->
                    <div class="row social-links">
                        <div class="col-md-12">
                          <ul>
                            <li class="list-item">
                              <a href="#"><i class="fab fa-facebook-square fa-xl"></i></a>
                            </li>
                            <li class="list-item">
                              <a href="#"><i class="fab fa-instagram-square fa-xl"></i></a>
                            </li>
                            <li class="list-item">
                              <a href="#"><i class="fab fa-whatsapp-square fa-xl"></i></a>
                            </li>
                            <li class="list-item">
                              <a href="#"><i class="fab fa-linkedin fa-xl"></i></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div> 
                  <!-------fim redes sociais ---------------------------->
                <div class="row">
                  <div class="col-md-12">
                    <h6 class="text-center">
                      Copyright&copy; Laboratório de Geoprocessamento e SIG 2024. Todos direitos reservados.
                    </h6>
                  </div>
                </div>
          </footer>
      </div>
  </header>

