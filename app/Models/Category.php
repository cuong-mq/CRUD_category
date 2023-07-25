<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table= 'categories';
    use HasFactory;
    

    // Mối quan hệ: một danh mục có nhiều bài viết
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
