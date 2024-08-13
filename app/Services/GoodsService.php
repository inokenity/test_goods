<?php
namespace App\Services;

use App\Repositories\GoodsRepository;
use Illuminate\Http\Request;

class GoodsService
{
    protected $goodsRepository;

    public function __construct(GoodsRepository $goodsRepository)
    {
        $this->goodsRepository = $goodsRepository;
    }

    public function getFilteredGoods(Request $request)
    {
        return $this->goodsRepository->filterGoods($request);
    }
}
