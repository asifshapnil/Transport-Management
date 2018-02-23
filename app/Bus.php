<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
  public function routes(){
    return $this->belongsTo('App\Route');
  }

  public function userrequests(){
    return $this->hasMany('App\Userrequests');
  }
}
