<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $table='like';

    public function like(){
        return $this->hasMany('App\Product');
    }
    public function user(){
        return $this->hasMany('App\User');
    }
}
