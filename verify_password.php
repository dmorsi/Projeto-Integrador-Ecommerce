<?php
session_start();
$_SESSION ["email"];
$_SESSION ["senha"];

$email = $_POST ["email"];
$password = $_POST['senha'];

$hash = password_hash($password, PASSWORD_DEFAULT);

if ( $email === $_SESSION ["email"]){
  echo "Seu email é Válido";
} else {
  echo 'Seu email é inválido.';
}

if (password_verify($password, $_SESSION ["senha"])) {
    echo 'Sua Senha é valida';
} else {
    echo 'Sua senha está incorreta.';
}

 ?>
