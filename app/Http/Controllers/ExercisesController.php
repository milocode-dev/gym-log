<?php

namespace App\Http\Controllers;

use App\Models\Exercises;
use Illuminate\Http\Request;

class ExercisesController extends Controller
{
    function index() {
        $Alldata = Exercises::latest()->get();

        return view('exercise', compact('Alldata'));
    }

    function form() {
        return view('create_form');
    }

    function store(Request $request) {
        $validated = $request->validate([
            'name'      => 'required|string',
            'weight'    => 'required|integer',
            'reps'      => 'required|integer',
            'notes'     => 'required|string',  
        ]);

        $newData = Exercises::create($validated);

        return redirect()->route('exercise.index')->with('success', 'Latihan baru berhasil dibuat!');
    }

    function destroy($id) {
        $data = Exercises::findOrFail($id);
        $data->delete();

        return redirect('exercise')->with('success', 'Latihan berhasil dihapus!');
    }

    function edit($id) {
        $data = Exercises::findOrFail($id);
        return view('edit_form', compact('data'));
    }

    function update(Request $request, $id) {
        $validated = $request->validate([
            'name'      => 'required|string',
            'weight'    => 'required|integer',
            'reps'      => 'required|integer',
            'notes'     => 'required|string',  
        ]);

        $data = Exercises::findOrFail($id);
        $data->update($validated);

        return redirect()->route('exercise.index')->with('success', 'Latihan baru berhasil diupdate!');
    }
}
