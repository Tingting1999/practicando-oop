<?php include_once 'includes/head.php'; ?>
<title>Proyecto FloPaTin-Registración</title>
</head>
<body class=body_registro>
  <header id="tope" class="encabezado">
    <?php include_once 'includes/navbar.php'; ?>
  </header>

  <div class="contener-fluid">
    <form class="formulario1" action="" method="post">
      <h2>Create una cuenta para sociabilizar y aprender</h2>
      <label for="nombre" class="label1">Nombre</label>
      <input type="text" name="nombre" value="" class="field" required>

      <label for="apellido" class="label1">Apellido</label>
      <input type="text" name="apellido" value="" class="field" required>

      <label for="nombre de usuario" class="label1">Nombre de Usuario</label>
      <input type="text" name="nombre de usuario" class="field" value="" required>

      <label for="email" class="label1">Mail de referencia</label>
      <input type="email" name="email" value="" class="field" required>

      <label for="password" class="label1">Contraseña</label>
      <input type="password" name="password" value="" class="field"required>
      <small id="passwordHelpInline" class="text-muted smallpass">
      Utiliza ocho caracteres como mínimo con una combinación de letras, números y símbolos
      </small><br><br>

      <label for="reconfi-password" class="label1">Reconfirmación de la contraseña</label>
      <input type="password" name="reconfi-password" value="" class="field" required>

      <label for="nacimiento" class="label1">Fecha de nacimiento</label>
      <input type="date" name="nacimiento" value="" class="field" required>
      <div class="sexo">
           <label for="sex" class="label1">Sexo</label><br>
           <input type="radio" name="sex" value="M" class="sexo">Masculino <br>
           <input type="radio" name="sex" value="F" class="sexo">Femenino
      </div>
      <br>
         <div class="pais">
           <label for="pais" class="label1">Pais</label>
           <select class="" name="pais">
             <option hidden value="">Seleccione su país</option>
             <optgroup label="America">
               <option value="Ar">Argentina</option>
               <option value="Br">Brasil</option>
               <option value="EEUU">Estados Unidos</option>
               <option value="Ca">Canada</option>
               <option value="Col">Colombia</option>
               <option value="Ve">Venezuela</option>
             </optgroup>
             <optgroup label="Europa">
               <option value="RU">Reino Unido</option>
               <option value="Esp">España</option>
               <option value="po">Portugal</option>
               <option value="Fr">Francia</option>
               <option value="It">Italia</option>
               <option value="German">Alemania</option>
               <option value="Hol">Holanda</option>
               <option value="Din">Dinamarca</option>
             </optgroup>
             <optgroup label="Africa">
               <option value="Sa">Sudafrica</option>
               <option value="CM">Costa de Marfil</option>
               <option value="Ke">Kenia</option>
               <option value="Camerun">Camerun</option>
               <option value="Nigeria">Nigeria</option>
             </optgroup>
             <optgroup label="Asia">
               <option value="ArabiaS">Arabia Saudita</option>
               <option value="Armenia">Armenia</option>
               <option value="Camboya">Camboya</option>
               <option value="Ch">China</option>
               <option value="CS">Corea del Sur</option>
               <option value="CN">Corea del Norte</option>
               <option value="Japon">Japon</option>
               <option value="Taiwan">Taiwan</option>
             </optgroup>
           </select>
         </div>
         <br>
        <button type="submit" class="bottonacceder">Registrarme</button>
        <ul class="listadeRegistro">
          <li class="Login"><a href="index.php">Ahora logueate!</a></li>
          </ul>
        </form>
      </div>
    <?php include_once 'includes/footer.php' ?>
   </body>
   </html>
