
<!-- 20180624 - Diogo - Código PHP para a validação dos dados-->


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
   <!-- 20180624 - Diogo - Código PHP para a validação dos dados-->
    <style>
    .error {color: #FF0000;}
    </style>
    <!-- 20180624 - Diogo - Código PHP para a validação dos dados-->
    <title>Cadastro</title>
    <meta nome="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('css/estilos.css') }}">
</head>


<body>
  <header id="logo" class="text-center">
    <h1 class="destaque">DronesDigital</h1>
      <img src="imagens/DronesDigital.png" class="logo" alt="logosite" width=100px height="" />
    <div class="row">
      <img src="imagens/barcelona.jpg" class="fundodesk col-4" alt="imagemfundo">
      <img src="imagens/canyons.png" class="fundodesk col-4" alt="imagemfundo">
      <img src="imagens/starnbergersee.jpg" class="fundodesk col-4" alt="imagemfundo">
    </div>


    <ul class="ul row" style="list-style-type: none;">
      <li class="limenu col-9 col-md-2"><a class="menu" href="#sobre" id="link1">Sobre</a></li>
      <li class="limenu col-9 col-md-2"><a class="menu" href="produto" id="link2">Produtos</a></li>
      <li class="limenu col-9 col-md-2"><a class="menu" href="#FAQ" id="link3">FAQ</a></li>
      <li class="limenu col-9 col-md-2"><a class="menu" href="login" id="link4">Login</a></li>
      <li class="limenu col-9 col-md-2"><a class="menu" href="cadastro" id="link5">Cadastro</a></li>
    </ul>
  </header>

  <!-- 20180624 - Diogo - Código PHP para a validação dos dados-->




<h2 class="cadastro">Login</h2>
<h3  class="opmenu">Dados para logar</h3>


<!-- 20180624 - Diogo - Alterar para imprimir os dados informados no arquivo imprimir.php
 antes:
form action='cadastro.php'-->

<!-- 20180624 - Diogo - Alteração de todos os nomes para valores com letras minúsculas-->

<form method="post" action="/login">
@csrf
  <!--<div class="limenu col-9 col-md-10" display: inline-block>-->
  <label class="opmenu">Email</label><input size="50px" type="email" name="email"  required>
  <!-- 20180624 - Diogo - Alterando type de text para "password" -->
  <label class="opmenu">Senha</label><input  type="password" name="senha" placeholder="Digite sua senha" required>
  @if (count($errors) > 0)
    <div class="alert alert-danger">
      <ul>
          <li>email/senha não cadastrado</li>
        </ul>
      </div>
      @endif

<br>
  <button class="opmenu" type="submit">Enviar</button>
<br>
<a class="opmenu" href="/">Voltar</a>

<footer class="text-center">
   <a href="#logo"> <img src="imagens/DronesDigital.png" class="logobaixo" alt="logosite" width=100px height=""> </a>
     <div class="contato">
       <p>Telefone para contato: 0922-4-8893 / 209309--03</p>
       <p>Email: dronedigital@gmail.com</p>
       <p>Localização: Av. Monteiro Lobato, 92</p>
     </div>
 </footer>
</body>
</html>
