<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{

    protected $fillable = [
        'title', 'img', 'description', 'release_date', 'price', 'available'
    ];


    public function actor()
    {
        return $this->belongsTo('App\Model\Actor');
    }
}
