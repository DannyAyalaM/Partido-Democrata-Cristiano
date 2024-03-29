<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="es">

<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-180639236-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-180639236-1');
  </script>
  <title>Nosotros - PDC en el mundo</title>
  <meta name="robots" content="index, follow">
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <link rel="icon" href="../images/logito.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="../css/fuentes.css">
  <link rel="stylesheet" href="../css/fonts.css">
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <div class="page">
    <header class="page-head">

      <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-default" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="53px" data-xl-stick-up-offset="53px" data-xxl-stick-up-offset="53px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
          <div class="rd-navbar-inner">

            <?php require('../view/header.php'); ?>

            <div class="rd-navbar-group">
              <div class="rd-navbar-panel">
                <a class="rd-navbar-brand brand" href="../index.php"><img src="../images/logo.webp" alt="logo del PDC" width="100px" class="opacidad" /></a>
              </div>
              <div class="topnav" id="myTopnav">
                <a href="../index.php">Inicio</a>
                <div class="dropdown activo">
                  <button class="dropbtn">Nosotros
                    <i class="fa fa-caret-down"></i>
                  </button>
                  <div class="dropdown-content">
                    <a href="quienesomos.php">Quienes Somos</a>
                    <a href="autoridades.php">Autoridades</a>
                    <a href="organigrama.php">Organigrama</a>
                    <a href="pdcmundo.php" class="activo">PDC en el mundo</a>
                  </div>
                </div>
                <a href="../estatuto.php">Estatuto</a>
                <div class="dropdown">
                  <button class="dropbtn">Electoral
                    <i class="fa fa-caret-down"></i>
                  </button>
                  <div class="dropdown-content">
                    <a href="../electoral/sala-electoral.php">Sala Electoral</a>
                  </div>
                </div>
                <div class="dropdown">
                  <button class="dropbtn">Prensa
                    <i class="fa fa-caret-down"></i>
                  </button>
                  <div class="dropdown-content">
                    <a href="../prensa/noticias.php">Noticias</a>
                    <a href="../prensa/galeria.php">Galeria</a>
                    <a href="../prensa/documentos.php">Documentos</a>
                  </div>
                </div>
                <a href="../contactos.php">Contacto</a>
                <a href="#" style="height: 57px;" class="icon" onclick="myFunction()">&#9776;</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>

    <section class="section-30 section-md-40 section-lg-66 section-xl-bottom-90 bg-gray-dark page-title-wrap" style="background-image: url(../images/banner-pdcmundo.webp);">
      <div class="container">
        <div class="page-title">
          <h2>PDC en el mundo</h2>
        </div>
      </div>
    </section>

    <section class="section-35 section-md-50">
      <div class="container">
        <h3>ODCA</h3>
        <div class="row row-30 flex-row-md-reverse justify-content-lg-between">
          <div class="col-md-6">
            <figure><img src="../images/pdcmundo1.webp" alt="ODCA" width="570" height="386" />
            </figure>
          </div>
          <div class="col-md-6">
            <div class="inset-lg-right-40 inset-xl-right-85 text-secondary">
              <p>El PDC por medio de sus principios humanistas cristianos, forma parte de la Organización Demócrata Cristiana de América (ODCA).</p>
              <p>La ODCA es una organización política internacional conformada por partidos políticos, agrupaciones y asociaciones del continente americano, que comparten los principios del humanismo cristiano, y que trabajan coordinadamente por el desarrollo integral de la persona humana, la libertad, la democracia, los derechos humanos, el desarrollo con equidad, el respeto al medio ambiente y la paz mundial. </p>
              <div class="button-wrap inset-md-left-70"><a class="button button-responsive button-medium button-primary-outline-v2" href="http://www.odca.cl/" target="_blank">Ver mas</a></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-35 section-md-50">
      <div class="container">
        <h3>KAS</h3>
        <div class="row row-30 justify-content-lg-between">
          <div class="col-md-6">
            <figure><img src="../images/pdcmundo2.webp" alt="KAS" width="570" height="386" />
            </figure>
          </div>
          <div class="col-md-6">
            <div class="inset-lg-left-40 inset-xl-left-70 text-secondary">
              <p>Por medio de la ODCA, nuestro partido también se encuentra ligado a la Fundación Konrad Adenauer (KAS).</p>
              <p>La KAS es una fundación política alemana creada por la Unión Demócrata Cristiana de Alemania para fomentar a nivel mundial los ideales demócrata cristianos y socialcristianos. Comprometida a nivel nacional e internacional a fomentar los principios de Paz, Libertad y Justicia a través de la educación cívica y formación política. Promoviendo y preservando la democracia liberal, la economía social de mercado y el desarrollo y la consolidación de un consenso de valores.</p>
              <div class="button-wrap inset-md-left-70"><a class="button button-responsive button-medium button-primary-outline-v2" href="https://www.kas.de/es/" target="_blank">Ver mas</a></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-35 section-md-50">
      <div class="container">
        <h3>Fotos ODCA</h3>
        <div class="row row-30 flex-row-md-reverse justify-content-lg-between">
          <div class="col-md-6">
            <figure><img src="../images/pdcmundo3.webp" alt="fotos ODCA" width="570" height="386" />
            </figure>
          </div>
          <div class="col-md-6">
            <div class="inset-lg-right-40 inset-xl-right-85 text-secondary">
              <p>En el año 2015 la Juventud Democrática Cristiana de América (JODCA), se reunió en San José - Costa Rica.</p>
              <p>Con el objetivo de alegir a la Directiva que actualmente es presidida por Henry Salazar del Partido Unidad Social Cristiana de Costa Rica y de la cual forma parte como Encargada de la Secretaria de Integración e Igualdad, la actual presidenta de la Juventud del PDC de Paraguay, Lic. Alba María Cristaldo.</p>
              <div class="button-wrap inset-md-left-70"><a class="button button-responsive button-medium button-primary-outline-v2" href="../prensa/galeria.php" target="_blank">Ver mas</a></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php require('../view/footer.php'); ?>

    <div class="snackbars" id="form-output-global"></div>
    <script src="../js/core.min.js"></script>
    <script src="../js/script.js"></script>
</body>

</html>