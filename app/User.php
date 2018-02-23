<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getName(){
      if ($this->first_name and $this->last_name) {
        return "$this->lastname $this->last_name";
      }
      else{
        return $this->email;
      }
    }

    public function userrequests(){
      return $this->hasMany('App\Userrequest');
    }
}
