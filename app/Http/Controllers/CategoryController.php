<?php

namespace App\Http\Controllers;

use App\Services\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCategories()
    {
        return CategoryService::getCategories();
    }

    public function postCategory(Request $request)
    {
        $data = $request->all();
        return CategoryService::postCategory($data);
    }

    public function getCategoriesForClient($client_id)
    {
        return CategoryService::getCategoriesForClient($client_id);
    }
}
