<?php

namespace App\Services;

use App\Repositories\UserClientRepository;
use Illuminate\Support\Facades\Log;

class UserClientService
{

    public static function getUserClients()
    {
        return UserClientRepository::getUserClients();
    }

    public static function getUserForId($id)
    {
        return UserClientRepository::getUserForId($id);
    }

    public static function postUserClient(array $data)
    {
        UserClientRepository::postUserClient($data);
        return json_encode(['mjs'=>'Usuario creado con exito']);
    }

    public static function deleteUserClient($id)
    {
        UserClientRepository::deleteUserClient($id);
        return json_encode(['mjs'=>'Dato eliminado con exito']);
    }

    public static function updateUserClient(array $data, $id)
    {
        UserClientRepository::updateUserClient($data, $id);
        return json_encode(['mjs'=>'Usuario actualizado con exito']);
    }

    public static function getUserForClient()
    {
        return UserClientRepository::getUserForClient();
    }

}
