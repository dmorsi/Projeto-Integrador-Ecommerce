<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\usuarios;
use App\enderecos;

class loginController extends Controller
{
  public function exibirformulario(){
    return view('login');
  }

  public function versenha(Request $request){

    $this->validate($request,['email' => 'required|email|',
                              'senha'=> 'required',
                              ]);
    $usuario = usuarios::where('email','=',$request->input('email'))->get();
    if (sizeof($usuario) == 0)
    { echo("Usuario não encontrado !");
      return view('login');
    }
    //VAR_DUMP($request->input('email'));
    //VAR_DUMP($request->input('senha'));
    //echo($request->input('senha'));
    //echo($usuario[0]->senha);
    $valsenha = password_verify($request->input('senha'),$usuario[0]->senha);

    if ($valsenha === true){
      $usulog = $usuario[0]->nome." ".$usuario[0]->sobrenome;

      echo("logado com sucesso ".$usulog);
      return view('categorias');//->with([$usulog => $usuario[0]->nome." ".$usuario[0]->sobrenome]);
      } else {echo("verfique senha/nome");
      return view('login');
    }
    return view('categorias');
  }
}
