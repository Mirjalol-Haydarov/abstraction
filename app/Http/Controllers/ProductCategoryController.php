<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductCategory\ProductCategoryStoreRequest;
use App\Http\Requests\ProductCategory\ProductCategoryUpdateRequest; 
use  App\Http\Services\ProductCategoryService;
use Illuminate\Http\Request;

class ProductCategoryController extends AbstractionController
{ 
    public function __construct(ProductCategoryService $service)
    {
        $this->service = new ProductCategoryService;
        $this->storeRequestClass = ProductCategoryStoreRequest::class;
        $this->updateRequestClass = ProductCategoryUpdateRequest::class;
    }
    

}
