<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductReviewsModel extends Model
{
    protected $table = 'product_reviews';

    protected $fillable = ['user_id', 'product_id', 'rating', 'comment'];
}
