<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
 protected $guarded = array('id');
 
 public static $rules =array(
     'name' => 'required',
     'gender' => 'rquired',
     'hobby' => 'required',
     'intoroduction' => 'required',
      );
    //
}
