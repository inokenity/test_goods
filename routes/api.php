<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoodsController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::get('/goods', [GoodsController::class, 'index']);


// Примеры использования

// Получить все товары из категории 1091:

// GET /api/goods?category_id=1091


// Получить все товары, которые есть на складе с id=2:

// GET /api/goods?stock_id=2


// Получить товары, цена которых от 200 до 1000:

// GET /api/goods?price_min=200&price_max=1000


// Получить товары, у которых производитель "Китай":

// GET /api/goods?characteristic_name=Производитель&characteristic_value=Китай


// Сортировать товары по названию:

// GET /api/goods?sort_by_name=asc


// Получить только id, sku и цену товаров:

// GET /api/goods?fields[]=id&fields[]=sku&fields[]=prices.price


// Получить все товары с указанными выше фильтрами:

// GET /api/goods?category_id=1091&price_min=200&price_max=1000&fields[]=id&fields[]=sku&fields[]=prices.price&sort_by_name=asc