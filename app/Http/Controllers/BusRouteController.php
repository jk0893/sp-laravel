<?php

namespace App\Http\Controllers;

use App\Http\Requests\BusRoute\StoreRequest;
use App\Http\Requests\BusRoute\UpdateRequest;
use Illuminate\Http\Request;
use App\Models\BusRoute;

class BusRouteController extends Controller
{
    public function index()
    {
        $routes = BusRoute::paginate(12);
        return view('busroute.index', compact('routes'));
    }

    public function create()
    {
        return view('busroute.create');
    }

    public function store(StoreRequest $request, BusRoute $route)
    {
        $data = $request->validated();
        BusRoute::create($data);
        return redirect()->route('admin.busroute.show', $route->id);
    }

    public function show(BusRoute $route)
    {
        return view('busroute.show', compact('route'));
    }

    public function edit(BusRoute $route)
    {
        return view('busroute.edit', compact('route'));
    }

    public function update(UpdateRequest $request, BusRoute $route)
    {
        $data = $request->validated();
        $route->update($data);
        return redirect()->route('admin.busroute.show', $route->id);
    }

    public function destroy(BusRoute $route)
    {
        $route->delete();
        return redirect()->route('admin.busroute.index');
    }
}
