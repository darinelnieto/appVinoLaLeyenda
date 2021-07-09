<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * Relacion Modelo Product
     */
    public function orders()
    {
        return $this->belongsToMany('App\Product')->withTimestamps();
    }
}
