<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'author', 'publication_date', 'category_id'];

    /**
     * Get the Books Category.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the book instances.
     */
    public function book_instances()
    {
        return $this->hasMany(BookInstance::class);
    }
}
