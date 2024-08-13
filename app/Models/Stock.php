<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $table = 'stocks';

    protected $fillable = [
        'goods_id', 'count', 'address'
    ];

    public $timestamps = true;

    public function goods()
    {
        return $this->belongsTo(Goods::class, 'goods_id');
    }
}
