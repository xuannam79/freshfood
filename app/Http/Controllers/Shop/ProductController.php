<?php

namespace App\Http\Controllers\Shop;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Services\ProductService;

/**
 * Class ProductController
 * @package App\Http\Controllers\Shop
 */
class ProductController extends Controller
{
    /**
     * @var ProductService
     */
    public $service;

    /**
     * ProductController constructor
     *
     * @param ProductService $service
     */
    public function __construct(ProductService $service)
    {
        $this->service = $service;
    }

    /**
     * @api /product-feature
     *
     * @return Product oblject
     */
    public function getListFeature()
    {
        return $this->service->getListFeature();
    }
}
