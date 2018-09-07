<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuarios;
use App\enderecos;
use App\produtos;
use App\categorias;
use App\fabricantes;
use App\pedidos;
use App\carrinho;
use App\dadostecnicosdrone;

class produtoController extends Controller
{
    public function exibirformulario() {
      return(view('categorias'));
    }
    //
}
