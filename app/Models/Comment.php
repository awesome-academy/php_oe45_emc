<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'comment_parent_id',
        'product_id',
        'content',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function replyComment()
    {
        return $this->belongsTo(Comment::class);
    }

    public function reply()
    {
        return $this->hasMany(Comment::class, 'comment_parent_id');
    }
}
