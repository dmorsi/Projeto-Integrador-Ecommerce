<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
  protected $table = "usuarios";
  protected $fillable = ['nome','sobrenome','email','senha','data_nasc','sexo','novidades'];
}
