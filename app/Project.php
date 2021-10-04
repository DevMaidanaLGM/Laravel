<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

  protected $guarded =[];
  // Se deshabilita la protección que viene por defecto en laravel


  public function getRouteKeyname(){
    return('url');
  }
}
