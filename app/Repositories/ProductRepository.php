<?php

namespace App\Repositories;

use App\Models\products;
use Illuminate\Support\Facades\DB;

class ProductRepository
{

    public static function getProducts()
    {
        return products::paginate();
    }

    public static function postProduct(array $data)
    {
        $product = new products();
        $product->name = $data['name'];
        $product->imgRef = $data['imgRef'];
        $product->value = $data['value'];
        $product->description = $data['description'];
        $product->category = $data['category'];
        $product->client_id = $data['client_id'];
        $product->save();
    }

    public static function deleteProduct($id)
    {
        products::destroy($id);
    }

    public static function getProductsForClient($client_id)
    {
        return DB::table('products')->where('client_id', '=', $client_id)->get();
    }

    public static function getProductsForClientAndCategory($client_id, $category)
    {
        return DB::table('products')->where('client_id', '=', $client_id )
            ->where('category', '=', $category)->get();
    }

    public static function getProductsForId($id)
    {
        return products::find($id);
    }
}
