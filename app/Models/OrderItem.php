<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderItem extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'order_id',
        'concert_id',
        'concert_title',
        'concert_image',
        'price',
        'quantity',
        'total',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function concert()
    {
        return $this->belongsTo(Concert::class);
    }
}
