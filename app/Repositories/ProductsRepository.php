<?php

namespace App\Repositories;

use App\Models\ProductsModel;

class ProductsRepository
{
    private $productModel;

    public function __construct()
    {
        $this->productModel = new ProductsModel();
    }

    public function getBrand($request)
    {
        return match($request->brand) {
            "Babolat" => 1,
            "Wilson" => 2,
            "Head" => 3,
            "Tecnifibre" => 4,
            "Yonex" => 5,
        };
    }

    public function getCategory($request)
    {
        return match($request->category) {
            "Bag" => 1,
            "Racquet" => 2,
            "Shoes" => 3,
            "Strings" => 4,
            "Balls" => 5,
        };
    }

    public function addProduct($request, $brand, $category)
    {
        ProductsModel::create([
           "name" => $request->name,
           "description" => $request->description,
            "price" => $request->price,
            "stock" => $request->stock,
            "brand_id" => $brand,
            "category_id" => $category,
            "image_path" => $request->image_path,
        ]);
    }
}
