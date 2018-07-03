
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
    <link rel="stylesheet" href="estilos.css">
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
      <li class="limenu col-9 col-md-2"><a class="menu" href="marcas.php" id="link2">Produtos</a></li>
      <li class="limenu col-9 col-md-2"><a class="menu" href="#FAQ" id="link3">FAQ</a></li>
      <li class="limenu col-9 col-md-2"><a class="menu" href="login.php" id="link4">Login</a></li>
      <li class="limenu col-9 col-md-2"><a class="menu" href="cadastro.php" id="link5">Cadastro</a></li>
    </ul>
  </header>

  <!-- 20180624 - Diogo - Código PHP para a validação dos dados-->
     <?php
    // definindo as variáveis com valor vazio

    session_start();
    $nomeErr = $emailErr = $genderErr = $websiteErr = "";
    $nome = $email = $sexo = $sobrenome = $endereco = $complemento = $pais = $senha = $bairro = $cidade = $cep = $estado = $data_nascimento = $titulo = $novidades = "";

// 20180624 - Diogo - Código PHP para a validação dos dados

  $_SESSION["email"] = $_POST["email"];
  $_SESSION["senha"] = $_POST["senha"];

  $_SESSION["senha"] = password_hash($_SESSION["senha"], PASSWORD_DEFAULT);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["nome"])) {
        $nomeErr = "Por favor informe um Nome";
      } else {
        $nome = test_input($_POST["nome"]);
        // verificar se o Nome contem apenas letras
        if (!preg_match("/^[a-zA-Z]*$/",$nome)) {
          $nomeErr = "Apenas letras podem ser utilizadas";
        }
      }

      if (empty($_POST["email"])) {
        $emailErr = "Por favor informe um e-mail";
      } else {
        $email = test_input($_POST["email"]);
        // verifica formato do email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Formato incorreto de e-mail";
        }
      }
      if (empty($_POST["senha"])) {
        } else {
        $senha = test_input($_POST["senha"]);
        // verificar se o Nome contem apenas letras
      }

        if (empty($_POST["sexo"])) {
        $genderErr = "Por favor selecione um sexo";
      } else {
        $sexo = $_POST["sexo"];
      }
    }

        if (!empty($email) && !empty($senha)){
          header("location:login.php");
          echo "Teste de Debug";
          exit;
        }

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    ?>
  <!-- 20180624 - Diogo - Código PHP para a validação dos dados-->



<h2 class="cadastro">Cadastro</h2>
<h3 class="cadastro">Dados pessoais</h3>


<!-- 20180624 - Diogo - Alterar para imprimir os dados informados no arquivo imprimir.php
 antes:
form action='cadastro.php'-->

<!-- 20180624 - Diogo - Alteração de todos os nomes para valores com letras minúsculas-->

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<ul class="cadastro" style="list-style: none;">
  <p><span class="error">* Campos Obrigatórios</span></p>
  <label>Título</label><li display: inline-block><select nome="titulo">
  <option value=”Senhor”>Senhor</option>
  <option value=”Senhora”>Senhora</option>
  <option value=”Senhorita”>Senhorita</option>
  <option value=”Prezado”>Prezado</option>
  <option value=”Prezada”>Prezada</option>
  <option value=”Caro”>Caro</option>
  <option value=”Cara”>Cara</option>
  </select>
<li>
  <label>Nome</label><br><input type="text" name="nome"  value="<?php echo $nome;?>"  required>
  <span class="error">* <?php echo $nomeErr;?></span>
<li>
  <label>Sobrenome</label><br><input type="text" name="sobrenome" value="<?php echo $sobrenome;?>" required>
  <span class="error">* <?php echo $nomeErr;?></span>
<li>
  <label>Email</label><br><input type="email" name="email" value="<?php echo $email;?>" required>
  <span class="error">* <?php echo $emailErr;?></span>
<li>
  <label>Data de Nascimento</label><br><input type="date" name="data_nascimento" value="<?php echo $data_nascimento;?>" required><br>
<label>Sexo</label>
<li><input type="radio" name="sexo" value="Masculino" required>Masculino
<li><input type="radio" name="sexo" value="Feminino" required>Feminino
<li><input type="radio" name="sexo" value="Outro" required>Outro

  <!-- 20180624 - Diogo - Alterando type de text para "password" -->
<li><label>Senha</label><br><input type="password" name="senha" value="<?php echo $password;?>" required>
</ul>
<h3 class="cadastro">Endereço</h3>
<ul class="cadastro" style="list-style: none;">
  <li>Endereço<br><input type="text" name="endereco" value="<?php echo $endereco;?>"required>
  <li>Complemento<br><input type="text" name="complemento" value="<?php echo $complemento;?>">
  <li>Bairro<br><input type="text" name="bairro" value="<?php echo $bairro;?>" required>
  <li>Cidade<br><input type="text" name="cidade" value="<?php echo $cidade;?>" required>
  <li>Estado<br><input type="text" name="estado" value="<?php echo $estado;?>" required>
  <li>País<br><input type="text" name="pais" value="<?php echo $pais;?>" required>
  <li>CEP<br><input type="text" name="cep" value="<?php echo $cep;?>" required>
</ul>
<label>
<input type="checkbox" name="novidades" value="sim" checked class="cadastro">Desejo receber ofertas e novidades da Drone Solution!</label>
<br>
<button class="cadastro" type=”submit”>Enviar</button>
<button class="cadastro"type=”reset”>Reiniciar</button>
<br>
<a href="index.html">Voltar</a>


<?php
 echo "<h2>Dados informados:</h2>";
 // echo $_POST["titulo"];
 echo "<br>";
 echo $nome;
 echo "<br>";
 echo $_POST["sobrenome"];
 echo "<br>";
 echo $_POST["email"];
 echo "<br>";
 echo $_POST["data_nascimento"];
 echo "<br>";
 echo $_POST["sexo"];
 echo "<br>";
 echo $_POST["endereco"];
 echo "<br>";
 echo $_POST["complemento"];
 echo "<br>";
 echo $_POST["bairro"];
 echo "<br>";
 echo $_POST["cidade"];
 echo "<br>";
 echo $_POST["estado"];
 echo "<br>";
 echo $_POST["pais"];
 echo "<br>";
 echo $_POST["cep"];
 echo "<br>";
 echo $_POST["novidades"];
?>


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
