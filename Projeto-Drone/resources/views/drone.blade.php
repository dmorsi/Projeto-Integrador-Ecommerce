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

  <body>

    <header id="logo" class="text-center">
      <h1 class="destaque">DronesDigital</h1>
        <img src="{{ url('imagens/DronesDigital.png') }}" class="logo" alt="logosite" width=100px height="" />
      <div class="row">
        <img src="imagens/barcelona.jpg" class="fundodesk col-4" alt="imagemfundo">
        <img src="imagens/canyons.png" class="fundodesk col-4" alt="imagemfundo">
        <img src="imagens/starnbergersee.jpg" class="fundodesk col-4" alt="imagemfundo">
      </div>


      <ul class="ul row" style="list-style-type: none;">
        <li class="limenu col-9 col-md-2"><a class="menu" href="#sobre" id="link1">Sobre</a></li>
        <li class="limenu col-9 col-md-2"><a class="menu" href="marcas.php" id="link2">Produtos</a></li>
        <li class="limenu col-9 col-md-2"><a class="menu" href="#FAQ" id="link3">FAQ</a></li>
        <li class="limenu col-9 col-md-2"><a class="menu" href="home" id="link4">Login</a></li>
        <li class="limenu col-9 col-md-2"><a class="menu" href="cadastro" id="link5">Cadastro</a></li>
      </ul>

    </header>

    <section id="sobre" class="row">
      <h2 class="col-12"> Sobre </h2>
      <ul class="col-10 sobre">
        <li>
        "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua" <br> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <br> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </li>
      </ul>
    </section>

    <section id="produtos" class="row">
      <h2 class="col-12"> Produtos </h2>
      <ul class="col-10">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </ul>
    </section>

    <section id="FAQ" class="row">
      <h2 class="col-12"> FAQ </h2>
      <ul class="col-10 FAQ">
        <li>
          <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua?"</p>
          <p>- Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </li>
        <br>
        <li>
          <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua?"</p>
          <p>- Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </li>
        <br>
        <li>
          <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua?"</p>
          <p>- Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </li>
        <br>
        <li>
          <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua?"</p>
          <p>- Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </li>
      </ul>
    </section>



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
