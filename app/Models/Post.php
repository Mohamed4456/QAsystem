<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Comment;

class Post extends Model
{
    use HasFactory;

    protected $fillable=[
        'title','description'
    ];


    
    public function comments()
    {
        return $this->hasMany(Comment::class)->whereNull('perant_id')  ;
    }

}
