<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartsModel extends Model
{
    protected $table = 'carts';

    protected $fillable = ['user_id'];
}
