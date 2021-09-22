<?php

namespace App\Repository\User;

use App\User;
use http\Env\Request;

interface UserInterface{
    public function getAllUsers();
    public function store( $data);
    public function update($id, $data);
    public function sortType();
    public function view($id);

}
