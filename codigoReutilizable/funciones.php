<?php
function validarForm(){
  $arrayErrores = [];
  if (isset($_POST["nombre"])) {

    if (empty($_POST["nombre"])) {
      $arrayErrores["nombre"][] = "El campo nombre es obligatorio.";
    }else {
      if (strlen(trim($_POST["nombre"])) < 5) {
        $arrayErrores["nombre"][] = "El nombre debe tener 5 caracteres como minimo.";
      }
    }
  }

  if (isset($_POST["e-mail"])) {
    if (empty($_POST["e-mail"])) {
      $arrayErrores["e-mail"][] = "El campo email es obligatorio.";
    }else {
      if (!filter_var($_POST["e-mail"], FILTER_VALIDATE_EMAIL)) {
        $arrayErrores["e-mail"][] = "Este no es un email valido.";
      }
    }
  }

  if (isset($_POST["password"])) {
    if (empty($_POST["password"])) {
      $arrayErrores["password"][] = "El campo password es obligatorio.";
    }else {
      if (strlen(trim($_POST["password"])) < 7) {
        $arrayErrores["password"][] = "La contraseña debe tener una longitud mayor a 7 caracteres.";
      }
    }
  }

  if (isset($_POST["re-password"])) {
    if (empty($_POST["re-password"])) {
      $arrayErrores["re-password"][] = "El campo re-password es obligatorio.";
    }else {
      if ($_POST["password"] != $_POST["re-password"]) {
        $arrayErrores["re-password"][] = "Las contraseñas deben coincidir.";
      }
    }
  }
  return $arrayErrores;
}

//mantener datos
function persistirDato($dato, $array){
  if (isset($array[$dato])) {
    return "";
  }else {
    if (isset($_POST[$dato])) {
      return $_POST[$dato];
    }else{
      return "";
    }
  }
}

//Devolver errores
function imprimirErrores($dato, $array){
  $strErrores = "";
  if (isset($array[$dato])) {
    foreach ($array[$dato] as $error) {
      $strErrores = $strErrores . '<small class="text-danger">' . $error . '</small><br>';
    }
  }
  return $strErrores;
}
 ?>
