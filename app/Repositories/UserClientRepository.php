<?php

namespace App\Repositories;

use App\Models\users_clients;
use Illuminate\Support\Facades\DB;

class UserClientRepository
{

    public static function getUserClients()
    {
        return users_clients::paginate();
    }

    public static function getUserForId($id)
    {
        return users_clients::find($id);
    }

    public static function postUserClient(array $data)
    {
        $user_client = new users_clients();
        $user_client->name = $data['name'];
        $user_client->name_restaurant = $data['name_restaurant'];
        $user_client->address = $data['address'];
        $user_client->phone = $data['phone'];
        $user_client->email = $data['email'];
        $user_client->password = $data['password'];
        $user_client->type_user = $data['type_user'];
        $user_client->save();
    }

    public static function deleteUserClient($id)
    {
        users_clients::destroy($id);
    }

    public static function updateUserClient(array $data, $id)
    {
        $name = $data['name'];
        $name_restaurant = $data['name_restaurant'];
        $address = $data['address'];
        $phone = $data['phone'];
        $email = $data['email'];
        $password = $data['password'];
        $type_user = $data['type_user'];
        users_clients::where('id', $id)->update([
            'name'=>$name,
            'name_restaurant'=>$name_restaurant,
            'address'=>$address,
            'phone'=>$phone,
            'email'=>$email,
            'password'=>$password,
            'type_user'=>$type_user
        ]);
    }

    public static function getUserForClient()
    {
        return DB::table('users_clients')->where('type_user', '=', 'cliente')->get();
    }

}
