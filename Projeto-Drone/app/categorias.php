<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categorias extends Model
{
  protected $primaryKey = 'idcategorias';
  protected $table = "categorias";
  protected $fillable = ['descrição','texto_descritivo'];
}
