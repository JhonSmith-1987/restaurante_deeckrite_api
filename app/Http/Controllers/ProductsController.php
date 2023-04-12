<?php

namespace App\Http\Controllers;

use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function getProducts()
    {
        return ProductService::getProducts();
    }

    public function postProduct(Request $request)
    {
        $data = $request->all();
        return ProductService::postProduct($data);
    }

    public function deleteProduct($id)
    {
        return ProductService::deleteProduct($id);
    }

    public function getProductsForClient($client_id)
    {
        return ProductService::getProductsForClient($client_id);
    }

    public function getProductsForClientAndCategory($client_id, $category)
    {
        return ProductService::getProductsForClientAndCategory($client_id, $category);
    }

    public function getProductsForId($id)
    {
        return ProductService::getProductsForId($id);
    }

}
