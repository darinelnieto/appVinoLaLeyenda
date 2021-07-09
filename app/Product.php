<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    /**
     * Relacion Modelo Order
     */
    public function orders()
    {
        return $this->belongsToMany('App\Oreder')->withTimestamps();
    }

}
