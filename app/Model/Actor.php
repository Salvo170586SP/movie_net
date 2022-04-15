<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
   protected $fillable = [
       'name'
   ];

   public function movies()
   {
       return $this->hasMany('App\Model\Movie');
   }



}
