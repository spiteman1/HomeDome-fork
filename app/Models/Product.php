<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{

 use HasFactory;



    protected $table = 'products';

    protected $fillable = [
        'name',
        'sku',
        'price',
        'stock_quantity',
        'description',
        'dimensions',
        'energy_rating',
        'is_available',
    ];

}
