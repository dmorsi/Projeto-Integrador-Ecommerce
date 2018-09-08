<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dadostecnicosdrone extends Model
{
  protected $table = "dadostecnicosdrone";
  protected $fillable = ['peso','potenciaKW','motores','alturamm','larguramm',
  'comprimentomm','DiamHelicemm','cargautilgramas','autonomia'];
    //
}
