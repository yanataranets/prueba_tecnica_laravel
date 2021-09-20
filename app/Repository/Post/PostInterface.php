<?php

namespace App\Repository\Post;

use App\Post;
use http\Env\Request;


interface PostInterface{
    public function getAllData();
    public function storeOrUpdate($id = null, $data);
    public function view($id);
    public function delete($id);
    public function showcomment($id);
    public function sortType();
    public function storecomment($id,$data);
}


