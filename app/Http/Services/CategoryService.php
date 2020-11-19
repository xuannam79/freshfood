<?php

namespace App\Http\Services;

use App\Models\Category;
use App\Models\Product;

class CategoryService extends BaseService {
    /**
     * Get list category with product
     *
     * @return Category object
     */
    public function getCategoryWithProduct()
    {
        $parent = Category::with('products')->whereParentId(0)->get();

        $children = Category::with('products')->whereIn('parent_id', $parent->pluck('id')->all())->get();

        return $parent->map(function ($item) use ($children) {
            $temp = collect();
            $children->where('parent_id', $item->id)->pluck('products')->map(function ($g) use (&$temp) {
                $temp = $temp->merge($g);
            });

            return [
                'id' => $item->id,
                'name' => $item->name,
                'products' => $item->products->merge($temp),
            ];
        });
    }
}
