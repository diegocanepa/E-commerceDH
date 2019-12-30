<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["e-mail"]);
unset($_SESSION["foto"]);
unset($_SESSION["indice"]);
header('Location: form-login.php');
 ?>
