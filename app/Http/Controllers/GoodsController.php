<?php

namespace App\Http\Controllers;

use App\Services\GoodsService;
use Illuminate\Http\Request;

class GoodsController extends Controller
{
    protected $goodsService;

    public function __construct(GoodsService $goodsService)
    {
        $this->goodsService = $goodsService;
    }

    public function index(Request $request)
    {
        $goods = $this->goodsService->getFilteredGoods($request);
        return response()->json($goods);
    }
}
