<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
 
    protected $fillable = [
        'quantity',
        'total',
        'customer_id',
        'product_id',
    ];
}
