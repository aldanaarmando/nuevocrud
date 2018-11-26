<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
          protected $fillable = [
     'id','id_student','id_matter','note'
    ];
}
