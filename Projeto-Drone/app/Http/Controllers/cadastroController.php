<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\usuarios;

class cadastroController extends Controller
{
    public function exibirformulario(){
      return view('cadastro');
    }
    public function gravaformulario(Request $request){
      echo("Estou aqui !!!");
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
        'senha' => $request->input('senha'),
        'data_nasc' => $request->input('data_nasc'),
        'sexo' => $request->input('sexo'),
        'novidades' => $request->input('novidades')
      ]);

      $sucessousuario = $usuario->save();

      $endereco = enderecos::create([
        'endereco' => 'required',
        'complemento' => $request->input('complemento'),
        'bairro' => $request->input('bairro'),
        'cidade' => $request->input('cidade'),
        'estado' => $request->input('estado'),
        'pais'   => $request->input('pais'),
        'cep'    => $request->input('cep')
      ]);

      $sucessoendereco = $endereco->save();
    }
}
