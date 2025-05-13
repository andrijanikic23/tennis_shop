<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartItemsModel extends Model
{
    protected $table = 'cart_items';

    protected $fillable = ['user_id'];
}
