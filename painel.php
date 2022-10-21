<?php

include('verifica_login.php');
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="pt">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="Design Studio">
  <meta name="description" content="">
  <title>Página Inicial</title>
  <link rel="stylesheet" href="template/nicepage.css" media="screen">
  <link rel="stylesheet" href="template/Página-Inicial.css" media="screen">
  <script class="u-script" type="text/javascript" src="template/jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="template/nicepage.js" defer=""></script>
  <meta name="generator" content="Nicepage 4.20.1, nicepage.com">
  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
  <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">


  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="Página Inicial">
  <meta property="og:type" content="website">
</head>

<body data-home-page="Página-Inicial.html" data-home-page-title="Página Inicial" class="u-body u-xl-mode" data-lang="pt">
  <header class="u-clearfix u-header u-header" id="sec-1f6b">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <a href="https://www.agropago.com.br/" target="_blank" class="u-image u-logo u-image-1">
        <img src="imagens/logo.png" class="u-logo-image u-logo-image-1">
      </a>
      <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
        <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
          <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
            <svg class="u-svg-link" viewBox="0 0 24 24">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
            </svg>
            <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
              <g>
                <rect y="1" width="16" height="2"></rect>
                <rect y="7" width="16" height="2"></rect>
                <rect y="13" width="16" height="2"></rect>
              </g>
            </svg>
          </a>
        </div>
        <div class="u-nav-container">
          <ul class="u-nav u-unstyled u-nav-1">
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#" style="padding: 10px 20px;">Página Inicial</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#" style="padding: 10px 20px;">Sobre</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#" style="padding: 10px 20px;">Contato</a>
            </li>
          </ul>
        </div>
        <div class="u-nav-container-collapse">
          <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
            <div class="u-inner-container-layout u-sidenav-overflow">
              <div class="u-menu-close"></div>
              <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">Página Inicial</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">Sobre</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">Contato</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
        </div>
      </nav>
    </div>
  </header>
  <section class="u-align-center-xs u-clearfix u-palette-3-dark-3 u-valign-middle-xl u-section-1" src="" id="carousel_8432">
    <div class="u-expanded-width u-palette-3-base u-shape u-shape-rectangle u-shape-1"></div>
    <img class="u-image u-image-1" src="imagens/painel.jpeg">
    <div class="u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-container-style u-group u-white u-group-1">
      <div class="u-container-layout u-valign-middle u-container-layout-1">
        <h1 class="u-custom-font u-font-montserrat u-text u-text-palette-3-base u-title u-text-1">Olá, <?php echo $_SESSION['usuario']; ?></h1>
        <p class="u-large-text u-text u-text-variant u-text-2">Bem-vindo(a) ao sistema AGROPAGO <?php echo $_SESSION['nome']; ?> </p>
        <a href="logout.php" class="u-active-palette-5-light-1 u-border-0 u-btn u-button-style u-custom-font u-font-montserrat u-hover-palette-5-light-2 u-palette-3-light-1 u-btn-2">Sair</a>
      </div>
    </div>
  </section>


  <section class="u-backlink u-clearfix u-grey-80">
    <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
      <span>Website Templates</span>
    </a>
    <p class="u-text">
      <span>created with</span>
    </p>
    <a class="u-link" href="" target="_blank">
      <span>Website Builder Software</span>
    </a>.
  </section>

</body>

</html>