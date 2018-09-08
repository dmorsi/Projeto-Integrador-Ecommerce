<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produtos extends Model
{
  protected $table = "produtos";
  protected $fillable = ['descricao','fk_idcategorias','fk_idfabricante',
  'fk_iddadostecnicosdrone'];
    //
}
