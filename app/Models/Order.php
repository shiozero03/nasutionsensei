<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $primarykey = 'id_order';
    protected $fillable = [
        'email',
        'phone',
        'order_category',
        'information'
    ];
}
