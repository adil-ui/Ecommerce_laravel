<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'price',
        'discount_rate',
        'promotion_price',
        'stock',
        'image',
        'created_at',
        'updated_at',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
