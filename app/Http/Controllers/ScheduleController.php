<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BusRoute;
use App\Models\Bus;

class ScheduleController extends Controller
{
    public function index()
    {
        $routes = BusRoute::withCount('buses')->paginate(10);
        return view('schedule.index', compact('routes'));
    }
}
