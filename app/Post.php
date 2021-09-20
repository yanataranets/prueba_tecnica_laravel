<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use PhpParser\Comment;

class Post extends Model
{
    //
    protected $fillable = [
        'title', 'text', 'image', 'comments'
    ];
    /**
     * @var mixed
     */
    public function user(){
        return $this->belongsTo(User::class);
}
    public function comments(){
        return $this->hasMany(Comment::class, 'parent_id', 'id');
    }

}
