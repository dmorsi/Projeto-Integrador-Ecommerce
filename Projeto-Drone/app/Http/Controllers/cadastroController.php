<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\usuarios;
use App\enderecos;

class cadastroController extends Controller
{
    public function exibirformulario(){
      return view('cadastro');
    }
    public function gravaformulario(Request $request){

      $this->validate($request,['nome' => 'required',
                                'sobrenome' => 'required',
                                'email' => 'required',
                                'senha'=> 'required',
                                'data_nasc' => 'required',
                                'sexo' => 'required',
                                'endereco' => 'required',
                                'complemento' ,
                                'bairro' => 'required',
                                'cidade' => 'required',
                                'estado' => 'required',
                                'pais'   => 'required',
                                'cep'    => 'required',
                                'novidades' => 'required']);

      $usuario = usuarios::create([
        'nome' => $request->input('nome'),
        'sobrenome' => $request->input('sobrenome'),
        'email' => $request->input('email'),
        'senha' => password_hash($request->input('senha'),PASSWORD_DEFAULT),
        'data_nasc' => $request->input('data_nasc'),
        'sexo' => $request->input('sexo'),
        'novidades' => $request->input('novidades')
      ]);

      $sucessousuario = $usuario->save();

      $endereco = enderecos::create([
        'endereco' => $request->input('endereco'),
        'complemento' => $request->input('complemento'),
        'bairro' => $request->input('bairro'),
        'cidade' => $request->input('cidade'),
        'estado' => $request->input('estado'),
        'pais'   => $request->input('pais'),
        'CEP'    => $request->input('cep'),
        'fk_idusuarios' => $usuario->id,
      ]);

      $sucessoendereco = $endereco->save();
      echo('Gravado !');
    }
}
