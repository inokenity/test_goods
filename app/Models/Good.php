<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    use HasFactory;

    protected $table = 'goods';

    protected $fillable = [
        'category_id', 'sku', 'name', 'prices', 'description', 'is_published'
    ];

    protected $casts = [
        'prices' => 'array',
    ];

    public $timestamps = true;

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function stocks()
    {
        return $this->hasMany(Stock::class, 'goods_id');
    }

    public function characteristics()
    {
        return $this->hasMany(Characteristic::class, 'goods_id');
    }
}
