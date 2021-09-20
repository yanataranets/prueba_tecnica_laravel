<?php

namespace App\Repository\Comment;

use App\Comment;
use App\Post;


interface CommentInterface{
    public function getAllData();
    public function delete($id);
    public function store($id);
}


