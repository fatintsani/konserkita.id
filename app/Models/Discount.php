<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;

    protected $fillable = ['concert_id', 'discount_percentage', 'valid_until'];

    public function concert()
    {
        return $this->belongsTo(Concert::class);
    }
}
