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

function __construct() {
   global $usulog;
   $usulog='';
}
class produtoController extends Controller
{


    public function exibirformulario() {

      return(view('categorias'));
    }
    public function exibircadcategorias() {
      $categorias = categorias::all();  //mostra as categorias já cadastradas
      return(view('cadcategorias'))->with('categorias',$categorias);
    }

    public function exibirdrone() {

      global $usulog;
      $usulog='';
      $categorias = categorias::all();  //mostra as categorias já cadastradas
      return(view('drone'))->with('categorias',$categorias);
    }

    public function gravacadcategorias(Request $request) {
      //Procura se a descrição já existe na base de dados
      $categoria = categorias::where('descrição',$request->input('descrição'))->get();

      if (sizeof($categoria) == 0) //Senão encontrar retorna array vazio
      { //então cria registro novo
      $this->validate($request,['descrição' => 'required|max:60|unique:categorias',
                                'texto_descritivo' => 'required']
                                );
        $categoria = categorias::create([
          'descrição' => $request->input('descrição'),
          'texto_descritivo' => $request->input('texto_descritivo')]
          );
          $sucessocategoria = $categoria->save();
      } else { //senão altera o campo texto_descritivo
        $this->validate($request,['texto_descritivo' => 'required']
        );
        $categoriaalt = categorias::find($categoria[0]->idcategorias)->update(['texto_descritivo' => $request->input('texto_descritivo')]);

      }
      $categorias = categorias::all();
      return(view('cadcategorias'))->with('categorias',$categorias);
    }

    public function exibecadtexto($descricao)
    {
       $categoria = categorias::where('descrição',$descricao)->get();
       //return json_encode($categoria);
       return $categoria[0]->texto_descritivo ;
    }
    public function gravafabricantes(Request $request) {

      $this->validate($request,['Nomedofabricante' => 'required|max:60|unique:fabricantes',
                                'paisdeOrigem' => 'required']
                                );

      $categoria = fabricantes::create([
        'Nomedofabricante' => $request->input('Nomedofabricante'),
        'paisdeOrigem' => $request->input('paisdeOrigem')]
      );
      $sucessocategoria = $categoria->save();
      $categorias = categorias::all();  //mostra as categorias já cadastradas
      return(view('cadfabricante'))->with('categorias',$categorias);
    }
}
