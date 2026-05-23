<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'status'];

    // Category has many blogs
    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

    public function scopeActive($query)
    {
        return $query->where('status', true);
    }
}
