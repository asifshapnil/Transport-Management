<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userrequest extends Model
{
    public function user(){
      return $this->belongsTo('App\User');
    }
    public function bus(){
      return $this->belongsTo('App\Bus');
    }
}
