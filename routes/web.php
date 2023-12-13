<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\BusRouteController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\BusMarkController;
use App\Http\Controllers\BusModelController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {

    Route::middleware('redirect')->group(function () {
        Route::get('/', function () {
            return redirect()->route('auth.login');
        });
    
        Route::get('/login', function () {
            return view('auth.login');
        })->name('auth.login');
    });

    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

    Route::get('/schedule', [ScheduleController::class, 'index'])->name('schedule.index');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::group(['middleware' => 'admin', 'namespace' => 'admin'], function () {

        Route::get('/users', [UserController::class, 'index'])->name('admin.user.index');
        Route::get('/users/create', [UserController::class, 'create'])->name('admin.user.create');
        Route::post('/users', [UserController::class, 'store'])->name('admin.user.store');
        Route::get('/users/{user}', [UserController::class, 'show'])->name('admin.user.show');
        Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('admin.user.edit');
        Route::patch('/users/{user}', [UserController::class, 'update'])->name('admin.user.update');
        Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('admin.user.destroy');

        Route::get('/employees', [EmployeeController::class, 'index'])->name('admin.employee.index');
        Route::get('/employees/create', [EmployeeController::class, 'create'])->name('admin.employee.create');
        Route::post('/employees', [EmployeeController::class, 'store'])->name('admin.employee.store');
        Route::get('/employees/{employee}', [EmployeeController::class, 'show'])->name('admin.employee.show');
        Route::get('/employees/{employee}/edit', [EmployeeController::class, 'edit'])->name('admin.employee.edit');
        Route::patch('/employees/{employee}', [EmployeeController::class, 'update'])->name('admin.employee.update');
        Route::delete('/employees/{employee}', [EmployeeController::class, 'destroy'])->name('admin.employee.destroy');

        Route::get('/buses', [BusController::class, 'index'])->name('admin.bus.index');
        Route::get('/buses/create', [BusController::class, 'create'])->name('admin.bus.create');
        Route::post('/buses', [BusController::class, 'store'])->name('admin.bus.store');
        Route::get('/buses/{bus}', [BusController::class, 'show'])->name('admin.bus.show');
        Route::get('/buses/{bus}/edit', [BusController::class, 'edit'])->name('admin.bus.edit');
        Route::patch('/buses/{bus}', [BusController::class, 'update'])->name('admin.bus.update');
        Route::delete('/buses/{bus}', [BusController::class, 'destroy'])->name('admin.bus.destroy');

        Route::get('/routes', [BusRouteController::class, 'index'])->name('admin.busroute.index');
        Route::get('/routes/create', [BusRouteController::class, 'create'])->name('admin.busroute.create');
        Route::post('/routes', [BusRouteController::class, 'store'])->name('admin.busroute.store');
        Route::get('/routes/{route}', [BusRouteController::class, 'show'])->name('admin.busroute.show');
        Route::get('/routes/{route}/edit', [BusRouteController::class, 'edit'])->name('admin.busroute.edit');
        Route::patch('/routes/{route}', [BusRouteController::class, 'update'])->name('admin.busroute.update');
        Route::delete('/routes/{route}', [BusRouteController::class, 'destroy'])->name('admin.busroute.destroy');

        Route::get('/models', [BusModelController::class, 'index'])->name('admin.busmodel.index');
        Route::get('/models/create', [BusModelController::class, 'create'])->name('admin.busmodel.create');
        Route::post('/models', [BusModelController::class, 'store'])->name('admin.busmodel.store');
        Route::get('/models/{model}', [BusModelController::class, 'show'])->name('admin.busmodel.show');
        Route::get('/models/{model}/edit', [BusModelController::class, 'edit'])->name('admin.busmodel.edit');
        Route::patch('/models/{model}', [BusModelController::class, 'update'])->name('admin.busmodel.update');
        Route::delete('/models/{model}', [BusModelController::class, 'destroy'])->name('admin.busmodel.destroy');

        Route::get('/marks', [BusMarkController::class, 'index'])->name('admin.busmark.index');
        Route::get('/marks/create', [BusMarkController::class, 'create'])->name('admin.busmark.create');
        Route::post('/marks', [BusMarkController::class, 'store'])->name('admin.busmark.store');
        Route::get('/marks/{mark}', [BusMarkController::class, 'show'])->name('admin.busmark.show');
        Route::get('/marks/{mark}/edit', [BusMarkController::class, 'edit'])->name('admin.busmark.edit');
        Route::patch('/marks/{mark}', [BusMarkController::class, 'update'])->name('admin.busmark.update');
        Route::delete('/marks/{mark}', [BusMarkController::class, 'destroy'])->name('admin.busmark.destroy');

    });
});

require __DIR__ . '/auth.php';
