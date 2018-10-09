<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cadastro de categorias</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('css/estilos.css') }}">
    <link rel="stylesheet" href="{{ url('css/cadastros.css') }}">
  </head>
  <body>
      <!-- '/cadcategorias' -->
      <h2>cadastro de categorias</h2>
      <br>
      <article class="esquerdo">
        <form id="form" class="produtos" method="post" action="/cadcategorias">
          @csrf
          categoria
          <br>
         <input id="descricao" type="text" name="descrição"></input>
         <br>
         descricao
         <br>
         <textarea id="texto_descritivo" rows = "4" cols = "50" name="texto_descritivo"></textarea>


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
        </form>
      </article>
      <article class="direito">
       @foreach($categorias as $categoria)
        <h4>{{$categoria->idcategorias}}&nbsp
        {{$categoria->descrição}}&nbsp</h4>
       {{$categoria->texto_descritivo}}
       <hr>
       @endforeach
       </article>
       <script>

          descricao.addEventListener("blur",function(){
            let xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
              if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
              texto_descritivo.value = xmlhttp.responseText;
                //Meu código
              }
            };
            xmlhttp.open("GET", "exibecadtexto/"+descricao.value, true);
            xmlhttp.send();

          });

      </script>
  </body>
</html>
