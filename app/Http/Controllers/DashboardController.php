<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Bus\UpdateRequest;
use App\Models\User;
use App\Models\Bus;
use App\Models\Status;

class DashboardController extends Controller
{
    public function index()
    {
        $statuses = Status::all();
        $users = User::all();
        return view('dashboard', compact('users', 'statuses'));
    }
}
