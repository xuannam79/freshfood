<?php

namespace App\Http\Controllers\Shop;

use App\Http\Services\CategoryService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class CategoryController
 *
 * @package App\Http\Controllers\Shop
 */
class CategoryController extends Controller
{
    /**
     * @var CategoryService
     */
    public $service;

    /**
     * CategoryController constructor.
     *
     * @param CategoryService $service
     */
    public function __construct(CategoryService $service)
    {
        $this->service = $service;
    }

    /**
     * @api /category-product
     *
     * @return \App\Models\Category
     */
    public function getCategoryWithProduct()
    {
        return $this->service->getCategoryWithProduct();
    }
}
