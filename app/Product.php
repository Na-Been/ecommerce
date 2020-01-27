<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Product extends Model
{
    protected $table = 'product';

    public function user(){
        return $this->belongsTo('App\User');
    }
}
