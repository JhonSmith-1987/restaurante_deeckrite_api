<?php

namespace App\Http\Controllers;

use App\Services\UserClientService;
use Illuminate\Http\Request;

class UsersClientsController extends Controller
{
    public function getUserClients()
    {
        return UserClientService::getUserClients();
    }

    public function getUserForId($id)
    {
        return UserClientService::getUserForId($id);
    }

    public function getUserForClient()
    {
        return UserClientService::getUserForClient();
    }

    public function postUserClient(Request $request)
    {
        $data = $request->all();
        return UserClientService::postUserClient($data);
    }

    public function deleteUserClient($id)
    {
        return UserClientService::deleteUserClient($id);
    }

    public function updateUserClient(Request $request, $id)
    {
        $data = $request->all();
        return UserClientService::updateUserClient($data, $id);
    }
}
