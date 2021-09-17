<?php

namespace App\Repository\Comment;

use App\Comment;


interface CommentInterface{
    public function getAllData();
    public function delete($id);
}


