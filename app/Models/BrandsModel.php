<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BrandsModel extends Model
{
    protected $table = 'brands';

    protected $fillable = ['name'];

    public function product()
    {
        return $this->belongsTo(ProductsModel::class, 'brand_id', 'id');
    }
}
