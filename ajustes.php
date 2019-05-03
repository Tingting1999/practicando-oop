<?php
include_once("controladores/validar_login.php");
include_once 'includes/head.php';
include_once 'controladores/validar_registro.php';
if($_POST){


}
?>

<title>Proyecto FloPaTin-Configuración</title>
</head>
<body class=body-perfil>
  <header id="tope" class="encabezado">
    <?php include_once 'includes/navbar_user.php'; ?>
  </header>

  <div class="container-fluid">
    <div class="contenedor_perfil">
      <section>
        <div class="maxwidth_configuracion">
            <!--foto de perfil-->
            <div class="card targeta_perfil">
              <div class="foto_usuario">
                <img src="imagenes/<?=$_SESSION["foto"];?>" class="card-img-top" alt="">
                <div class="p-0 formavatar">
                  <form  action="" method="POST">
                    <input type="hidden" name="form" value="form1">
                    <div class="archivo_edit">
                     <input type="file" name="foto" id="foto" value=" ">
                     <?php if(isset($errores["foto"])):?>
                       <span class="error_login">
                         <?php echo $errores["foto"];?>
                       </span>
                     <?php endif;?>
                    </div>
                    <button class="bottoneditar bottonavatar" type="submit">Editar</button>
                  </form>
                </div>
              </div>
              <div class="card-body cuadroperfil1 p-0">
                <div class="editar">
                  <h5 class="card-title"><?=$_SESSION["nombreUsuario"];?></h5>
                  <div class="p-0">
                  <form  action="" method="POST">
                    <input type="hidden" name="form" value="form2">
                    <input type="text" name="nombre-de-usuario" class="field editinput" value="">
                    <?php if(isset($errores["nombre-de-usuario"])):?>
                      <span class="error_login">
                        <?php echo $errores["nombre-de-usuario"];?>
                      </span>
                    <?php endif;?>
                    <button class="bottoneditar bottonnombre" type="submit">Editar</button>
                  </form>
                </div>
                </div>
              </div>
            </div>

        </div>
      </section>
    </div>
  </div>
  <?php include_once 'includes/footer.php' ?>
</body>
</html>
