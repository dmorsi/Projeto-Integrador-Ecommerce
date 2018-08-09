<?php
// definindo as variáveis com valor vazio
require "caddados.php";

session_start();

$enderecoErr  = $BairroErr   = $cepErr    = $estadoErr = $sobrenomeErr="";
$complemento = $pais = $senha = $bairro = $cidade = "";
$cep = $estado = $data_nascimento = "";

$novidades   = $_POST["novidades"];
$endereco    = $_POST["endereco"];
$complemento = $_POST["complemento"];
$bairro      = $_POST["bairro"];
$cep         = $_POST["cep"];
$cidade      = $_POST["cidade"];
$pais        = $_POST["pais"];
$estado      = $_POST["estado"];
$idusuario   = $session["idusuario"]

$cadender = new cadender($endereco,$complemento,$bairro,$cep,$pais,$cidade,$estado,$Idusuario);
//VAR_DUMP($cadender);
$IdEndder = $cadender->salvarDados();

?>
