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
    public function exibircadcategorias() {
      return(view('cadcategorias'));
    }
    public function gravacadcategorias(Request $request) {

      $this->validate($request,['descrição' => 'required|max:60|unique:categorias',
                                'texto_descritivo' => 'required']
                                );
      
      $categoria = categorias::create([
        'descrição' => $request->input('descrição'),
        'texto_descritivo' => $request->input('texto_descritivo')]
      );
      $sucessocategoria = $categoria->save();
      echo('Gravado !');
    }
}
