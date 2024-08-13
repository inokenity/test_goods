<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Characteristic extends Model
{
    use HasFactory;

    protected $table = 'characteristics';

    protected $fillable = [
        'goods_id', 'name', 'value'
    ];

    public $timestamps = true;

    public function goods()
    {
        return $this->belongsTo(Goods::class, 'goods_id');
    }
}
