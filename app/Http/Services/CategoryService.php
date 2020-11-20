<?php

namespace App\Http\Services;

use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;

class CategoryService extends BaseService {
    /**
     * Get list category with product
     *
     * @return Category object
     */
    public function getCategoryWithProduct()
    {
        $now = Carbon::now()->toDateString();
        $parent = Category::with('products')->whereParentId(0)->get();
        $children = Category::with(['products' => function($query) use ($now){
            $query->with(['images', 'sales' => function($q) use ($now) {
                $q->where('start_time', '<=', $now)
                    ->where('end_time', '>=', $now);
            }]);
        }])->whereIn('parent_id', $parent->pluck('id')->all())->get();

        return $parent->map(function ($item) use ($children) {
            $temp = collect();
            $children->where('parent_id', $item->id)->pluck('products')->map(function ($g) use (&$temp) {
                $temp = $temp->merge($g);
            });

//            dd($item->products->merge($temp)->chunk(2));
//            $arrayItem = ;
//            $c = array_chunk($item->products->merge($temp)->toArray(), 2);
//            dd($c);
            return [
                'id' => $item->id,
                'name' => $item->name,
                'products' => $item->products->merge($temp),
                'group_products' => array_chunk($item->products->merge($temp)->toArray(), 2),
            ];
        });
    }
}
