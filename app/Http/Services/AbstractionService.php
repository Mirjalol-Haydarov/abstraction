<?php

namespace App\Http\Services;

class AbstractionService
{
    protected $model;
    public function index()
    {
        return $this->model::all();
    }
    public function show($id)
    {
        return $this->model::findOrFail($id);
    }

    public function create($data)
    {
        return $this->model::create($data);
    }

    public function update(array $data, $id)
    {
        $item = $this->show($id);
        $item->update($data);
        return response()->json(['item'=> $item]);
    }
    public function destroy($id)
    {
        $item = $this->show($id);
        $item->delete();
        return redirect()->route('items.index');
    }
}