<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOrders extends Model
{
    use HasFactory;

    protected $table = 'product__orders';
    protected $fillable = ['order_number',
                           'amount', 
                           'order_date', 
                           'description_order', 
                           'priority', 
                           'client_name', 
                           'client_address', 
                           'client_email', 
                           'client_phone'];
}
