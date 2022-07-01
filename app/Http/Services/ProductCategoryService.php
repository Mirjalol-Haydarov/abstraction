<?php

Namespace App\Http\Services;

use App\Models\ProductCategory;
use App\Http\Requests\ProductCategory\ProductCategoryStoreRequest;
use App\Http\Requests\ProductCategory\ProductCategoryUpdateRequest;


class ProductCategoryService extends AbstractionService
{
    protected $model = ProductCategory::class;
    
    
}