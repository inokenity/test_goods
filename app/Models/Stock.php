<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = [
        'goods_id', 'count', 'address'
    ];

    public function goods()
    {
        return $this->belongsTo(Good::class, 'goods_id');
    }
}
