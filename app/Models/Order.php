<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'reference','shipping', 'total', 'tax', 'payment', 'purchase_order', 'pick','invoice_id','invoice_number','state_id','user_id'
    ];
}
