<?php

namespace App\Repository\Comment;

use App\Comment;
use http\Env\Request;


interface CommentInterface{
    public function getAllData();
    public function delete($id);
    public function store($id);
    public function update($id, $data);

}


