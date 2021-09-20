<?php

namespace App\Http\Controllers\API;

use App\Comment;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Http\Controllers\Comment\CommentController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Post;
use App\Repository\Post\PostInterface;
use function is_null;
use function redirect;

class PostController extends BaseController
{
    //
    protected $post;

    public function __construct(PostInterface $post)
    {
        $this->post = $post;
    }

    public function index(){
        if(View::exists('post.index')){
            return \view('post.index',[
                'posts' => $this->post->getAllData()
            ]);
        }
    }

    public function storeOrUpdate(Request $request, $id = null){
        $data = $request->only(['title', 'text', 'image']);
        if(!is_null($id)){ //update
            $this->post->storeOrUpdate($id, $data);
            return redirect()->route('index')
                ->with('message', 'Post has been updated!');
        }else{//insert
            $this->post->storeOrUpdate($id = null, $data);
            return redirect()->route('index')
                ->with('message', 'Post has been inserted!');
        }
    }
    public function view($id){
        if(View::exists('post.edit')){
            return view('post.edit',['post'=>$this->post->view($id)]);
        }
    }

    public function delete($id){
        $this->post->delete($id);
        return redirect()->route('index')
            ->with('message', 'Post has been deleted!');
    }
    public function showcomment($id)
    {
        $comments = Comment::query()->where('parent_id','=', $id)->get();
        return view('post.comments', ['comments'=>$comments]);
    }
    public function sortType(){
        $collection = collect(Post::all());
        $sortType = $collection->sortBy(function($data, $key){
           return $data['title'];
        });
        return($sortType);
    }
    public function storecomment(Request $request, $id){
        $data = $request->only(['comment']);
//insert
            $this->post->storecomment($id, $data);
            return redirect()->route('index')
                ->with('message', 'Post has been inserted!');
        }
    public function sortTypeComment($id){
        $collection = collect(Comment::query()->where('parent_id','=', $id)->get());
        $sortType= $collection->sortBy(function($data, $key){
            return $data['id'];
        });
        return($sortType);
    }
}
