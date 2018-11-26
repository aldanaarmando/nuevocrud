<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
      protected $fillable = [
     'id','name','last_name','birthdate','adress','phone','type','email','password'
    ];
}
