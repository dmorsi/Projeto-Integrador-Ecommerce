<!DOCTYPE html>

    @extends('layouts.cabecfront')

    @section('content')

    <section id="sobre" class="row">
      <h2 class="col-12"> Sobre </h2>
      <ul class="col-10 sobre">
        <li>
        <p>Um marketplace de drones para todos os gostos e finalidades!</p>
        <p>Fundado em 2018, a Drone Solutions nasceu a partir do sonho de seus fundadores em disseminar os veículos aéreos não tripulados para todos os entusiastas dessa tecnologia.</p>

        <p>Seja para o seu negócio ou hobby pessoal, nós temos o drone certo para você!</p>

        </li>
      </ul>
    </section>

    <section id="categorias" class="row">
      <h2 class="col-12"> Categorias </h2>
      <ul class="col-10 sobre">
        <article>
          @foreach($categorias as $categoria)
           <h4>{{$categoria->idcategorias}}&nbsp
           <a href="/produto#{{$categoria->descrição}}">{{$categoria->descrição}}&nbsp</a></h4>
          {{$categoria->texto_descritivo}}
          <hr>
          @endforeach
      </article>
      </ul>
    </section>

    <section id="produtos" class="row">
      <h2 class="col-12"> Produtos </h2>


      <img style='margin-left:70Px' width = "250px" height = "250px" src="imagens/agricutura/Matrice600.jpg" alt="matrice600 agro">
      <img style='margin-left:100Px' width = "250px" height = "250px" src="imagens/fotografia/KarmaLight.jpg" alt="KarmaLight foto">
      <img style='margin-left:90Px' width = "250px" height = "250px" src="imagens/hobby/U818APlus.jpg" alt="U818APlus hobby">
      <p></p>
      <ul class="col-10 FAQ">
        <p></p>
        <p>Produtos de diversas características e finalidades sempre com o melhor custo
          benefício para você.</p>
      </ul>
    </section>

    <section id="FAQ" class="row">
      <h2 class="col-12"> FAQ </h2>
      <ul class="col-10 FAQ">
        <li>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua?"</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
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




    @endsection

  </body>
  </html>
