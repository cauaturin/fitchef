<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Fit Chef - Início</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo $url; ?>/fontawesome/css/all.css">
  <link rel="stylesheet" href="<?php echo $url; ?>/css/style.css">
</head>

<body>
  <header class="barranav">

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark barra">
    
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
        aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

        <div class="logo">
          <a class="nav-link" href="<?php echo $url; ?>/inicio"><img id="logo" src="<?php echo $url; ?>/img/logo.png" alt="LOGO"></a>
        </div>

        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

          <li class="nav-item px-3">
            <a class="nav-link" href="<?php echo $url; ?>/inicio">Início</a>
          </li>

          <li class="nav-item px-3">
            <a class="nav-link" href="<?php echo $url; ?>/porcoes">Monte seu prato</a>
          </li>

          <li class="nav-item px-3">
            <a class="nav-link" href="<?php echo $url; ?>/cardapio">Cardápio da Semana</a>
          </li>

          <li class="nav-item px-3">
            <a class="nav-link" href="<?php echo $url; ?>/quemsomos">Quem somos</a>
          </li>

          <li class="nav-item px-3">
            <a class="nav-link" href="<?php echo $url; ?>/contato">Contato</a>
          </li>

          <li class="nav-item px-3 ml-3">
            <a class="nav-link" href="<?php echo $url; ?>/login"><i class="fas fa-user-circle fa-2x"></i></a>
          </li>

          <li class="nav-item px-3 ml-3">
            <a class="nav-link" href="<?php echo $url; ?>/carrinho"><i class="fas fa-shopping-cart fa-2x"></i></a>
          </li>

        </ul>
        <form class="form-inline my-2 my-lg-0 buscasite">
          <input class="form-control mr-sm-2" type="search" placeholder="Buscar no site" aria-label="Search">
          <button type="button" class="btn btn-light">Buscar</button>
        </form>
      </div>
    </nav>
  </header>
  