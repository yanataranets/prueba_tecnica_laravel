<?php

namespace App\Repository\Comment;
use App\Comment;
use App\Post;
use http\Env\Request;
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

    public function update( $id, $data)
    {
        // TODO: Implement update() method.
        $comment = Comment::find($id);
        $comment->comment = $data['comment'];
        return $comment->save();
    }

    public function view($id)
    {
        // TODO: Implement view() method.
        return Comment::find($id);
    }

}
