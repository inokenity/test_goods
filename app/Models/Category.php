<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = ['name'];

    public $timestamps = true;

    public function goods()
    {
        return $this->hasMany(Goods::class, 'category_id');
    }
}
