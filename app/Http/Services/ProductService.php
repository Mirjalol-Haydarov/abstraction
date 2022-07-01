<?php

Namespace App\Http\Services;


use App\Models\Product;
use App\Http\Requests\Product\ProductStoreRequest;
use App\Http\Requests\Product\ProductUpdateRequest;


class ProductService extends AbstractionService
{
  
    public function __construct()
    {
        $this->model = new Product;
    }
    
}
 