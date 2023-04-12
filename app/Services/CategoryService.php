<?php

namespace App\Services;

use App\Repositories\CategoryRepository;

class CategoryService
{

    public static function getCategories()
    {
        return CategoryRepository::getCategories();
    }

    public static function postCategory(array $data)
    {
        CategoryRepository::postCategory($data);
        return json_encode(['mjs'=>'Categoria creada con exito']);
    }

    public static function getCategoriesForClient($client_id)
    {
        return CategoryRepository::getCategoriesForClient($client_id);
    }
}
