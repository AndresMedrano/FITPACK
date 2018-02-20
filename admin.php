
<!DOCTYPE html>
<html lang="es">


<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="Encuentra las mejores ofertas para ir al Gimnasio. Acceso a cientos de entrenamientos con una sola membresía" />
  <meta name="keywords" content=" " />
  <title>Administrador | FitPack</title>

  <!-- Favicons-->
  <link rel="icon" href="https://fitpack.softech.com.ec/images/favicon.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="https://fitpack.softech.com.ec/images/favicon.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#C33F45">
  <meta name="msapplication-TileImage" content="https://fitpack.softech.com.ec/images/favicon.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <!-- Custome CSS-->
  <link href="css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">

  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="js/plugins/prism/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <!--Data Tables-->
  <!-- <link href="js/plugins/data-tables/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen,projection"> -->

</head>

<body>
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!--EMPIEZA CABECERA -->
  <header id="header" class="page-topbar">
        <!-- Empeiza header nav-->
        <div class="navbar-fixed">
            <nav class="navbar-color">
                <div class="nav-wrapper">
                  <!-- Logo FitPack  -->
                    <ul class="left">
                      <li><h1 class="logo-wrapper"><a href="admin.php" class="brand-logo darken-1"><img src="images/logo-fitpack.png" alt="FitPack Logo"></a> <span class="logo-text">Fitpack Administrador</span></h1></li>
                    </ul>

                    <!-- NOTIFICACIONES-->
                    <ul class="right hide-on-med-and-down">
                      <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                      </li>
                    </ul>
                    <!-- FIN NOTIFICACIONES -->
                </div>
            </nav>
        </div>
        <!-- Termina header nav-->
  </header>
  <!-- TERMINA CABECERA -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- EMMPIEZA MENU -->
  <div id="main">
    <!-- EMPIEZA WRAPPER -->
    <div class="wrapper">

      <!-- EMPIEZA LEFT SIDEBAR NAV-->
      <aside id="left-sidebar-nav">
        <ul id="slide-out" class="side-nav fixed leftside-navigation">
            <li class="user-details red darken-2">
            <div class="row">
                <div class="col col s4 m4 l4">
                    <img src="images/sample-1.jpg" alt="" class="circle responsive-img valign profile-image">
                </div>
                <div class="col col s8 m8 l8">
                    <ul id="profile-dropdown" class="dropdown-content">
                        <li><a href="#"><i class="mdi-action-face-unlock"></i> Perfil</a></li>
                        <li><a href="#"><i class="mdi-action-settings"></i> Config</a></li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="mdi-hardware-keyboard-tab"></i> Salir</a></li>
                    </ul>
                    <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">
                      <?php echo $login_session; ?><i class="mdi-navigation-arrow-drop-down right"></i></a>
                    <p class="user-roal">Administrador</p>
                </div>
            </div>
            </li>

            <li class="no-padding">
                <ul class="collapsible collapsible-accordion"></ul>
            </li>
                <ul class="collapsible collapsible-accordion">
                        <div class="collapsible-body">
                        </div>
                    </li>

                    <li class="bold"><a class="collapsible-header  waves-effect waves-red active"><i class="mdi-action-account-circle"></i> Dashboard</a>
                        <div class="collapsible-body">
                            <ul>
                                <li class="active"><a href="clientes.php">Todos los Clientes</a>
                                </li>
                                <li><a href="clientespago.php">Clientes Pagos</a>
                                </li>
                                <li><a href="clientesnopago.php">Clientes no Pagos </a>
                                </li>
                                <li><a href="reservas.php">Reservas </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="bold"><a class="collapsible-header  waves-effect waves-red"><i class="mdi-action-store"></i> Gimnasios </a>
                        <div class="collapsible-body">
                          <ul>
                              <li><a href="#">Todos los Gimnasios</a>
                              </li>
                              <li><a href="#">Gimnasios Quito</a>
                              </li>
                              <li><a href="#">Gimnasios Cumbaya </a>
                              </li>
                              <li><a href="#">Subir Clases</a>
                              </li>
                          </ul>
                        </div>
                    </li>
                    <li class="bold"><a class="collapsible-header  waves-effect waves-red"><i class="mdi-action-assessment"></i> Reportes </a>
                        <div class="collapsible-body">
                          <ul>
                              <li><a href="#">Reportes Clientes</a>
                              </li>
                              <li><a href="#">Reportes Aliados</a>
                              </li>
                          </ul>
                        </div>
                    </li>
                </ul>

            <li class="li-hover"><div class="divider"></div></li>
            <li class="li-hover"><p class="ultra-small margin more-text">Información</p></li>
            <li><a href="#"><i class="mdi-communication-live-help"></i> Ayuda</a></li>
            <li><a href="#"><i class="mdi-hardware-headset-mic"></i> Soporte Técnico</a></li>
        </ul>
        <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only red"><i class="mdi-navigation-menu"></i></a>
        </aside>
      <!-- TERMINA LEFT SIDEBAR NAV-->

      <!-- //////////////////////////////////////////////////////////////////////////// -->

      <!-- EMPIEZA CONTENIDO -->
      <section id="content">

        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper">
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">BIENVENIDOS AL SISTEMA DE ADMINISTRACIÓN</h5>
                <ol class="breadcrumbs">
                    <li class="active"><a href="admin.php"></a>Dashboard</li>
                    <!-- <li class="active">Todos los Clientes</li> -->
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->


        <!--start container-->
        <div class="container">
          <p class="caption"></p>
          <div class="divider"></div>

            <div class="row">
              <div class="col s12 m12 19">



                  <!--<div id="jsGrid-basic">-->
                </div>
                  <br>
              </div>

        <!--end container-->

      </section>
      <!-- TERMINA CONTENIDO -->

    </div>
    <!-- END WRAPPER -->

  </div>
  <!-- END MAIN -->



  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- EMPIEZA FOOTER -->
  <footer class="page-footer">
    <div class="footer-copyright">
      <div class="container">
        <span>Copyright © 2018 <a class="grey-text text-lighten-4" href="#" target="_blank">Fitpack</a> Todos los derechos reservados</span>
        <span class="right"> Desarrollado por: <a class="grey-text text-lighten-4" href="http://softech.com.ec">Softech Ecuador</a></span>
        </div>
    </div>
  </footer>
    <!-- TERMINA FOOTER -->



    <!-- ================================================
    Scripts
    ================================================ -->

    <!-- jQuery Library -->
    <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!--prism-->
    <script type="text/javascript" src="js/plugins/prism/prism.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- data-tables -->
    <!-- <script type="text/javascript" src="js/plugins/data-tables/js/jquery.dataTables.min.js"></script> -->
    <!-- <script type="text/javascript" src="js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/data-tables/data-tables-script.js"></script> -->
    <!-- chartist -->
    <script type="text/javascript" src="js/plugins/chartist-js/chartist.min.js"></script>

    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js"></script>
    <script type="text/javascript">
        /*Show entries on click hide*/
        $(document).ready(function(){
            $(".dropdown-content.select-dropdown li").on( "click", function() {
                var that = this;
                setTimeout(function(){
                if($(that).parent().hasClass('active')){
                        $(that).parent().removeClass('active');
                        $(that).parent().hide();
                }
                },100);
            });
        });
    </script>
</body>

</html>
