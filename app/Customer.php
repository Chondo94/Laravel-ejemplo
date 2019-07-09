<?php

namespace App;

use Illuminate\Database\Eloquent\Model; //"Eloquen" es un motor ORM "Mapeo Objeto-Relacion"

class Customer extends Model {
    // protected $table = 'customer';
     protected $fillable = ['name', 'address', 'phone_number'];
}
