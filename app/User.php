<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 *
 */
class User extends Authenticatable
{

  protected $fillable = ['name', 'email', 'password'];

  public function tasks(){
    $this->hasMany(Task::class);
  }
}


 ?>
