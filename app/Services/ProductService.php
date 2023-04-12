<?php

namespace App\Services;

use App\Repositories\ProductRepository;

class ProductService
{

    public static function getProducts()
    {
        return ProductRepository::getProducts();
    }

    public static function postProduct(array $data)
    {
        ProductRepository::postProduct($data);
        return json_encode(['mjs'=>'Producto creado con exito']);
    }

    public static function deleteProduct($id)
    {
        ProductRepository::deleteProduct($id);
        return json_encode(['mjs'=>'Producto eliminado con exito']);
    }

    public static function getProductsForClient($client_id)
    {
        return ProductRepository::getProductsForClient($client_id);
    }

    public static function getProductsForClientAndCategory($client_id, $category)
    {
        return ProductRepository::getProductsForClientAndCategory($client_id, $category);
    }

    public static function getProductsForId($id)
    {
        return ProductRepository::getProductsForId($id);
    }
}
