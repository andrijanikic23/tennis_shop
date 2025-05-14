<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductsRequest;
use App\Models\ProductsModel;
use App\Repositories\ProductsRepository;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function newProduct(ProductsRequest $request)
    {
        $product = new ProductsRepository();
        $brand = $product->getBrand($request);
        $category = $product->getCategory($request);
        $insertProduct = $product->addProduct($request, $brand, $category);

        return view('successfullyAddedProduct');
    }

    public function searchResults(Request $request)
    {
        $newSearch = new ProductsRepository();
        $brandId = $newSearch->getBrand($request);
        $categoryId = $newSearch->getCategory($request);

        $allProducts = ProductsModel::where('brand_id', $brandId)->where('category_id', $categoryId)->get();

        return view('searchResults', compact('allProducts'));
    }

    public function singleProduct($productId)
    {
        $particularProduct = ProductsModel::whereId($productId)->first();

        return view('singleProduct', compact('particularProduct'));
    }
}
