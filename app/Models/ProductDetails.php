<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetails extends Model
{


 
    use HasFactory;
    protected $fillable = [
        'id',
        'color',
        'price',
        'qty',
        'description',
        'productid',
        'images'
        
    ];
}
