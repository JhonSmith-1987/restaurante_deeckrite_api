<?php

namespace App\Services;

use App\Repositories\TypeUserRepository;

class TypeUserService
{

    public static function getTypeUser()
    {
        return TypeUserRepository::getTypeUser();
    }

    public static function postTypeUser(array $data)
    {
        TypeUserRepository::postTypeUser($data);
        return json_encode(['mjs'=>'tipo de usuario creado con exito']);
    }

    public static function deleteTypeUser($id)
    {
        TypeUserRepository::deleteTypeUser($id);
        return json_encode(['mjs'=>'Tipo de usuario eliminado con exito']);
    }

    public static function updateTypeUser(array $data, $id)
    {
        TypeUserRepository::updateTypeUser($data, $id);
        return json_encode(['mjs'=>'Tipo de usuario actualizado con extiro']);
    }

    public static function getTypeUserForId($id)
    {
        return TypeUserRepository::getTypeUserForId($id);
    }
}
