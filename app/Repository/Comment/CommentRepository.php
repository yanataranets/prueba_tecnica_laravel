<?php

namespace App\Repository\Comment;
use App\Comment;
use App\Post;
use function is;
use function is_null;

class CommentRepository implements CommentInterface {

    public function getAllData()
    {
        // TODO: Implement getAllData() method.
        return Comment::latest()->paginate(5);
    }
    public function delete($id)
    {
        // TODO: Implement delete() method.
        return Comment::find($id)->delete();
    }

}
