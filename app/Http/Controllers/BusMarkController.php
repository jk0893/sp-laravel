<?php

namespace App\Http\Controllers;

use App\Http\Requests\BusMark\StoreRequest;
use App\Http\Requests\BusMark\UpdateRequest;
use Illuminate\Http\Request;
use App\Models\BusMark;

class BusMarkController extends Controller
{
    public function index()
    {
        $marks = BusMark::paginate(8);
        return view('busmark.index', compact('marks'));
    }

    public function create()
    {
        return view('busmark.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        User::create($data);
        return redirect()->route('admin.busmark.index');
    }

    public function show(Busmarks $mark)
    {
        return view('busmark.show', compact('mark'));
    }

    public function edit(Busmarks $mark)
    {
        return view('busmark.edit', compact('mark'));
    }

    public function update(UpdateRequest $request, Busmarks $mark)
    {
        $data = $request->validated();
        $mark->update($data);
        return redirect()->route('admin.busmark.show', $mark->id);
    }

    public function destroy(Busmarks $mark)
    {
        $mark->delete();
        return redirect()->route('admin.busmark.index');
    }
}
