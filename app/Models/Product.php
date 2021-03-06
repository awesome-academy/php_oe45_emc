<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'thumbnail',
        'content',
        'short_description',
        'quantity',
        'views',
        'price',
        'number_of_vote_submissions',
        'total_vote',
        'sold',
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function categories()
    {
        return $this->belongsToMany(
            Category::class,
            'category_product',
            'product_id',
            'category_id'
        )->withTimestamps();
    }

    public function tags()
    {
        return $this->hasManyThrough(
            ProductTag::class,
            Tag::class
        );
    }
}
