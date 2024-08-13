<?php
namespace App\Repositories;

use App\Models\Good;
use Illuminate\Http\Request;

class GoodsRepository
{
    public function filterGoods(Request $request)
    {
        $query = Good::query();

        // Фильтрация по категории
        if ($request->has('category_id')) {
            $query->where('category_id', $request->input('category_id'));
        }

        // Фильтрация по наличию на складе
        if ($request->has('stock_id')) {
            $query->whereHas('stocks', function ($q) use ($request) {
                $q->where('id', $request->input('stock_id'))
                  ->where('count', '>', 0);
            });
        }

        // Фильтрация по цене
        if ($request->has('price_min')) {
            $query->where('prices->price', '>=', $request->input('price_min'));
        }

        if ($request->has('price_max')) {
            $query->where('prices->price', '<=', $request->input('price_max'));
        }

        // Фильтрация по характеристике
        if ($request->has('characteristic_name') && $request->has('characteristic_value')) {
            $query->whereHas('characteristics', function ($q) use ($request) {
                $q->where('name', $request->input('characteristic_name'))
                  ->where('value', $request->input('characteristic_value'));
            });
        }

        // Сортировка по названию
        if ($request->has('sort_by_name')) {
            $query->orderBy('name', $request->input('sort_by_name', 'asc'));
        }

        // Выбор конкретных полей
        if ($request->has('fields')) {
            $fields = $request->input('fields');
            $query->select($fields);
        }

        // Пагинация
        return $query->paginate(14);
    }
}
