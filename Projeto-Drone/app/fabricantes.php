<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fabricantes extends Model
{
  protected $table = "fabricantes";
  protected $fillable = ['idfabricantes','Nomedofabricante','paisdeOrigem'];
    //
}
