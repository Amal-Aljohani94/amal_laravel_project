<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invoice extends Model
{
    use HasFactory;
    protected $fillable = [
        'productid',
        'productname',
        'Price',
        'qty',
        'Tax',
        'total',
        'Desc',
        'Net',
        'userid',
        'username'
    ]
}
