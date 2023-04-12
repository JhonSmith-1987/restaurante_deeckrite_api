<?php

namespace App\Http\Controllers;

use App\Services\TypeUserService;
use Illuminate\Http\Request;

class TypeUserController extends Controller
{
    public function getTypeUser()
    {
        return TypeUserService::getTypeUser();
    }

    public function getTypeUserForId($id)
    {
        return TypeUserService::getTypeUserForId($id);
    }

    public function postTypeUser(Request $request)
    {
        $data = $request->all();
        return TypeUserService::postTypeUser($data);
    }

    public function deleteTypeUser($id)
    {
        return TypeUserService::deleteTypeUser($id);
    }

    public function updateTypeUser(Request $request, $id)
    {
        $data = $request->all();
        return TypeUserService::updateTypeUser($data, $id);
    }
}
