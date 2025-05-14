<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductsModel extends Model
{
    protected $table = 'products';

    protected $fillable = ['name', 'description', 'price', 'stock', 'brand_id', 'category_id', 'image_path'];

    public function productBrand()
    {
        return $this->hasOne(BrandsModel::class, 'id', 'brand_id');
    }

    public function productCategory()
    {
        return $this->hasOne(CategoriesModel::class, 'id', 'category_id');
    }


}
