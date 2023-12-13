<?php

namespace App\Http\Controllers;

use App\Http\Requests\Employee\StoreRequest;
use App\Http\Requests\Employee\UpdateRequest;
use App\Models\Employee;
use App\Models\User;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::paginate(12);
        return view('employee.index', compact('employees'));
    }

    public function create()
    {
        return view('employee.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        Employee::create($data);
        return redirect()->route('employee.index');
    }

    public function show(Employee $employee)
    {
        $users = User::all();
        return view('employee.show', compact('employee', 'users'));
    }

    public function edit(Employee $employee)
    {
        return view('employee.edit', compact('employee'));
    }

    public function update(Employee $employee, UpdateRequest $request)
    {
        $data = $request->validated();
        $employee->update($data);
        return redirect()->route('employee.show', $employee->id);
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employee.index');
    }
}
