
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




<h2 class="cadastro">Cadastro</h2>
<h3 class="cadastro">Dados pessoais</h3>
<a href="/">Voltar</a>

<!-- 20180624 - Diogo - Alterar para imprimir os dados informados no arquivo imprimir.php
 antes:
form action='cadastro.php'-->

<!-- 20180624 - Diogo - Alteração de todos os nomes para valores com letras minúsculas-->

<form method="post" action="/cadastro">
@csrf
<ul class="cadastro" style="list-style: none;">
  <!--<p><span class="error">* Campos Obrigatórios</span></p>-->
  <li class="limenu col-9 col-md-10" display: inline-block>
  <label>Título</label><select class="opmenu col-9 col-md-2" nome="titulo">
  <option value="Senhor">Senhor</option>
  <option value="Senhora">Senhora</option>
  <option value="Senhorita">Senhorita</option>
  <option value="Prezado">Prezado</option>
  <option value="Prezada">Prezada</option>
  <option value="Caro">Caro</option>
  <option value="Cara">Cara</option>
  </select>

  <label class="opmenu">Nome</label><input type="text" name="nome"  required>

  <label class="opmenu">Sobrenome</label><input type="text" name="sobrenome"  required>
<li class="limenu col-9 col-md-10">
  <label class="marginright">Email</label><input size="50px" type="email" name="email"  required>
  <label class="opmenu">Data de Nascimento</label><input type="date" name="data_nasc" required>
<br>
<br>
  <label>Sexo</label>
<input class="opmenu" type="radio" name="sexo" value="Masculino" required>Masculino
<input class="opmenu" type="radio" name="sexo" value="Feminino" required>Feminino
<!--<li class="opmenu col-9 col-md-10"><input type="radio" name="sexo" value="Outro" required>Outro
-->
  <!-- 20180624 - Diogo - Alterando type de text para "password" -->
<label class="opmenu">Senha</label><input class="opmenu" type="password" name="senha" placeholder="Digite sua senha" required>
</ul>
<h3 class="cadastro">Endereço</h3>
<ul class="cadastro" style="list-style: none;">
  <li class="opmenu col-9 col-md-10"><div width:20px>CEP<input class = "opmenu" type="text" size=10px name="cep"  required></div>
  <br>
  <li class="opmenu col-9 col-md-10"><div width:20px>Endereço<input class="opmenu" type="text" size=50px name="endereco" required>
  Complemento<input class="opmenu" type="text" name="complemento" ></div>
  <br>
  <li class="limenu col-9 col-md-10"><div width:20px>Bairro<input class="opmenu" type="text" name="bairro"  required>
  Cidade<input class="opmenu" type="text" name="cidade"  required>


  <label>Estado</label><select class="opmenu"  name="estado"  required>
    <option value="AC">Acre</option>
    <option value="AL">Alagoas</option>
    <option value="AM">Amazonas</option>
    <option value="BA">Bahia</option>
    <option value="CE">Ceará</option>
    <option value="DF">Distrito Federal</option>
    <option value="ES">Esiprito Santo</option>
    <option value="EX">Exterior</option>
    <option value="GO">Goias</option>
    <option value="MA">Maranhão</option>
    <option value="MG">Minas Gerais</option>
    <option value="MT">Mato Grosso</option>
    <option value="MS">Mato Grosso do Sul</option>
    <option value="PA">Pará</option>
    <option value="PB">Paraíba</option>
    <option value="PE">Pernambuco</option>
    <option value="PI">Piauí</option>
    <option value="PR">Paraná</option>
    <option value="RJ">Rio de Janeiro</option>
    <option value="RN">Rio Grande do Norte</option>
    <option value="RO">Rondonia</option>
    <option value="RR">Roraima</option>
    <option value="RS">Rio Grande do Sul</option>
    <option value="SC">Santa Catarina</option>
    <option value="SE">Sergipe</option>
    <option value="SP">São Paulo</option>
    <option value="TO">Tocantins</option>
  </select>
  </div>
  <li class="limenu col-9 col-md-10"><div width:20px>País<input class="opmenu" type="text" name="pais"  required></div>

</ul>
<label>
  <input type="checkbox" name="novidades" value="sim" checked class="cadastro">Desejo receber ofertas e novidades da Drone Solution!
</label>
@if (count($errors) > 0)
  <div class="alert alert-danger">
     <ul>
         @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
     </ul>
  </div>
@endif

<br>
  <button type="submit">Enviar</button>
  <button class="cadastro" type="reset" formaction="/cadastro">Reiniciar</button>
<br>
<a href="/">Voltar</a>

<script type="text/javascript" source="{{ URL::asset('js/rodape.js') }}" >


</script>

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
