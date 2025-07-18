<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Concert extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'location',
        'datetime',
        'genre',
        'price',
        'image',
    ];

    public function discount()
    {
        return $this->hasOne(Discount::class);
    }
}
