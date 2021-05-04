<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
class Image extends Model
{
    use HasFactory;
    protected $fillable=[
        'image',
        'post_id',
    ];

    public function posts(){
        return $this->belongsTo(Post::class);
    }
}
