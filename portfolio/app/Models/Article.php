<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content'];

    /**
     * Define the relationship with the Category model.
     * An article belongs to one category.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

