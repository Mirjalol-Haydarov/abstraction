<?php

namespace App\Http\Controllers;

class AbstractionController extends Controller
{
    protected $service;
    protected $storeRequestClass;
    protected $updateRequestClass;

    public function index()
    {

        $items = $this->service->index();
        return response()->json(['items' => $items]);
    }

    public function show($id)
    {
        $item = $this->service->show($id);
        return response()->json(['product' => $item]);
    }

    public function store()
    {
        $request = app($this->storeRequestClass);
        $item = $this->service->create($request->validated());
        return  response()->json(['item' => $item]);
    }

    public function update($id)
    {
        $request = app($this->updateRequestClass);
        $item = $this->service->update($request->validated(), $id);
        return  response()->json(['item' => $item]);
    }
}
