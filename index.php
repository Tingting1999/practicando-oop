<?php include_once 'includes/head.php'; ?>
<title>Proyecto FloPaTin-Login</title>
</head>
  <body class="body_login">
    <header id="tope" class="encabezado">
      <?php include_once 'includes/navbar.php'; ?>
      <?php include_once 'includes/carrusel.php'; ?>
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
              <li class="Registrese"><a href="formularioDeRegistracion.php">¿Todavía no estás registrados?</a></li>
            </ul>
      </form>
      </div>


    <?php include_once 'includes/footer.php' ?>
  </body>

</html>
