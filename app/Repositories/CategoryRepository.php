<?php

namespace App\Repositories;

use App\Models\category;
use Illuminate\Support\Facades\DB;

class CategoryRepository
{

    public static function getCategories()
    {
        return category::paginate();
    }

    public static function postCategory(array $data)
    {
        $category = new category();
        $category->name = $data['name'];
        $category->client_id = $data['client_id'];
        $category->save();
    }

    public static function getCategoriesForClient($client_id)
    {
        return DB::table('categories')->where('client_id', '=', $client_id)->get();
    }
}
