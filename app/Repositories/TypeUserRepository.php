<?php

namespace App\Repositories;

use App\Models\type_user;

class TypeUserRepository
{

    public static function getTypeUser()
    {
        return type_user::paginate();
    }

    public static function postTypeUser(array $data)
    {
        $type_user = new type_user();
        $type_user->name = $data['name'];
        $type_user->save();
    }

    public static function deleteTypeUser($id)
    {
        type_user::destroy($id);
    }

    public static function updateTypeUser(array $data, $id)
    {
        $name = $data['name'];
        type_user::where('id', $id)->update([
            'name' => $name
        ]);
    }

    public static function getTypeUserForId($id)
    {
        return type_user::find($id);
    }
}
