<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController;
use App\Http\Controllers\Controller;
use App\Post;
use App\Repository\Post\PostInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Comment;
use App\Repository\Comment\CommentInterface;
use function is_null;
use function redirect;

class CommentController extends BaseController
{
    //
    protected $comment;

    public function __construct(CommentInterface $comment)
    {
        $this->comment = $comment;
    }
    public function index()
    {
        if (View::exists('post.comments')) {
            return \view('post.comments', [
                'comments' => $this->comment->getAllData()
            ]);
        }
    }
    public function delete($id){
        $this->comment->delete($id);
        return redirect()->route('index')
            ->with('message', 'Comment has been deleted!');
    }


}
