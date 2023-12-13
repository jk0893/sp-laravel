<?php

namespace App\Http\Controllers;

use App\Http\Requests\Bus\StoreRequest;
use App\Http\Requests\Bus\UpdateRequest;
use Illuminate\Http\Request;
use App\Models\BusMark;
use App\Models\BusModel;
use App\Models\BusRoute;
use App\Models\Status;
use App\Models\Bus;
use App\Models\Employee;

class BusController extends Controller
{
    public function index()
    {
        $buses = Bus::paginate(12);
        return view('bus.index', compact('buses'));
    }

    public function create()
    {
        $marks = BusMark::all();
        $models = BusModel::all();
        $routes = BusRoute::all();
        $statuses = Status::all();
        return view('bus.create', compact('marks', 'models', 'routes', 'statuses'));
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        Bus::create($data);
        return redirect()->route('bus.index');
    }

    public function show(Bus $bus)
    {
        $employees = Employee::all();
        return view('bus.show', compact('bus', 'employees'));
    }

    public function edit(Bus $bus)
    {
        $marks = BusMark::all();
        $models = BusModel::all();
        $routes = BusRoute::all();
        $statuses = Status::all();
        return view('bus.edit', compact('bus' ,'marks', 'models', 'routes', 'statuses'));
    }

    public function update(UpdateRequest $request, Bus $bus)
    {
        $data = $request->validated();
        $bus->update($data);
        return redirect()->route('admin.bus.show', $bus->id);
    }

    public function destroy(Bus $bus)
    {
        $bus->delete();
        return redirect()->route('bus.index');
    }
}
