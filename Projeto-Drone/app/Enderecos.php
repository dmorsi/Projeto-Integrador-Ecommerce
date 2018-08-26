<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enderecos extends Model
{
  protected $table = "enderecos";
  protected $fillable = ['CEP','endereco','complemento','bairro','estado','pais','cidade','fk_idusuarios']
    //
}
