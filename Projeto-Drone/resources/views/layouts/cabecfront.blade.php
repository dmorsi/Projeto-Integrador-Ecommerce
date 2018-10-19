<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <title>Drone Solution</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link href="{{ url('css/estilos.css') }}" rel="stylesheet" type="text/css" />
    <!--<link rel="stylesheet" href="estilos.css">
    -->
  </head>
  @csrf
  <body>

    <header id="logo" class="text-center">
      <p class="usuario" id=usulog>
      @if(isset($usulog))
        <?php  echo('Usuario :'.$usulog) ?>
        
        @else
          <?php global $usulog;
          $usulog=''; ?>
      @endif
      </p>
      <h1 class="destaque">DronesDigital</h1>
      <a href="/#logo"><img src="{{ url('imagens/DronesDigital.png') }}" class="logo" alt="logosite" width=100px height="" /></a>
      <div class="row">
        <img src="imagens/barcelona.jpg" class="fundodesk col-4" alt="imagemfundo">
        <img src="imagens/canyons.png" class="fundodesk col-4" alt="imagemfundo">
        <img src="imagens/starnbergersee.jpg" class="fundodesk col-4" alt="imagemfundo">
      </div>




      <ul class="ul row" style="list-style-type: none;">
        <li class="limenu col-9 col-md-2"><a class="menu" href="\#sobre" id="link1">Sobre</a></li>
        <li class="limenu col-9 col-md-2"><a class="menu" href="produto" id="link2">Produtos</a></li>
        <li class="limenu col-9 col-md-2"><a class="menu" href="\#FAQ" id="link3">FAQ</a></li>
        <li class="limenu col-9 col-md-2"><a class="menu" href="login" id="link4">Login</a></li>
        <li class="limenu col-9 col-md-2"><a class="menu" href="cadastro" id="link5">Cadastro</a></li>
      </ul>

    </header>
    <main class="py-4">
        @yield('content')
    </main>
    <footer class="text-center">
      <a href="#logo"> <img src="imagens/DronesDigital.png" class="logobaixo" alt="logosite" width=100px height=""> </a>
        <div class="contato">
          <p>Telefone para contato: 0922-4-8893 / 209309--03</p>
          <p>Email: dronedigital@gmail.com</p>
          <p>Localização: Av. Monteiro Lobato, 92</p>
        </div>
    </footer>
  </body>
