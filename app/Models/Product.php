<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name','ISBN', 'quantity', 'active', 'quantity_alert', 'image', 'description',
    ];
}
