<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Special+Elite" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merienda:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/master.css">
    <title>Log in</title>
  </head>
  <body class=body_juegos>
    <header id="tope" class="encabezado">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbarra">
        <img class="logo" src="img/logo1.png" alt="logo_proyecto">
        <h2>Proyecto FloPaTin</h2>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-md-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Login<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="formularioDeRegistracion.php">Registrarse<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="inicio.html">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="juego.html">Juegos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="perfil.html">Perfil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ayuda.html">Ayuda</a>
            </li>
          </ul>
        </div>
        <img class="logo d-none d-md-block" src="img/logo.png" alt="logo_proyecto">
      </nav>
      <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active slide1">
            <div class="posicion_texto">
              <h3>FloPaTin</h3>
              <p>Plataforma de preguntas y respuestas.</p>
            </div>
          </div>
          <div class="carousel-item slide2">
            <div class="posicion_texto">
              <h3>JUEGA</h3>
              <p>Compite con tus compañeros.</p>
            </div>
          </div>
          <div class="carousel-item slide3">
            <div class="posicion_texto">
              <h3>DIVIÉRTETE</h3>
              <p>Reta a otros y haz nuevos amigos.</p>
            </div>
          </div>
          <div class="carousel-item slide4">
            <div class="posicion_texto">
              <h3>APRENDE</h3>
              <p>¿Podrás ser quién lidere la tabla?</p>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="container-fluid">
      <form class="formlogin" action="" method="post">
        <h2>Log in</h2>
        <label for="usuario" class="label1">Usuario</label><br>
        <input type="text" name="usuario" value="" class="field"><br>
        <label for="email" class="label1">Correo electrónico</label><br>
        <input type="email" name="email" value="" class="field" placeholder="ejemplo@dominio.com"><br>
        <label for="pass" class="label1">Contraseña</label><br>
        <input type="password" name="pass" value="" class="field"><br>
        <div class="col-auto my-1">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="autoSizingCheck2">
            <label class="form-check-label label1" for="autoSizingCheck2">
              Recordame
            </label>
          </div>
        </div>
        <div class="olvidoPassword">
          <a href="#">
            <label for="olvido-su-contrasenia">¿Ólvido su contraseña?</label>
          </a>
        </div>
        <div class="col-auto my-1">
          <button type="submit" class="bottonacceder">Iniciar sesión</button>
        </div>
          <ul class="listadeRegistro">
            <li class="Registrese"><a href="formularioDeRegistracion.html">¿Todavía no estás registrados?</a></li>
          </ul>
    </form>
    </div>
    <footer class="footer">
      <div class="contenedorfooter mt-4">
      <section class="sectionfooter">
           <ul class="container-fluid list-unstyled list-inline mb-0">
             <li class="list-inline-item">
              <p>Juega ahora en</p>
              <a href="https://facebook.com" target="_blank">
                <button class="bottoniconos" type="button" name="buttonf">
                <img src="img/fb.png" alt="facebook"></button></a>
            </li>
            <li class="list-inline-item">
              <p>Siguenos en</p>
              <a href="https://twitter.com" target="_blank">
                <button class="bottoniconos" type="button" name="buttont">
                <img src="img/Twitter.png" alt="twitter"></button></a>
            </li>
            <li class="list-inline-item">
              <p>Descargalo en el</p>
              <a href="https://itunes.apple.com" target="_blank">
                <button class="bottoniconos" type="button" name="buttoni">
                <img src="img/apple.png" alt="itunes"></button></a>
            </li>
            <li class="list-inline-item">
              <p>Disponible en</p>
              <a href="https://play.google.com" target="_blank">
                <button class="bottoniconos" type="button" name="buttong">
                <img src="img/Androi.png" alt="play-google"></button></a>
            </li>
            <li class="list-inline-item">
              <p>Ir arriba</p>
              <a href="#tope">
                <button class="bottoniconos" type="button" name="buttoni">
                <img src="img/unicornio.jpg" alt="inicio"></button></a>
            </li>
          </ul>
          </section>
          <section class="copyright">
              <small>© 2019 <strong>Proyecto FloPaTin</strong>. ¿Todos los derechos reservados? Nah. Patente Pendiente.</small>
         </section>
       </div>
     </footer>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>

</html>
