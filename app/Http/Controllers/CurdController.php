<?php

namespace App\Http\Controllers;

use App\Models\Curd;
use Illuminate\Http\Request;

class CurdController extends Controller
{
    public function index()
    {
        $curd = Curd::all(); // Efficient way to fetch all records
        return view("home", compact('curd'));
    }

    public function add()
    {
        return view('create');
    }

    public function create(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'day' => 'required|string|in:Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday',
            'description' => 'required|string|max:500',
        ]);


        Curd::create($validated); // Simpler way to save data
        return redirect()->route('home')->with('message', 'Data added successfully!');
    }

    public function edit($id)
    {
        $curd = Curd::findOrFail($id); // Ensure it fails gracefully if not found
        return view('edit', compact('curd'));
    }

    public function update(Request $request)
    {
        $curd = Curd::findOrFail($request->id);

        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:500',
            'day' => 'required',
        ]);

        $curd->update($validated);
        return redirect()->route('home')->with('message', 'Data updated successfully!');
    }

    public function destroy($id)
    {
        $curd = Curd::findOrFail($id); // Ensures record exists before deletion
        $curd->delete();
        return redirect()->route('home')->with('message', 'Record deleted successfully!');
    }
}
