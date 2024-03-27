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
    // print_r($userData); 
    // exit;

?>


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

    <?php if(!empty($flassMessage["msg"])): ?>
    <div class="msg-container">
        <div class="msg <?= $flassMessage["type"] ?>"><?= $flassMessage["msg"]?></div>
      </div>
    <?php endif; ?>
