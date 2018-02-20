
<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user_sys'])){
header("location: admin.php");
}
?>
<!DOCTYPE html>
<html lang="es">


<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="Encuentra las mejores ofertas para ir al Gimnasio. Acceso a cientos de entrenamientos con una sola membresía" />
  <meta name="keywords" content="Gimnasios, gimnasios en quito, gimnasios quito, gym quito, quito gym, gym, quito gimnasios, gimnasios quito, gym quito norte,gym cumbaya, gimnasio cumbaya, gimnasio crossfit quito spa quito-gimnasios en quito,gimnasios centro norte Quito, gimnasios la Carolina, Crossfit valle de los chillos, fitness, crossfit quito, 108 Yoga, Aerialfit,Westfit,Quipus,Absout Fitness,Hakan,Takana,The Salazar Standard,Twelve Fitness Club,Vertice Pole & Aerial Sports,Workout Gimnasio,PitucaFitwear,El Olam Sala Fitness,Energy Fitness Gym & Spa,Fitpack,Focus Fitness Studio,Stampa Spa,Centro de Fisioterapia y Rehabilitación Luis Rojas,Cristina CalderónNutricionista,Nutriactiva,Lic. Daniela Jiménez,Mommy Trainer,Casanas Gym,CrossFit 593 Center,BodyFit,Line Gym,Fit Up,Kratos CrossTraining,LB Tenis,Dharma Yoga,La Cueva,Muscle Up,Cultura Fitness Ec,Baile,Yoga,Fit Combat,Crossfit,30/30,Vinyasa Yoga,Calistenia,Pole Sport,All Cardio,Spinning,Kaiut Yoga,Pesas,Kroop,Step,Bailoterapia,C&C Training,Funcional,Fityoga,GAP-HIIT,Funcional training,Cardio Kickboxing,Spinning Recargado,Bailofit,Cardio Mix,Tonificación,Yoguilates,Pilates,Zumba,Insanity,Hatha Yoga,FocusSixpack,FocusTeamwork,HIIT,Focus Power,Cycling,Pole,TRX,Pesas/Cardio,Escalada,DragonFit,Gap" />
  <title>Administración Fitpack - Gimasios Quito</title>

  <!-- Favicons-->
  <link rel="icon" href="https://fitpack.softech.com.ec/images/favicon.png" sizes="32x32">
  <!-- Favicons-->
  <!-- <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png"> -->
  <link rel="apple-touch-icon-precomposed" href="https://fitpack.softech.com.ec/images/favicon.png">
  <!-- For iPhone -->
  <!-- <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png"> -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="https://fitpack.softech.com.ec/images/favicon.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->

  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->
    <link href="css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/layouts/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">

  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="js/plugins/prism/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">

</head>

<body class="white">
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->



  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <form class="login" action="#" method="post" autocomplete="off">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="images/logo-fitpack.png">
            <p class="center login-form-text">Iniciar Sesión</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input type="text" name="username"  id="username" required   autofocus> <!--pattern=[A-Za-z]-->
            <label for="username" class="center-align">Usuario</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input type="password" name="password" id="password" required  pattern=[A-Za-z0-9]{8,15}>
            <label for="password">Contraseña</label>
          </div>
        </div>
        <!-- <div class="row">
          <div class="input-field col s12 m12 l12  login-text">
              <input type="checkbox" id="remember-me" />
              <label for="remember-me">Recuerdame</label>
          </div>
        </div> -->

        <div class="row">
          <div class="input-field col s12">
            <button name="submit" type="submit" class="btn waves-effect waves-light col s12">Acceder</button>
          </div>
        </div>

        <div class="input-field col s12"> </div>
          <span><?php echo $error; ?></span>
        </div>
        <!-- <div class="row">
          <div class="input-field col s6 m6 l6">
            <p class="margin medium-small"><a href="page-register.html">Register Now!</a></p>
          </div>
          <div class="input-field col s6 m6 l6">
              <p class="margin right-align medium-small"><a href="page-forgot-password.html">Forgot password ?</a></p>
          </div>
        </div> -->

      </form>
    </div>
  </div>



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

      <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js"></script>

</body>

</html>
