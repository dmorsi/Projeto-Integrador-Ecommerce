
<!-- 20180624 - Diogo - Código PHP para a validação dos dados-->


<!DOCTYPE html>
@extends('layouts.cabecfront')

@section('content')


<h2 class="cadastro">Login</h2>
<h3  class="opmenu">Dados para logar</h3>


<!-- 20180624 - Diogo - Alterar para imprimir os dados informados no arquivo imprimir.php
 antes:
form action='cadastro.php'-->

<!-- 20180624 - Diogo - Alteração de todos os nomes para valores com letras minúsculas-->
<?php $usulog='' ?>
<form method="post" action="/login">
@csrf
  <!--<div class="limenu col-9 col-md-10" display: inline-block>-->
  <label class="opmenu">Email</label><input id = email size="50px" type="email" name="email"  required>
  <!-- 20180624 - Diogo - Alterando type de text para "password" -->
  <label class="opmenu">Senha</label><input id = senha type="password" name="senha" placeholder="Digite sua senha" required>
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
@endsection

</body>
</html>
