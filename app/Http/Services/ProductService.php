<?php

namespace App\Http\Services;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

/**
 * Class ProductService.
 * @package App\Http\Services
 */
class ProductService extends BaseService {
    /**
     *  Get list feature products
     *
     * @return Product object
     */
    public function getListFeature()
    {
        $now = Carbon::now()->toDateString();

        return Product::with(['images', 'sales' => function($query) use ($now) {
            $query->where('start_time', '<=', $now)
                ->where('end_time', '>=', $now);
        }])->orderBy('id', 'DESC')
            ->take(10)->get();
    }
}

