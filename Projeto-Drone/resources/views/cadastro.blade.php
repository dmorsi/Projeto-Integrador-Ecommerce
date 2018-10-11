
<!-- 20180624 - Diogo - Código PHP para a validação dos dados-->


<!DOCTYPE html>
@extends('layouts.cabecfront')

@section('content')


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
<br>
<br>
<label class="opmenu">Senha</label><input  id = 'senha' class="opmenu" type="password" name="senha" placeholder="Digite sua senha" required>
<label class="opmenu">Confirma Senha</label><input id = 'csenha' class="opmenu" type="password" name="csenha" placeholder="Digite sua senha" required>
</ul>
<h3 class="cadastro">Endereço</h3>
<ul class="cadastro" style="list-style: none;">
  <li class="opmenu col-9 col-md-10"><div width:20px>CEP<input id="CEP" class = "opmenu" type="text" size=10px name="cep"  required></div>
  <br>
  <li class="opmenu col-9 col-md-10"><div width:20px>Endereço<input id="Endereco" class="opmenu" type="text" size=50px name="endereco" required>
  Complemento<input class="opmenu" type="text" name="complemento" ></div>
  <br>
  <li class="limenu col-9 col-md-10"><div width:20px>Bairro<input id="bairro"class="opmenu" type="text" name="bairro"  required>
  Cidade<input class="opmenu" id="cidade" type="text" name="cidade"  required>


  <label>Estado</label><select class="opmenu"  id="estado" name="estado"  required>
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
<label class="opmenu col-9 col-md-10">
  <input type="checkbox" name="novidades" value="sim" class="cadastro">&nbsp&nbspDesejo receber ofertas e novidades da Drone Solution!
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

    CEP.addEventListener("blur",function(){
      let xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
          let resposta = JSON.parse(xmlhttp.responseText);

          Endereco.value = resposta.logradouro;
          bairro.value = resposta.bairro;
          cidade.value = resposta.localidade;
          estado.value = resposta.uf;
          //console.log(JSON.parse(xmlhttp.responseText));

        }
      };
      let valor = xmlhttp.open("GET", "exibecep/"+CEP.value, true);

      xmlhttp.send();

    });
    csenha.addEventListener("blur",function(){
      if (senha.value == csenha.value) {
        alert('Senhas coincidem');
        }
        else {
          alert('Senhas não coincidem');
          csenha.value = '';
          senha.value = '';
        }
    })

  </script>
@endsection

</body>
</html>
