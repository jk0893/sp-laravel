<?php

namespace App\Http\Controllers;

use App\Http\Requests\BusModel\StoreRequest;
use App\Http\Requests\BusModel\UpdateRequest;
use Illuminate\Http\Request;
use App\Models\BusModel;

class BusModelController extends Controller
{
    public function index()
    {
        $models = BusModel::paginate(12);
        return view('busmodel.index', compact('models'));
    }

    public function create()
    {
        return view('busmodel.create');
    }

    public function store(StoreRequest $request, BusModel $model)
    {
        $data = $request->validated();
        BusModel::create($data);
        return redirect()->route('admin.busmodel.show', $model->id);
    }

    public function show(BusModel $model)
    {
        return view('busmodel.show', compact('model'));
    }

    public function edit(BusModel $model)
    {
        return view('busmodel.edit', compact('model'));
    }

    public function update(UpdateRequest $request, BusModel $model)
    {
        $data = $request->validated();
        $model->update($data);
        return redirect()->route('admin.busmodel.show', $model->id);
    }

    public function destroy(BusModel $model)
    {
        $model->delete();
        return redirect()->route('admin.busmodel.index');
    }
}
