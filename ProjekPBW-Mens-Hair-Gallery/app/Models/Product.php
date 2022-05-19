<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        "title",
        "slug",
        "thumbnail",
        "description",
        "price",
        "status",
        "user_id",
    ];

    public function scopeSearch($query, $title)
    {
        return $query->where('title', 'LIKE', "%{$title}%");
    }

    public function scopePublish($query)
    {
        return $query->where('status', "publish");
    }

    public function scopeDraft($query)
    {
        return $query->where('status', "draft");
    }
}
