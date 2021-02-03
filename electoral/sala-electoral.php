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
  <title>Electoral - Sala Electoral</title>
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
                <div class="dropdown">
                  <button class="dropbtn">Nosotros
                    <i class="fa fa-caret-down"></i>
                  </button>
                  <div class="dropdown-content">
                    <a href="../nosotros/quienesomos.php">Quienes Somos</a>
                    <a href="../nosotros/autoridades.php">Autoridades</a>
                    <a href="../nosotros/organigrama.php">Organigrama</a>
                    <a href="../nosotros/pdcmundo.php">PDC en el mundo</a>
                  </div>
                </div>
                <a href="../estatuto.php">Estatuto</a>
                <div class="dropdown activo">
                  <button class="dropbtn">Electoral
                    <i class="fa fa-caret-down"></i>
                  </button>
                  <div class="dropdown-content">
                    <a href="sala-electoral.php" class="activo">Sala Electoral</a>
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

    <section class="section-30 section-md-40 section-lg-66 section-xl-bottom-90 bg-gray-dark page-title-wrap" style="background-image: url(../images/sala_electoral_banner.webp);">
      <div class="container">
        <div class="page-title">
          <h2>Sala Electoral</h2>
        </div>
      </div>
    </section>

    <section class="section-35 section-md-50">
      <div class="container">
        <ul class="list-group">
          <li class="list-group-item active" style="background: #255085;">Resoluciones</li>
          <li class="group-title list-group-item">
            <p><i class="fa">&#xf054;</i> Resolución TSJE Nº 22</p>
            <div class="lista">
              <div class="ver"><i style="color:#BF2110" class="fa">&#xf1c1;</i><a href="#" data-toggle="modal" data-target="#resolucion22">Ver</a></div>
              <div class="descargar"><i class="fa">&#xf019;</i><a href="http://www.pdc.org.py/files/sala-electoral/tsje22.pdf" download="Resolucion22.pdf">Descargar</a></div>
            </div>
          </li>
        </ul>
        <ul class="group-title list-group">
          <li class="list-group-item active" style="background: #255085;">Elecciones Internas del 20 de junio del 2021</li>
          <li class="group-title list-group-item">
            <p><i class="fa">&#xf054;</i> Cronograma</p>
            <div class="lista">
            <div class="ver"><i style="color:#BF2110" class="fa">&#xf1c1;</i><a href="#" data-toggle="modal" data-target="#cronograma">Ver</a></div>
            <div class="descargar"><i class="fa">&#xf019;</i><a href="http://www.pdc.org.py/files/sala-electoral/cronograma.pdf" download="Cronograma Elecciones 20-06-21.pdf">Descargar</a></div>
            </div>

          </li>
        </ul>
      </div>
    </section>

    <div id="resolucion22" class="modal fade" role="dialog" style="z-index: 9999;">
      <div class="modal-dialog modal-lg">

        <!-- Agenda de Paz-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title"><i style="color:#BF2110" class="fa">&#xf1c1;</i>Resolución TSJE Nº 22</h4>
          </div>
          <div class="modal-body">

            <embed src="http://www.pdc.org.py/files/sala-electoral/tsje22.pdf" frameborder="0" width="100%" height="500px">

            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div id="cronograma" class="modal fade" role="dialog" style="z-index: 9999;">
      <div class="modal-dialog modal-lg">

        <!-- Agenda de Paz-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title"><i style="color:#BF2110" class="fa">&#xf1c1;</i>Cronograma Elecciones Internas 20-06-2021</h4>
          </div>
          <div class="modal-body">

            <embed src="http://www.pdc.org.py/files/sala-electoral/cronograma.pdf" frameborder="0" width="100%" height="500px">

            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
          </div>

        </div>
      </div>
    </div>

    <?php require('../view/footer.php'); ?>

  </div>
  <div class="snackbars" id="form-output-global"></div>
  <script src="../js/core.min.js"></script>
  <script src="../js/script.js"></script>
  <script src="../js/mostrar_documento.js"></script>
</body>

</html>