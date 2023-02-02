<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'price',
        'discount_rate',
        'promotion_price',
        'stock',
        'picture',
        'created_at',
        'updated_at',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function setSlugAttribute($value) {
        $this->attributes['slug'] = implode('-', explode(' ', strtolower($this->title)));
    }
}
