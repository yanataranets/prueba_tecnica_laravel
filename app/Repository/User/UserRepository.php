<?php

namespace App\Repository\User;
use App\User;


class UserRepository implements UserInterface{


    public function getAllUsers()
    {
        // TODO: Implement getAllUsers() method.
        return User::latest()->paginate(5);
    }

    public function store( $data)
    {
        // TODO: Implement store() method.
        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = bcrypt($data['password']);
        return $user->save();
    }

    public function update($id, $data){
        $user = User::find($id);
        $user->name = $data['name'];
        $user->email = $data['email'];
        return $user->save();
    }

    public function sortType()
    {
        // TODO: Implement sortType() method.
        return User::latest()->orderBy('name');
    }

    public function view($id)
    {
        // TODO: Implement view() method.
        return User::find($id);
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
        return User::find($id)->delete();
    }

}
