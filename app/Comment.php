<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable = [
        'parent_id', 'comment'
    ];
    /**
     * @var mixed
     */


    public function post(){
        return $this->belongsTo(Post::class);
    }


}
