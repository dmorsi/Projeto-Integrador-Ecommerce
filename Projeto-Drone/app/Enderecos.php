<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class enderecos extends Model
{
  protected $table = "enderecos";
  protected $fillable = ['CEP','endereco','complemento','bairro','estado','pais','cidade','fk_idusuarios'];
    //
}
