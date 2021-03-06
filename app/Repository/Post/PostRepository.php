<?php

namespace App\Repository\Post;
use App\Comment;
use App\Post;
use function is;
use function is_null;

class PostRepository implements PostInterface{

    public function getAllData()
    {
        // TODO: Implement getAllData() method.
        return Post::latest()->paginate(5);
    }

    public function store($data){
        $post = new Post();
        $post->title = $data['title'];
        $post->text = $data['text'];
        $post->image = $data['image'];
        $post->views = $data['views'];
        $post->comments = $data['comments'];
        return $post->save();
    }

    public function update($id, $data)
    {
            $post = Post::find($id);
            $post->title = $data['title'];
            $post->text = $data['text'];
            $post->image = $data['image'];
            return $post->save();
    }

    public function view($id)
    {
        // TODO: Implement view() method.
        return Post::find($id);
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
        return Post::find($id)->delete();
    }

    public function sortType()
    {
        return Post::latest()->orderBy('title');
    }

    public function showcomment($id)
    {
        $comments = Post::find($id)->comment;
        return view('post.comments',compact('comments'));
    }

    public function storecomment($id, $data)
    {
        $post_id = Post::find($id);
        $comment = new Comment();
        $comment->comment = $data['comment'];
        $comment->parent_id = $post_id->id;
        return $comment->save();
    }

    public function sortTypeComment()
    {
        return Comment::latest()->orderBy('created_at');
    }

}
