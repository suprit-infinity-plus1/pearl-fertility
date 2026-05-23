<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'cover_image', 'content', 'author', 'category_id', 'status', 'published_at', 'views',
    ];

    // Blog belongs to one Category
    public function category()
    {
        return $this->belongsTo(BlogCategory::class, 'category_id');
    }

    // Blog belongs to many Tags
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
