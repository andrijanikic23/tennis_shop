<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoriesModel extends Model
{
    protected $table = 'categories';

    protected $fillable = ['name'];

    public function product()
    {
        return $this->belongsTo(ProductsModel::class, 'category_id', 'id');
    }
}
