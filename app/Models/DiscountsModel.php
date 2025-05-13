<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiscountsModel extends Model
{
    protected $table = 'discounts';

    protected $fillable = ['product_id', 'discount_percent', 'start_date', 'end_date'];
}
