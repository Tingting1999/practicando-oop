<?php

 function validar($datos){
   $errores=[];

   $nombre= trim($datos["nombre"]);
   if (empty($nombre)) {
      $errores["nombre"]="Complete el campo con su nombre";
   }

   $apellido= trim($datos["apellido"]);
   if (empty($apellido)) {
     $errores["apellido"]="Complete el campo con su apellido";
   }

   $nombreUsuario=trim($datos["nombre-de-usuario"]);
   if (empty($nombreUsuario)) {
     $errores["nombre-de-usuario"]= "Complete el campo con un nombre de usuario";
   }

   $email=trim($datos["email"]);
   if (empty($email)) {
     $errores["email"]="Complete su mail";
   }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
     $errores["email"]="Email invalido";
   }

   $password= trim($datos["password"]);
   $repassword= trim($datos["reconfi-password"]);
   if (empty($password)) {
     $errores["password"]="Complete su contraseña";
   }elseif (strlen($password)<8) {
     $errores["password"]="La contraseña debe tener minimo 8 caracteres";
   }elseif (!preg_match('´[a-z]´', $password)) {
     $errores["password"]="La contraseña deber contener al menos una letra";
   }elseif (!preg_match('´[0-9]´', $password)) {
     $errores["password"]="La contraseña deber contener al menos un numero";
   }elseif ($password!=$repassword) {
     $errores["reconfi-password"]="No coinciden las contraseñas";
   }
   return $errores;
 }

function persistir($campo){
  if (isset($_POST[$campo])) {
    return $_POST[$campo];
  }
}

function crearRegistro($datos){
  $usuario=[
    "nombre"=> $datos["nombre"],
    "apellido"=> $datos["apellido"],
    "nombreUsuario"=>$datos["nombre-de-usuario"],
    "email"=>$datos["email"],
    "password"=>password_hash($datos["password"], PASSWORD_DEFAULT)
  ];
  return $usuario;
}

function guardar($usuario){
  $jsusuario= json_encode($usuario);
  file_put_contents("usuarios.json", $jsusuario.PHP_EOL, FILE_APPEND);
}


 ?>
